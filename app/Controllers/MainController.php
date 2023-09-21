<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdModel;
use App\Models\CategModel;

class MainController extends BaseController
{
    private $main_prod;
    private $main_categ;
    public function __construct()
    {
        $this->main_prod = new \App\Models\ProdModel();
        $this->main_categ = new \App\Models\CategModel();
    }
    public function index()
    {
        $data['user_categ'] = $this->main_categ->findAll();
        $data['user_prod'] = $this->main_prod->findAll();
        return view('home', $data);
    }
    public function prod($category)
    {
        $products = $this->main_prod->getProductsByCategory($category);

        $data = [
            'category' => $category,
            'products' => $products
        ];

        return view('products_list', $data);
    }
}
