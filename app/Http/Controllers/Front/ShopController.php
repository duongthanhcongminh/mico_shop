<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\ProductComment\BlogRepositoryInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryService;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    private ProductServiceInterface $productService;
    private ProductCommentServiceInterface $productCommentService;
    private ProductCategoryServiceInterface $productCategoryService;

    public function __construct(ProductServiceInterface $productService,
                                ProductCommentServiceInterface $productCommentService,
                                ProductCategoryServiceInterface $productCategoryService)
    {
        $this ->productService = $productService;
        $this ->productCommentService = $productCommentService;
        $this ->productCategoryService = $productCategoryService;
    }

    public function show($id)
    {
        $product = $this ->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);

        return view('front.shop.show',compact('product','relatedProducts'));
    }

    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());

        return redirect()->back();
    }

    public  function index(Request $request)
    {
        $categories = $this->productCategoryService->all();
        $products = $this->productService->getProductOnIndex($request);

        return view('front.shop.index', compact('products','categories'));
    }

    public function category($categoryName, Request $request)
    {
        $categories = $this->productCategoryService->all();
        $products = $this->productService->getProductsByCategory($categoryName,$request);

        return view('front.shop.index', compact('products','categories'));
    }
}
