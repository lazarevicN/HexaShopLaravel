<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{

    private $sizes = [
        ['size' => 'XS'],
        ['size' => 'S'],
        ['size' => 'M'],
        ['size' => 'L'],
        ['size' => 'XL'],
        ['size' => 'XXL']
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->sizes as $size){
            DB::table('sizes')->insert($size);
        }
    }
}
