<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    private $categories = [
        ['name' => 'Sweatshirts'],
        ['name' => 'Tracksuit tops'],
        ['name' => 'Windbreakers & Jackets'],
        ['name' => 'Vests'],
        ['name' => 'T-shirts'],
        ['name' => 'Pants & Joggers']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->categories as $category){
            DB::table('categories')->insert($category);
        }
    }
}
