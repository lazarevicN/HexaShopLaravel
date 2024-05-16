<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends ResourceController
{

    private $productModel;

    public function __construct()
    {
        parent::__construct();

        $this->productModel = new Product();

    }
    public function index(){

        $currentDate = Carbon::now()->toDateTimeString();

        $this->data['latestProductsMen'] = $this->productModel->getLatestProducts(1);
        $this->data['latestProductsWomen'] = $this->productModel->getLatestProducts(2);
        $this->data['latestProductsKids'] = $this->productModel->getLatestProducts(3);

        $this->data['numberOfProducts'] = $this->productModel->countProducts();
        $this->data['date'] = $currentDate;

        return view('pages.main.home', $this->data);
    }
}
