<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{

    private $cities = [
        ['name' => 'Aleksandrovac', 'postal_code' => '37230'],
        ['name' => 'Aleksinac', 'postal_code' => '18220'],
        ['name' => 'Arandjelovac', 'postal_code' => '34300'],
        ['name' => 'Bajina Basta', 'postal_code' => '31250'],
        ['name' => 'Beograd', 'postal_code' => '11000'],
        ['name' => 'Novi Beograd', 'postal_code' => '11800'],
        ['name' => 'Bor', 'postal_code' => '19120'],
        ['name' => 'Cacak', 'postal_code' => '32000'],
        ['name' => 'Cuprija', 'postal_code' => '35230'],
        ['name' => 'Dimitrovgrad', 'postal_code' => '18320'],
        ['name' => 'Donji Milanovac', 'postal_code' => '19220'],
        ['name' => 'Gornji Milanovac', 'postal_code' => '32300'],
        ['name' => 'Ivanjica', 'postal_code' => '32250'],
        ['name' => 'Jagodina', 'postal_code' => '35000'],
        ['name' => 'Kragujevac', 'postal_code' => '34000'],
        ['name' => 'Kraljevo', 'postal_code' => '36000'],
        ['name' => 'Lazarevac', 'postal_code' => '11550'],
        ['name' => 'Leskovac', 'postal_code' => '16000'],
        ['name' => 'Loznica', 'postal_code' => '15300'],
        ['name' => 'Mladenovac', 'postal_code' => '11400'],
        ['name' => 'Negotin', 'postal_code' => '19300'],
        ['name' => 'Nis', 'postal_code' => '18000'],
        ['name' => 'Novi Sad', 'postal_code' => '21000'],
        ['name' => 'Obrenovac', 'postal_code' => '11500'],
        ['name' => 'Pancevo', 'postal_code' => '26000'],

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->cities as $city){
            DB::table('cities')->insert($city);
        }
    }
}
