<?php

namespace App\Http\Controllers\Front;

use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;

class HomeController
{
    private $productServices;
    private $blogService;

    public function __construct(ProductServiceInterface $productServices,
                                BlogServiceInterface $blogService)
    {
        $this->productServices = $productServices;
        $this->blogService = $blogService;
    }

    public function index()
    {
        $featuredProducts = $this->productServices->getFeaturedProducts();
        $blogs = $this->blogService->getLatestBlogs();

        return view('front.index', compact('featuredProducts', 'blogs'));
    }
}
