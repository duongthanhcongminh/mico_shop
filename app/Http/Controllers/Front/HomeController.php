<?php

namespace App\Http\Controllers\Front;

use App\Services\Product\ProductServiceInterface;

class HomeController
{
    public $productServices;

    public function __construct(ProductServiceInterface $productServices)
    {
        $this->productServices = @$productServices;
    }

    public function index()
    {
        $featuredProducts = $this->productServices->getFeaturedProducts();

        return view('front.index', compact('featuredProducts'));
    }
}
