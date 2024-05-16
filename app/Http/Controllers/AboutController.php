<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends ResourceController
{
    public function index(){

        return view('pages.main.about', $this->data);
    }
}
