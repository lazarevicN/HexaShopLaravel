<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product
{

    public function getProductsAdmin(){

        return DB::table('products as p')
            ->join('products_prices as pr', 'p.id', '=', 'pr.product_id')
            ->join('prices as pc', 'pr.price_id', '=', 'pc.id')
            ->join('brands as b', 'p.brand_id', '=', 'b.id')
            ->leftJoin('on_sales as os', 'pr.id', '=', 'os.product_price_id')
            ->select('p.id as id', 'p.name as prodName', 'p.main_picture as picture', 'b.name as brand', 'pc.price', 'os.new_price as newPrice', 'os.dateFrom as dateFrom', 'os.dateTo as dateTo')
            ->orderBy('p.id', 'desc')
            ->get();

    }

    public function getOneProduct($id){

        return DB::table('products as p')
            ->join('products_prices as pr', 'p.id', '=', 'pr.product_id')
            ->join('prices as pc', 'pr.price_id', '=', 'pc.id')
            ->join('brands as b', 'p.brand_id', '=', 'b.id')
            ->join('categories as c', 'p.category_id', '=', 'c.id')
            ->join('fits as f', 'p.fit_id', '=', 'f.id')
            ->join('genders as g', 'p.gender_id', '=', 'g.id')
            ->select('p.id as id','p.name as productName', 'pc.price as price', 'pc.id as idPrice' , 'f.id as idFit','f.name as fit', 'c.id as idCategory', 'c.name as category', 'b.id as idBrand', 'b.name as brand', 'g.id as idGender', 'g.name as gender')
            ->where('p.id', $id)
            ->first();
    }

    public function getProductSizes($id){

        return DB::table('products as p')
            ->join('products_sizes as ps', 'p.id', '=', 'ps.product_id')
            ->join('sizes as s', 'ps.size_id', '=', 's.id')
            ->select('s.id as id', 's.size as size', 'ps.quantity as quantity')
            ->where('p.id', $id)
            ->get();
    }

    public function getProductImages($id){

        return DB::table('products as p')
            ->join('products_pictures as pt', 'p.id', '=', 'pt.product_id')
            ->join('pictures as ps', 'pt.picture_id', '=', 'ps.id')
            ->select('ps.path as path')
            ->where('p.id', $id)
            ->get();
    }

    public function getProductOnSale($id){

        return DB::table('products as p')
            ->join('products_prices as pr', 'p.id', '=', 'pr.product_id')
            ->join('on_sales as os', 'pr.id', '=', 'os.product_price_id')
            ->select('os.new_price as newPrice', 'os.dateFrom as dateFrom', 'os.dateTo as dateTo')
            ->where('p.id', $id)
            ->first();
    }

    public function countProducts(){
        return DB::table('products')
            ->count();
    }

    public function getLatestProducts($genderId){
        return DB::table('products as p')
            ->join('products_prices as pr', 'p.id', '=', 'pr.product_id')
            ->join('prices as pc', 'pr.price_id', '=', 'pc.id')
            ->leftJoin('on_sales as os', 'pr.id', '=', 'os.product_price_id')
            ->join('brands as b', 'p.brand_id', '=', 'b.id')
            ->select('p.id as id', 'p.name as prodName', 'p.main_picture as picture', 'b.name as brand',  'pc.price', 'os.new_price as newPrice', 'os.dateFrom as dateFrom', 'os.dateTo as dateTo')
            ->where('p.gender_id', $genderId)
            ->orderBy('p.id', 'desc')
            ->take(6)
            ->get();
    }

    public function getProducts($request, $genderId){

        $query = DB::table('products as p');

        $query = $query->join('products_prices as pr', 'p.id', '=', 'pr.product_id');
        $query = $query->join('prices as pc', 'pr.price_id', '=', 'pc.id');
        $query = $query->join('brands as b', 'p.brand_id', '=', 'b.id');
        $query = $query->leftJoin('on_sales as os', 'pr.id', '=', 'os.product_price_id');


        if($request->has('categories')){

            $categories = $request->input('categories');
            $query = $query->whereIn('p.category_id', $categories);
        }

        if($request->has('brands')){

            $brands = $request->input('brands');
            $query = $query->whereIn('p.brand_id', $brands);
        }

        if($request->has('fits')){

            $fits = $request->input('fits');
            $query = $query->whereIn('p.fit_id', $fits);
        }

        if($request->has('search')){
            $query = $query->where(function($q) use ($request) {
                $forSearch = $request->get("search");
                return $q->where('p.name', 'LIKE', '%'.$forSearch.'%')
                    ->orWhere('b.name', 'LIKE','%'.$forSearch.'%');
            });
        }

        if($request->has('sort')){

            $sort = $request->input('sort');
            if($sort == 'lowToHigh'){

                $query = $query->orderBy('pc.price');

            }else if($sort == 'highToLow'){

                $query = $query->orderBy('pc.price', 'desc');

            }else if($sort == 'latest'){

                $query = $query->orderBy('p.id', 'desc');

            }
        }

        $query = $query->where('p.gender_id', $genderId);
        $query = $query->select('p.id as id', 'p.name as prodName', 'p.main_picture as picture', 'b.name as brand', 'pc.price', 'os.new_price as newPrice', 'os.dateFrom as dateFrom', 'os.dateTo as dateTo');

        return $query->paginate(9)->withQueryString();
    }

    public static function image($key){

        move_uploaded_file($_FILES[$key]['tmp_name'], public_path().'/assets/images/'.time() . $_FILES[$key]['name']);
        return time() . $_FILES[$key]['name'];
    }

}
