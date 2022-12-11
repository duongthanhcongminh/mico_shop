<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\ProductComment\BlogRepositoryInterface;
use App\Services\Brand\UserServiceInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryService;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;


class ShopController extends Controller
{
    private ProductServiceInterface $productService;
    private ProductCommentServiceInterface $productCommentService;
    private ProductCategoryServiceInterface $productCategoryService;
    private UserServiceInterface $brandService;

    public function __construct(ProductServiceInterface         $productService,
                                ProductCommentServiceInterface  $productCommentService,
                                ProductCategoryServiceInterface $productCategoryService,
                                UserServiceInterface            $brandService,
    )
    {
        $this ->productService = $productService;
        $this ->productCommentService = $productCommentService;
        $this ->productCategoryService = $productCategoryService;
        $this ->brandService = $brandService;
    }

    public function show($id)
    {
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();

        $product = $this ->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);

        return view('front.shop.show',compact('product','relatedProducts', 'categories','brands'));
    }

    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());

        return redirect()->back();
    }

    public  function index(Request $request)
    {
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $products = $this->productService->getProductOnIndex($request);

        return view('front.shop.index', compact('products','categories','brands'));
    }

    public function category($categoryName, Request $request)
    {
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $products = $this->productService->getProductsByCategory($categoryName,$request);

        return view('front.shop.index', compact('products','categories','brands'));
    }
}
