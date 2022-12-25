<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryService;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;
use App\Helper\CartHelper;


class ShopController extends Controller
{
    private ProductServiceInterface $productService;
    private ProductCommentServiceInterface $productCommentService;
    private ProductCategoryServiceInterface $productCategoryService;
    private BrandServiceInterface $brandService;

    public function __construct(ProductServiceInterface         $productService,
                                ProductCommentServiceInterface  $productCommentService,
                                ProductCategoryServiceInterface $productCategoryService,
                                BrandServiceInterface            $brandService,
                                CartHelper $cartHelper
    )
    {
        $this ->productService = $productService;
        $this ->productCommentService = $productCommentService;
        $this ->productCategoryService = $productCategoryService;
        $this ->brandService = $brandService;
        $this->cartHelper = $cartHelper;
    }

    public function show($id)
    {
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();
        $brands = $this->brandService->all();

        $product = $this ->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);

        return view('front.shop.show',compact('product','relatedProducts', 'categories','brands','cartItems'));
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
        $cartItems = $this->cartHelper->get();

        return view('front.shop.index', compact('products','categories','brands','cartItems'));
    }

    public function category($categoryName, Request $request)
    {
        $categories = $this->productCategoryService->all();
        $cartItems = $this->cartHelper->get();
        $brands = $this->brandService->all();
        $products = $this->productService->getProductsByCategory($categoryName,$request);

        return view('front.shop.index', compact('products','categories','brands','cartItems'));
    }
}
