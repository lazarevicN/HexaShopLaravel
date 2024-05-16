<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia
{
    public function get(){

        return \DB::table('social_medias')->get();
    }
}
