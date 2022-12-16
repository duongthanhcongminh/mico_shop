<?php

namespace App\Http\Controllers\Front;

use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;




class HomeController
{
    private ProductServiceInterface $productService;
    private BlogServiceInterface $blogService;

    public function __construct(ProductServiceInterface $productService,
                                BlogServiceInterface $blogService)
    {
        $this->productService = $productService;
        $this->blogService = $blogService;
    }

    public function index()
    {
        $featuredProducts = $this->productService->getFeaturedProducts();
        $blogs = $this->blogService->getLatestBlogs();

        return view('front.index', compact('featuredProducts', 'blogs'));
    }
}
