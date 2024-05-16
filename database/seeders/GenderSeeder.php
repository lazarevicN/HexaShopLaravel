<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{

    private $genders = [
        ['name' => 'Men'],
        ['name' => 'Women'],
        ['name' => 'Kids']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       foreach($this->genders as $gender){
           DB::table('genders')->insert($gender);
       }
    }
}
