<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Fit;
use App\Models\Gender;
use App\Models\Price;
use App\Models\Product;
use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends ResourceController
{
    private $productModel;
    private $categoryModel;
    private $brandModel;
    private $sizeModel;
    private $fitModel;
    private $genderModel;
    private $priceModel;
    private $adminModel;

    public function __construct()
    {
        parent::__construct();

        $this->productModel = new Product();
        $this->categoryModel = new Category();
        $this->brandModel = new Brand();
        $this->sizeModel = new Size();
        $this->fitModel = new Fit();
        $this->genderModel = new Gender();
        $this->priceModel = new Price();
        $this->adminModel = new Admin();

    }

    public function index(){

        $currentDate = Carbon::now()->toDateTimeString();

        $this->data['products'] = $this->productModel->getProductsAdmin();
        $this->data['categories'] = $this->categoryModel->get();
        $this->data['brands'] = $this->brandModel->get();
        $this->data['sizes'] = $this->sizeModel->get();
        $this->data['fits'] = $this->fitModel->get();
        $this->data['date'] = $currentDate;
        $this->data['admins'] = $this->adminModel->get();

        return view('pages.admin.index', $this->data);
    }

    public function create(){

        $this->data['categories'] = $this->categoryModel->get();
        $this->data['brands'] = $this->brandModel->get();
        $this->data['sizes'] = $this->sizeModel->get();
        $this->data['fits'] = $this->fitModel->get();
        $this->data['genders'] = $this->genderModel->get();
        $this->data['prices'] = $this->priceModel->get();

        return view('pages.admin.create', $this->data);
    }

    public function filterActivities(Request $request){

        $date = $request->input('date');

        $activities = $this->adminModel->filterActivities($date);

        return response()->json($activities);
    }


}
