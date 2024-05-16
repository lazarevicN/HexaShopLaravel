<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Fit;
use App\Models\Gender;
use App\Models\Price;
use App\Models\Product;
use App\Models\Size;
use Carbon\Carbon;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends ResourceController
{
    private $productModel;
    private $categoryModel;
    private $brandModel;
    private $sizeModel;
    private $fitModel;
    private $genderModel;
    private $priceModel;
    private $discountModel;

    public function __construct()
    {
        parent::__construct();

        $this->productModel = new Product();
        $this->categoryModel = new Category();
        $this->brandModel = new Brand();
        $this->sizeModel = new Size();
        $this->fitModel = new Fit();
        $this->genderModel = new Gender();
        $this->priceModel = new Price();
        $this->discountModel = new Discount();


    }

    public function show($id){

        $currentDate = Carbon::now()->toDateTimeString();

        $this->data['product'] = $this->productModel->getOneProduct($id);
        $this->data['images'] = $this->productModel->getProductImages($id);
        $this->data['sizes'] = $this->productModel->getProductSizes($id);
        $this->data['onSale'] = $this->productModel->getProductOnSale($id);
        $this->data['date'] = $currentDate;

        return view('pages.products.show', $this->data);
    }

    public function fetchDataFromOtherTables(){

        $this->data['categories'] = $this->categoryModel->get();
        $this->data['brands'] = $this->brandModel->get();
        $this->data['sizes'] = $this->sizeModel->get();
        $this->data['fits'] = $this->fitModel->get();
        $this->data['genders'] = $this->genderModel->get();
    }

    public function index(Request $request){

        $currentDate = Carbon::now()->toDateTimeString();

        $route = \Request::route()->getName();

        $qs = $request->all();

        self::fetchDataFromOtherTables();

        if($route == 'men'){

            $this->data['products'] = $this->productModel->getProducts($request,1);
            $this->data['qs'] = $qs;
            $this->data['date'] = $currentDate;
            return view('pages.products.index', $this->data);

        }else if($route == 'women'){

            $this->data['products'] = $this->productModel->getProducts($request,2);
            $this->data['qs'] = $qs;
            $this->data['date'] = $currentDate;
            return view('pages.products.index', $this->data);

        }else if($route == 'kids'){

            $this->data['products'] = $this->productModel->getProducts($request,3);
            $this->data['qs'] = $qs;
            $this->data['date'] = $currentDate;
            return view('pages.products.index', $this->data);

        }

    }

    public function create(){

        self::fetchDataFromOtherTables();
        $this->data['prices'] = $this->priceModel->get();

        return view('pages.admin.create', $this->data);
    }

    public function store(StoreRequest $request){

        $name = $request->input('name');
        $brand = $request->input('brand');
        $category = $request->input('category');
        $gender = $request->input('gender');
        $price = (float)$request->input('price');
        $fit = $request->input('fit');
        $sizes = $request->input('sizes');

        $mainPicture = $this->productModel->image('mainPicture');
        $picture1 = $this->productModel->image('picture1');
        $picture2 = $this->productModel->image('picture2');


        try{

            $select = DB::table('products')
                ->where('name', $name)
                ->first();

            if($select){

                return redirect()->route('admin.create')->with('danger', 'That product name already exists!');

            }else{

                $insertProduct = DB::table('products')->insertGetId([
                    'name' => $name,
                    'main_picture' => $mainPicture,
                    'brand_id' => $brand,
                    'category_id' => $category,
                    'gender_id' => $gender,
                    'fit_id' => $fit,
                    'created_at' => Carbon::now()->toDateTime()
                ]);

                if($insertProduct){

                    for($i = 0; $i < count($sizes); $i++){

                        $insertSizes = DB::table('products_sizes')->insert([
                            'product_id' => $insertProduct,
                            'size_id' => $sizes[$i],
                            'quantity' => 10,
                            'created_at' => Carbon::now()->toDateTime()
                        ]);
                    }

                    $insertPrice = DB::table('products_prices')->insert([
                        'product_id' => $insertProduct,
                        'price_id' => $price,
                        'created_at' => Carbon::now()->toDateTime()
                    ]);

                    $insertImage1 = DB::table('pictures')->insertGetId([
                        'path' => $picture1,
                        'created_at' => Carbon::now()->toDateTime()
                    ]);

                    $insertImage2 = DB::table('pictures')->insertGetId([
                        'path' => $picture2,
                        'created_at' => Carbon::now()->toDateTime()
                    ]);

                    if($insertImage1 && $insertImage2){

                        $insertProductsImages1 = DB::table('products_pictures')->insert([
                            'product_id' => $insertProduct,
                            'picture_id' => $insertImage1,
                            'created_at' => Carbon::now()->toDateTime()
                        ]);
                        $insertProductsImages2 = DB::table('products_pictures')->insert([
                            'product_id' => $insertProduct,
                            'picture_id' => $insertImage2,
                            'created_at' => Carbon::now()->toDateTime()
                        ]);
                    }

                    return redirect()->route('admin.create')->with('success', 'You have successfully added new product!');
                }
            }

        }catch(QueryException $e){

            Log::error($e->getMessage());
        }

    }

    public function edit($id){

        self::fetchDataFromOtherTables();
        $this->data['prices'] = $this->priceModel->get();
        $this->data['discounts'] = $this->discountModel->get();
        $this->data['product'] = $this->productModel->getOneProduct($id);
        $this->data['productSizes'] = $this->productModel->getProductSizes($id);

        return view('pages.admin.edit', $this->data);
    }

    public function update(UpdateRequest $request, $id){

        $name = $request->input('name');
        $brand = $request->input('brand');
        $category = $request->input('category');
        $gender = $request->input('gender');
        $fit = $request->input('fit');
        $price = $request->input('price');
        $sizes = $request->input('sizes');
        $onSale = $request->input('onSale');

        try{

            $updateProduct = DB::table('products')
                ->where('id', $id)
                ->update([
                    'name' => $name,
                    'brand_id' => $brand,
                    'category_id' => $category,
                    'gender_id' => $gender,
                    'fit_id' => $fit,
                    'updated_at' => Carbon::now()->toDateTime()
                ]);

            if($updateProduct){

                $selectProductSize = DB::table('products_sizes')
                    ->where('product_id', $id)
                    ->get();

                if($selectProductSize){

                    $delete = DB::table('products_sizes')
                        ->where('product_id', $id)
                        ->delete();

                    if($delete){

                        for($i = 0; $i < count($sizes); $i++){

                            $insertUpdatedSizes = DB::table('products_sizes')
                                ->insert([
                                    'product_id' => $id,
                                    'size_id' => $sizes[$i],
                                    'quantity' => 10,
                                ]);
                        }

                        $selectProductPrice = DB::table('products_prices')
                            ->select('id')
                            ->where('product_id', $id)
                            ->first();

                        if($selectProductPrice){

                            $updateProductPrice = DB::table('products_prices')
                                ->where('product_id', $id)
                                ->update([
                                    'price_id' => $price,
                                    'updated_at' => Carbon::now()->toDateTime()
                                ]);

                            if($onSale == 'yes'){

                                $productPriceId = $selectProductPrice->id;
                                $discount = $request->input('discount');

                                if($discount != '0') {

                                    $discountPercentage = DB::table('discounts')
                                        ->select('discount')
                                        ->where('id', $discount)
                                        ->first();

                                }else{

                                    return redirect()->route('admin.edit', $id)->with('danger', 'You must pick discount percentage!');
                                }

                                $productOnSale = DB::table('on_sales')
                                    ->where('product_price_id', $productPriceId)
                                    ->first();

                                if($discountPercentage){

                                    $discountValue = $discountPercentage->discount;

                                    $priceColumn = DB::table('prices')
                                        ->select('price')
                                        ->where('id', $price)
                                        ->first();

                                    $priceValue = $priceColumn->price;
                                    $discountedPrice = ($priceValue*$discountValue) / 100;

                                    $newPrice = $priceValue - $discountedPrice;

                                    $dateFrom = $request->input('dateFrom');
                                    $dateTo = $request->input('dateTo');

                                        if($productOnSale){

                                            if($dateFrom != null && $dateTo != null && $dateFrom < $dateTo){

                                                $updateProductOnSale = DB::table('on_sales')
                                                    ->where('product_price_id', $productPriceId)
                                                    ->update([
                                                        'discount_id' => $discount,
                                                        'dateFrom' => $dateFrom,
                                                        'dateTo' => $dateTo,
                                                        'new_price' => $newPrice,
                                                        'updated_at' => Carbon::now()->toDateTime()
                                                    ]);

                                                return redirect()->route('admin.edit', $id)->with('success', 'You have successfully updated new product!');

                                            }
                                        }else{

                                            if($dateFrom != null && $dateTo != null){

                                                $insertProductOnSale = DB::table('on_sales')
                                                    ->insert([
                                                        'product_price_id' => $productPriceId,
                                                        'discount_id' => $discount,
                                                        'dateFrom' => $dateFrom,
                                                        'dateTo' => $dateTo,
                                                        'new_price' => $newPrice,
                                                        'created_at' => Carbon::now()->toDateTime()
                                                    ]);

                                                return redirect()->route('admin.edit', $id)->with('success', 'You have successfully updated new product!');
                                            }
                                        }
                                }
                            }
                            return redirect()->route('admin.edit', $id)->with('success', 'You have successfully updated new product!');
                        }
                    }
                }
            }

        }catch(\Exception $e){

            Log::error($e->getMessage());
        }
    }

    public function delete(Request $request){

        $id = $request->input('id');

        try{

            $select = DB::table('products')
                ->where('id', $id)
                ->first();

            if($select){

                $delete = DB::table('products')
                    ->where('id', $id)
                    ->delete();

                if($delete){

                    return "You have successfully deleted choosen product!";
                }
            }

        }catch(\Exception $e){

            Log::error($e->getMessage());
        }

    }
}
