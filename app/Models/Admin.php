<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin
{
    public function get(){

        return DB::table('admin')->get();
    }

    public function filterActivities($date){

        return DB::table('admin')
            ->where('date', 'LIKE', '%'.$date.'%')
            ->get();
    }
}
