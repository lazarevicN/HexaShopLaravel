<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends ResourceController
{
    private $cartModel;
    private $orderModel;

    public function __construct()
    {

        parent::__construct();

        $this->cartModel = new Cart();
        $this->orderModel = new Order();
    }

    public function index(){

        return view('pages.main.cart', $this->data);
    }

    public function addToCart(Request $request){

        $product_id = $request->input('idProduct');
        $size_id = $request->input('idSize');
        $quantity = $request->input('quantity');

        if(session()->has('user')){

            $user_id = session('user')->id;
        }

        try{

            $product_size_id = DB::table('products_sizes')
                ->select('id', 'quantity')
                ->where('product_id', $product_id)
                ->where('size_id', $size_id)
                ->first();

            if($product_size_id){

                if($quantity > $product_size_id->quantity){

                    return "Not enough in stock!";
                }

                $select = DB::table('carts')
                    ->where('product_size_id', $product_size_id->id)
                    ->where('user_id', $user_id)
                    ->where('bought', '=', false)
                    ->first();

                if($select){

                    return "Already in cart!";
                }else{

                    $insert = DB::table('carts')->insert([
                        'product_size_id' => $product_size_id->id,
                        'user_id' => $user_id,
                        'quantity' => $quantity,
                        'bought' => false
                    ]);

                    if($insert){

                        DB::table('admin')->insert([
                            'user_id' => session('user')->id,
                            'action' => 'Added product to cart',
                            'date' => Carbon::now()->toDateTime()
                        ]);

                        return "You have successfully added to cart!";
                    }
                }
            }

        }catch(\Exception $e){

            Log::error($e->getMessage());
        }
    }

    public function showCart(){

        $products = $this->cartModel->getCart();
       return response()->json($products);
    }

    public function buy(Request $request){

        $cart_id = $request->input('id');
        $product_size_id = $request->input('product_size_id');

        $insert = DB::table('orders')->insert([
            'cart_id' => $cart_id,
            'date' => Carbon::now()->toDateTime()
        ]);

        if($insert){

            $quantityProductSize = DB::table('products_sizes')
                ->select('quantity')
                ->where('id', $product_size_id)
                ->first();

            $quantityCart = DB::table('carts')
                ->select('quantity')
                ->where('id', $cart_id)
                ->first();

            DB::table('products_sizes')
                ->where('id', $product_size_id)
                ->update([
                    'quantity' => $quantityProductSize->quantity - $quantityCart->quantity
                ]);

            DB::table('carts')
                ->where('id', $cart_id)
                ->update([
                    'bought' => true
                ]);

            DB::table('admin')->insert([
                'user_id' => session('user')->id,
                'action' => 'Product ordered',
                'date' => Carbon::now()->toDateTime()
            ]);
        }

        $products = $this->cartModel->getCart();
        return response()->json($products);
    }

    public function delete(Request $request){

        $product_size_id = $request->input('id');

        if(session()->has('user')){

            $user_id = session('user')->id;
        }

        $delete = DB::table('carts')
            ->where('product_size_id', $product_size_id)
            ->where('user_id', $user_id)
            ->delete();

        if($delete){

                DB::table('admin')->insert([
                    'user_id' => session('user')->id,
                    'action' => 'Product deleted from cart',
                    'date' => Carbon::now()->toDateTime()
                ]);

                $products = $this->cartModel->getCart();
                return response()->json($products);
        }

    }

    public function bought(){

        $products = $this->orderModel->getBought();
        return response()->json($products);
    }
}
