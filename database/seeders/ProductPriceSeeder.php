<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPriceSeeder extends Seeder
{
    private $productsPrices = [
        ['product_id' => 1, 'price_id' => 9],
        ['product_id' => 2, 'price_id' => 13],
        ['product_id' => 3, 'price_id' => 7],
        ['product_id' => 4, 'price_id' => 7],
        ['product_id' => 5, 'price_id' => 12],
        ['product_id' => 6, 'price_id' => 8],
        ['product_id' => 7, 'price_id' => 9],
        ['product_id' => 8, 'price_id' => 10],
        ['product_id' => 9, 'price_id' => 8],
        ['product_id' => 10, 'price_id' => 8],
        ['product_id' => 11, 'price_id' => 10],
        ['product_id' => 12, 'price_id' => 12],
        ['product_id' => 13, 'price_id' => 12],
        ['product_id' => 14, 'price_id' => 9],
        ['product_id' => 15, 'price_id' => 6],
        ['product_id' => 16, 'price_id' => 8],
        ['product_id' => 17, 'price_id' => 11],
        ['product_id' => 18, 'price_id' => 8],
        ['product_id' => 19, 'price_id' => 8],
        ['product_id' => 20, 'price_id' => 11],
        ['product_id' => 21, 'price_id' => 6],
        ['product_id' => 22, 'price_id' => 7],
        ['product_id' => 23, 'price_id' => 8],
        ['product_id' => 24, 'price_id' => 9],
        ['product_id' => 25, 'price_id' => 9],
        ['product_id' => 26, 'price_id' => 11],
        ['product_id' => 27, 'price_id' => 8],
        ['product_id' => 28, 'price_id' => 8],
        ['product_id' => 29, 'price_id' => 12],
        ['product_id' => 30, 'price_id' => 7],
        ['product_id' => 31, 'price_id' => 7],
        ['product_id' => 32, 'price_id' => 8],
        ['product_id' => 33, 'price_id' => 8],
        ['product_id' => 34, 'price_id' => 8],
        ['product_id' => 35, 'price_id' => 6],
        ['product_id' => 36, 'price_id' => 6],
        ['product_id' => 37, 'price_id' => 5],
        ['product_id' => 38, 'price_id' => 6],
        ['product_id' => 39, 'price_id' => 6],
        ['product_id' => 40, 'price_id' => 6],
        ['product_id' => 41, 'price_id' => 4],
        ['product_id' => 42, 'price_id' => 4],
        ['product_id' => 43, 'price_id' => 5],
        ['product_id' => 44, 'price_id' => 7],
        ['product_id' => 45, 'price_id' => 8],
        ['product_id' => 46, 'price_id' => 8],
        ['product_id' => 47, 'price_id' => 7],
        ['product_id' => 48, 'price_id' => 8],
        ['product_id' => 49, 'price_id' => 9],
        ['product_id' => 50, 'price_id' => 7],
        ['product_id' => 51, 'price_id' => 9],
        ['product_id' => 52, 'price_id' => 7],
        ['product_id' => 53, 'price_id' => 7],
        ['product_id' => 54, 'price_id' => 8],
        ['product_id' => 55, 'price_id' => 6],
        ['product_id' => 56, 'price_id' => 9],
        ['product_id' => 57, 'price_id' => 7],
        ['product_id' => 58, 'price_id' => 8],
        ['product_id' => 59, 'price_id' => 7],
        ['product_id' => 60, 'price_id' => 8],
        ['product_id' => 61, 'price_id' => 6],
        ['product_id' => 62, 'price_id' => 4],
        ['product_id' => 63, 'price_id' => 5],
        ['product_id' => 64, 'price_id' => 6],
        ['product_id' => 65, 'price_id' => 8],
        ['product_id' => 66, 'price_id' => 6],
        ['product_id' => 67, 'price_id' => 7],
        ['product_id' => 68, 'price_id' => 8],
        ['product_id' => 69, 'price_id' => 10],
        ['product_id' => 70, 'price_id' => 7],
        ['product_id' => 71, 'price_id' => 8],
        ['product_id' => 72, 'price_id' => 8],
        ['product_id' => 73, 'price_id' => 8],
        ['product_id' => 74, 'price_id' => 15],
        ['product_id' => 75, 'price_id' => 16],
        ['product_id' => 76, 'price_id' => 14],
        ['product_id' => 77, 'price_id' => 13],
        ['product_id' => 78, 'price_id' => 7],
        ['product_id' => 79, 'price_id' => 14],
        ['product_id' => 80, 'price_id' => 2],
        ['product_id' => 81, 'price_id' => 2],
        ['product_id' => 82, 'price_id' => 3],
        ['product_id' => 83, 'price_id' => 3],
        ['product_id' => 84, 'price_id' => 1],
        ['product_id' => 85, 'price_id' => 3],
        ['product_id' => 86, 'price_id' => 2],
        ['product_id' => 87, 'price_id' => 2],
        ['product_id' => 88, 'price_id' => 2],
        ['product_id' => 89, 'price_id' => 3],
        ['product_id' => 90, 'price_id' => 3],
        ['product_id' => 91, 'price_id' => 2],
        ['product_id' => 92, 'price_id' => 2],
        ['product_id' => 93, 'price_id' => 3],
        ['product_id' => 94, 'price_id' => 4],
        ['product_id' => 95, 'price_id' => 3],
        ['product_id' => 96, 'price_id' => 4],
        ['product_id' => 97, 'price_id' => 4],
        ['product_id' => 98, 'price_id' => 2],
        ['product_id' => 99, 'price_id' => 2],
        ['product_id' => 100, 'price_id' => 2],
        ['product_id' => 101, 'price_id' => 2],
        ['product_id' => 102, 'price_id' => 3],
        ['product_id' => 103, 'price_id' => 2],

    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->productsPrices as $productPrice){
            DB::table('products_prices')->insert($productPrice);
        }
    }
}
