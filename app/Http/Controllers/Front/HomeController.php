<?php

namespace App\Http\Controllers\Front;

use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Helper\CartHelper;

class HomeController
{
    private ProductServiceInterface $productService;
    private BlogServiceInterface $blogService;
    private ProductCategoryServiceInterface $productCategoryService;
    private $cartHelper;


    public function __construct(ProductServiceInterface $productService,
                                BlogServiceInterface $blogService,
                                ProductCategoryServiceInterface $productCategoryService,CartHelper $cartHelper)
    {
        $this->productService = $productService;
        $this->blogService = $blogService;
        $this->productCategoryService = $productCategoryService;
        $this->cartHelper = $cartHelper;
    }
    public function show()
    {
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();

        return view('front.shop.show',compact('categories','cartItems'));
    }

    public function index()
    {
        $featuredProducts = $this->productService->getFeaturedProducts();
        $blogs = $this->blogService->getLatestBlogs();
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();


        return view('front.index', compact('featuredProducts', 'blogs','categories','cartItems'));
    }
}
