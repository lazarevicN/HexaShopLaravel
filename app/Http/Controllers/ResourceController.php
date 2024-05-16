<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    protected $data;
    private $menuModel;
    private $socialMediaModel;

    public function __construct(){

        $this->menuModel = new Menu();
        $this->data['menus'] = $this->menuModel->get();

        $this->socialMediaModel = new SocialMedia();
        $this->data['socialMedias'] = $this->socialMediaModel->get();

    }
}
