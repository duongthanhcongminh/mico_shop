<?php

namespace App\Http\Controllers\Front;

use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;


class HomeController
{
    private ProductServiceInterface $productService;
    private BlogServiceInterface $blogService;
    private ProductCategoryServiceInterface $productCategoryService;


    public function __construct(ProductServiceInterface $productService,
                                BlogServiceInterface $blogService,
                                ProductCategoryServiceInterface $productCategoryService)
    {
        $this->productService = $productService;
        $this->blogService = $blogService;
        $this->productCategoryService = $productCategoryService;
    }
    public function show()
    {
        $categories = $this->productCategoryService->all();

        return view('front.shop.show',compact('categories'));
    }

    public function index()
    {
        $featuredProducts = $this->productService->getFeaturedProducts();
        $blogs = $this->blogService->getLatestBlogs();
        $categories = $this->productCategoryService->all();

        return view('front.index', compact('featuredProducts', 'blogs','categories'));
    }
}
