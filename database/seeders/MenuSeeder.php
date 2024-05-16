<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    private $menus = [
        ['name' => 'Home', 'route' => 'home'],
        ['name' => 'Men', 'route' => 'men'],
        ['name' => 'Women', 'route' => 'women'],
        ['name' => 'Kids', 'route' => 'kids'],
        ['name' => 'About us', 'route' => 'about'],
        ['name' => 'Contact us', 'route' => 'contact']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->menus as $menu){

            DB::table('menus')->insert($menu);
        }
    }
}
