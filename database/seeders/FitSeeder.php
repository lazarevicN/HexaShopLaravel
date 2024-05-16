<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FitSeeder extends Seeder
{

    private $fits = [
        ['name' => 'Standard'],
        ['name' => 'Slim'],
        ['name' => 'Baggy'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->fits as $fit){
            DB::table('fits')->insert($fit);
        }
    }
}
