<?php

namespace App\Http\Controllers\Front;

use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Helper\CartHelper;
use Illuminate\Support\Facades\Auth;

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

    public function getBlog()
    {
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();
        $blogs = $this->blogService->all();

        return view('front.blog',compact('categories','cartItems','blogs'));
    }


    public function getBlogDetail($id)
    {

        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();
        $blog = $this->blogService->find($id);
//        $blog = DB::table('blogs')->where('id', $id)->get();

        return view('front.blogdetail', compact('categories','cartItems','blog'));
    }
}
