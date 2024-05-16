<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    private $discounts = [
        ['discount' => 10],
        ['discount' => 20],
        ['discount' => 30],
        ['discount' => 40],
        ['discount' => 50]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->discounts as $discount){
            DB::table('discounts')->insert($discount);
        }
    }
}
