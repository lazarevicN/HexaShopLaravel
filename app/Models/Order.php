<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order
{
    public function getBought(){

        return DB::table('products as p')
            ->join('products_prices as pr', 'p.id', '=', 'pr.product_id')
            ->join('prices as pc', 'pr.price_id', '=', 'pc.id')
            ->join('products_sizes as ps', 'p.id', '=', 'ps.product_id')
            ->join('sizes as s', 'ps.size_id', '=', 's.id')
            ->join('brands as b', 'p.brand_id', '=', 'b.id')
            ->join('carts as c', 'ps.id', '=', 'c.product_size_id')
            ->join('orders as o', 'c.id', '=', 'o.cart_id')
            ->select('p.name as prodName', 'p.main_picture as image', 'pc.price as price', 'b.name as brand', 's.size as size')
            ->where('c.user_id', session('user')->id)
            ->where('c.bought', true)
            ->orderBy('o.date', 'desc')
            ->limit(3)
            ->get();
    }
}
