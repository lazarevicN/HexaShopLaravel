<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{

    private $brands = [
        ['name' => 'Nike'],
        ['name' => 'Adidas'],
        ['name' => 'The North Face'],
        ['name' => 'Napapijri'],
        ['name' => 'Puma'],
        ['name' => 'Champion']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->brands as $brand){

            DB::table('brands')->insert($brand);
        }
    }
}
