<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{

    private $productsSizes = [

        ['product_id' => 1, 'size_id' => 2, 'quantity' => 0],
        ['product_id' => 1, 'size_id' => 3, 'quantity' => 15],
        ['product_id' => 1, 'size_id' => 4, 'quantity' => 20],
        ['product_id' => 1, 'size_id' => 5, 'quantity' => 5],
        ['product_id' => 1, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 2, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 2, 'size_id' => 3, 'quantity' => 12],
        ['product_id' => 2, 'size_id' => 4, 'quantity' => 15],
        ['product_id' => 2, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 2, 'size_id' => 6, 'quantity' => 22],

        ['product_id' => 3, 'size_id' => 3, 'quantity' => 0],
        ['product_id' => 3, 'size_id' => 4, 'quantity' => 5],
        ['product_id' => 3, 'size_id' => 5, 'quantity' => 7],
        ['product_id' => 3, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 4, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 4, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 4, 'size_id' => 5, 'quantity' => 0],
        ['product_id' => 4, 'size_id' => 6, 'quantity' => 0],

        ['product_id' => 5, 'size_id' => 2, 'quantity' => 25],
        ['product_id' => 5, 'size_id' => 3, 'quantity' => 15],
        ['product_id' => 5, 'size_id' => 4, 'quantity' => 5],
        ['product_id' => 5, 'size_id' => 5, 'quantity' => 0],
        ['product_id' => 5, 'size_id' => 6, 'quantity' => 50],

        ['product_id' => 6, 'size_id' => 2, 'quantity' => 15],
        ['product_id' => 6, 'size_id' => 3, 'quantity' => 2],
        ['product_id' => 6, 'size_id' => 4, 'quantity' => 17],
        ['product_id' => 6, 'size_id' => 5, 'quantity' => 5],
        ['product_id' => 6, 'size_id' => 6, 'quantity' => 3],

        ['product_id' => 7, 'size_id' => 3, 'quantity' => 5],
        ['product_id' => 7, 'size_id' => 4, 'quantity' => 12],
        ['product_id' => 7, 'size_id' => 5, 'quantity' => 1],
        ['product_id' => 7, 'size_id' => 6, 'quantity' => 24],

        ['product_id' => 8, 'size_id' => 2, 'quantity' => 30],
        ['product_id' => 8, 'size_id' => 3, 'quantity' => 25],
        ['product_id' => 8, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 8, 'size_id' => 5, 'quantity' => 11],

        ['product_id' => 9, 'size_id' => 2, 'quantity' => 2],
        ['product_id' => 9, 'size_id' => 3, 'quantity' => 26],
        ['product_id' => 9, 'size_id' => 4, 'quantity' => 0],
        ['product_id' => 9, 'size_id' => 5, 'quantity' => 14],

        ['product_id' => 10, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 10, 'size_id' => 4, 'quantity' => 5],
        ['product_id' => 10, 'size_id' => 5, 'quantity' => 1],
        ['product_id' => 10, 'size_id' => 6, 'quantity' => 25],

        ['product_id' => 11, 'size_id' => 3, 'quantity' => 6],
        ['product_id' => 11, 'size_id' => 4, 'quantity' => 3],
        ['product_id' => 11, 'size_id' => 5, 'quantity' => 16],
        ['product_id' => 11, 'size_id' => 6, 'quantity' => 23],

        ['product_id' => 12, 'size_id' => 2, 'quantity' => 25],
        ['product_id' => 12, 'size_id' => 3, 'quantity' => 0],
        ['product_id' => 12, 'size_id' => 4, 'quantity' => 5],
        ['product_id' => 12, 'size_id' => 5, 'quantity' => 6],
        ['product_id' => 12, 'size_id' => 6, 'quantity' => 3],

        ['product_id' => 13, 'size_id' => 2, 'quantity' => 12],
        ['product_id' => 13, 'size_id' => 3, 'quantity' => 34],
        ['product_id' => 13, 'size_id' => 4, 'quantity' => 25],
        ['product_id' => 13, 'size_id' => 5, 'quantity' => 15],
        ['product_id' => 13, 'size_id' => 6, 'quantity' => 25],

        ['product_id' => 14, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 14, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 14, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 14, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 15, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 15, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 15, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 15, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 16, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 16, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 16, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 16, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 16, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 17, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 17, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 17, 'size_id' => 5, 'quantity' => 5],
        ['product_id' => 17, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 18, 'size_id' => 2, 'quantity' => 25],
        ['product_id' => 18, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 18, 'size_id' => 4, 'quantity' => 11],
        ['product_id' => 18, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 18, 'size_id' => 6, 'quantity' => 15],

        ['product_id' => 19, 'size_id' => 2, 'quantity' => 13],
        ['product_id' => 19, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 19, 'size_id' => 4, 'quantity' => 23],
        ['product_id' => 19, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 19, 'size_id' => 6, 'quantity' => 25],

        ['product_id' => 20, 'size_id' => 3, 'quantity' => 1],
        ['product_id' => 20, 'size_id' => 4, 'quantity' => 0],
        ['product_id' => 20, 'size_id' => 5, 'quantity' => 12],
        ['product_id' => 20, 'size_id' => 6, 'quantity' => 5],

        ['product_id' => 21, 'size_id' => 2, 'quantity' => 23],
        ['product_id' => 21, 'size_id' => 3, 'quantity' => 15],
        ['product_id' => 21, 'size_id' => 4, 'quantity' => 12],
        ['product_id' => 21, 'size_id' => 5, 'quantity' => 15],

        ['product_id' => 22, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 22, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 22, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 22, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 23, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 23, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 23, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 23, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 24, 'size_id' => 2, 'quantity' => 4],
        ['product_id' => 24, 'size_id' => 3, 'quantity' => 0],
        ['product_id' => 24, 'size_id' => 4, 'quantity' => 12],
        ['product_id' => 24, 'size_id' => 5, 'quantity' => 5],

        ['product_id' => 25, 'size_id' => 2, 'quantity' => 14],
        ['product_id' => 25, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 25, 'size_id' => 4, 'quantity' => 15],
        ['product_id' => 25, 'size_id' => 5, 'quantity' => 20],

        ['product_id' => 26, 'size_id' => 1, 'quantity' => 16],
        ['product_id' => 26, 'size_id' => 2, 'quantity' => 5],
        ['product_id' => 26, 'size_id' => 3, 'quantity' => 24],

        ['product_id' => 27, 'size_id' => 1, 'quantity' => 11],
        ['product_id' => 27, 'size_id' => 2, 'quantity' => 5],
        ['product_id' => 27, 'size_id' => 3, 'quantity' => 25],
        ['product_id' => 27, 'size_id' => 4, 'quantity' => 13],

        ['product_id' => 28, 'size_id' => 1, 'quantity' => 19],
        ['product_id' => 28, 'size_id' => 2, 'quantity' => 21],
        ['product_id' => 28, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 28, 'size_id' => 4, 'quantity' => 23],

        ['product_id' => 29, 'size_id' => 1, 'quantity' => 14],
        ['product_id' => 29, 'size_id' => 2, 'quantity' => 12],
        ['product_id' => 29, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 29, 'size_id' => 4, 'quantity' => 5],

        ['product_id' => 30, 'size_id' => 1, 'quantity' => 1],
        ['product_id' => 30, 'size_id' => 2, 'quantity' => 12],
        ['product_id' => 30, 'size_id' => 3, 'quantity' => 0],
        ['product_id' => 30, 'size_id' => 4, 'quantity' => 5],

        ['product_id' => 31, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 31, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 31, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 31, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 32, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 32, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 32, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 32, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 33, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 33, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 33, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 33, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 34, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 34, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 34, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 35, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 35, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 35, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 36, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 36, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 36, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 36, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 37, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 37, 'size_id' => 2, 'quantity' => 10],

        ['product_id' => 38, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 38, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 38, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 39, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 39, 'size_id' => 2, 'quantity' => 10],

        ['product_id' => 40, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 40, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 40, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 41, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 41, 'size_id' => 2, 'quantity' => 10],

        ['product_id' => 42, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 42, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 42, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 43, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 43, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 43, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 44, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 44, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 44, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 44, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 45, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 45, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 45, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 45, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 46, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 46, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 46, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 47, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 47, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 47, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 47, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 48, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 48, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 48, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 49, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 49, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 49, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 49, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 49, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 50, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 50, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 50, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 50, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 51, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 51, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 51, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 51, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 52, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 52, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 52, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 52, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 53, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 53, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 53, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 53, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 53, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 54, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 54, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 54, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 54, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 55, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 55, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 55, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 55, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 56, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 56, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 56, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 56, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 57, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 57, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 57, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 57, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 58, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 58, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 58, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 59, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 59, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 59, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 59, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 60, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 60, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 60, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 60, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 61, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 61, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 61, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 62, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 62, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 62, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 63, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 63, 'size_id' => 2, 'quantity' => 10],

        ['product_id' => 64, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 64, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 64, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 65, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 65, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 65, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 65, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 65, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 66, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 66, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 66, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 66, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 67, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 67, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 67, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 67, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 67, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 67, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 68, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 68, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 68, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 69, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 69, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 69, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 69, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 70, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 70, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 70, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 70, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 71, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 71, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 71, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 72, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 72, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 72, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 73, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 73, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 73, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 73, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 73, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 74, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 74, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 74, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 74, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 74, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 75, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 75, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 75, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 75, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 75, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 76, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 76, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 76, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 76, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 77, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 77, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 77, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 77, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 78, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 78, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 78, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 78, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 79, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 79, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 79, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 79, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 79, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 80, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 80, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 80, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 80, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 80, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 81, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 81, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 81, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 81, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 81, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 82, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 82, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 82, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 82, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 82, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 83, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 83, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 83, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 83, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 83, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 84, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 84, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 84, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 84, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 85, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 85, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 85, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 85, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 85, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 86, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 86, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 86, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 86, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 86, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 87, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 87, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 87, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 87, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 88, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 88, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 88, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 88, 'size_id' => 6, 'quantity' => 10],

        ['product_id' => 89, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 89, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 89, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 89, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 90, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 90, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 90, 'size_id' => 4, 'quantity' => 10],
        ['product_id' => 90, 'size_id' => 5, 'quantity' => 10],
        ['product_id' => 90, 'size_id' => 5, 'quantity' => 10],

        ['product_id' => 91, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 91, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 91, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 92, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 92, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 92, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 92, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 93, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 93, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 93, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 93, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 94, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 94, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 94, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 94, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 95, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 95, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 95, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 96, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 96, 'size_id' => 2, 'quantity' => 10],

        ['product_id' => 97, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 97, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 97, 'size_id' => 3, 'quantity' => 10],
        ['product_id' => 97, 'size_id' => 4, 'quantity' => 10],

        ['product_id' => 98, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 98, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 98, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 99, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 99, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 99, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 100, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 100, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 100, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 101, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 101, 'size_id' => 2, 'quantity' => 10],
        ['product_id' => 101, 'size_id' => 3, 'quantity' => 10],

        ['product_id' => 102, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 102, 'size_id' => 2, 'quantity' => 10],

        ['product_id' => 103, 'size_id' => 1, 'quantity' => 10],
        ['product_id' => 103, 'size_id' => 2, 'quantity' => 10],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->productsSizes as $productSize){
            DB::table('products_sizes')->insert($productSize);
        }
    }
}
