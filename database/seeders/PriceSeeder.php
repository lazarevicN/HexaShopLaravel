<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    private $prices = [
        ['price' => 25 ],
        ['price' => 30 ],
        ['price' => 35 ],
        ['price' => 40 ],
        ['price' => 45 ],
        ['price' => 50 ],
        ['price' => 65 ],
        ['price' => 75 ],
        ['price' => 85 ],
        ['price' => 90 ],
        ['price' => 100 ],
        ['price' => 110 ],
        ['price' => 130 ],
        ['price' => 150 ],
        ['price' => 320 ],
        ['price' => 330 ],
        ['price' => 400 ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->prices as $price){
            DB::table('prices')->insert($price);
        }
    }
}
