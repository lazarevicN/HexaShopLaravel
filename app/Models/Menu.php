<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu
{
    public function get(){

        return \DB::table('menus')->get();
    }
}
