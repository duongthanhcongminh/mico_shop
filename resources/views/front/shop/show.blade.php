@extends('front.layout.master')

@section('title','Product')

@section('body')
    <!--    breadcrumb section start-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="shop.html"> Shop</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb section end-->
<!-- Banner header -->
<div class="bg-img" id = "banner" style = "background-image: url('https://image.stern.de/8912638/t/fz/v2/w1440/r1.3333/-/25-jahre-friends.jpg')">
    <div id = "banner-text">
        <h2>Sofas & Armchairs</h2>
    </div>
</div>

<!-- Body -->
<!-- Product details-->
<section class="product-shop spad ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8">

                @include('front.shop.components.products-sidebar-filter')

            </div>
            <div class = "col-lg-9 order-1 order-lg-2 ">
                <div class="row">
                    <div class="col-lg-6 product-color-1">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="front/img/products/{{ $product->productImages[0]->path }}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    @foreach($product->productImages as $productImage)
                                        <div class="pt active" data-imgbigurl="front/img/products/{{ $productImage->path }}">
                                            <img src="front/img/products/{{ $productImage->path }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{ $product->tag }}</span>
                                <h3>{{ $product->name }}</h3>
                                <div class = "heart-color1">
                                    <div class = "heart-icon icon1">
                                        <i class = "fa fa-heart-o"></i>
                                    </div>
                                </div>
                                <div class = "heart-color2">
                                    <div class = "heart-icon icon1">
                                        <i class = "fa fa-heart-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-rating">
                                @for ($i = 1;$i <= 5; $i++)
                                    @if($i <= $product->avgRating)
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                @endfor
                                <span>({{ count($product->productComments) }})</span>
                            </div>
                            <div class="pd-desc">
                                <p>{{ $product->content }}</p>

                                @if( $product->discount != null )
                                    <h4>${{ $product->discount }}<span>${{ $product->price }}</span></h4>
                                @else
                                    <h4>${{ $product->price }}</h4>
                                @endif
                            </div>
                            <div class = "product-color-detail1">
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        @foreach (array_unique(array_column($product->productDetails->toArray(),'color')) as $productColor)
                                        <div class="cc-item">
                                            <input type="radio" id="cs-{{ $productColor }}">
                                            <label for ="cs-{{ $productColor }}" class = "cc-{{ $productColor }}"></label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    @foreach (array_unique(array_column($product->productDetails->toArray(),'size')) as $productSize)
                                        <div class="sc-item">
                                            <input type="radio" id="sc-{{ $productSize }}">
                                            <label for ="sc-{{ $productSize }}">{{ $productSize }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1" id = "qty-detail">
                                        </div>
                                        <a href = "#!" class="primary-btn pd-cart add-cart-detail1">Add To Cart</a>
                                </div>
                            </div>
                            <ul class="pd-tags">
                                <li><span>Categories</span>: {{ $product->productCategory->name }}</li>
                                <li><span>TAGS</span>: {{ $product->tag }}</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Sku : {{ $product->sku }}</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="product-tab">
                <div class="tab-item">
                <ul class="nav" role="tablist">
                    <li><a href="#tab-1" class="active"  aria-controls="tab-1" data-toggle="tab" role="tab" aria-selected="true">DESCRIPTION</a></li>
                    <li><a href="#tab-2" aria-controls="tab-2" data-toggle="tab" role="tab" aria-selected="false">SPECIFICATION</a></li>
                    <li><a href="#tab-3" aria-controls="tab-3" data-toggle="tab" role="tab" aria-selected="false">CUSTOMER REVIEWS ({{count( $product->productComments)}})</a></li>
                </ul>
                </div>
                <div class="tab-item-content">
                    <div class="tab-content">
                        <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                            <div class="product-content">
                                <div class="pc-right">
                                <img src="front/img/products/{{ $product->productImages[0]->path }}" alt="">
                                </div>
                                <h5>Introduction</h5>
                                <p>{!!   $product->description !!}</p>
                                    <h5>Features</h5>
                                    <p>{{ $product->featured }}</p>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel">
                            <div class="specification-table">
                                <table>
                                    <tr>
                                        <td class="p-catagory">Customer Rating</td>
                                        <td>
                                            <div class="pd-rating">
                                                @for($i = 1; $i <= 5;$i++)
                                                    @if($i <= $product->avgRating)
                                                        <i class="fa fa-star"></i>
                                                    @else
                                                    <i class="fa fa-star-o"></i>
                                                    @endif
                                                @endfor
                                                <span>({{ count($product->productComments) }})</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Price</td>
                                        <td>
                                            <div class="p-price">
                                                ${{ $product->price }}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Add to cart</td>
                                        <td>
                                            <div class="cart-add">+ add to cart</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Availability</td>
                                        <td>
                                            <div class="p-stock">{{ $product->qty }} in stock</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Weight</td>
                                        <td>
                                            <div class="p-weight">{{ $product->weight }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Size</td>
                                        <td>
                                            <div class="p-size">
                                                @foreach(array_unique(array_column($product->productDetails->toArray(),'size')) as $productSize)
                                                    {{ $productSize }}
                                                @endforeach
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Color</td>
                                        <td>
                                            @foreach(array_unique(array_column($product->productDetails->toArray(),'color')) as $productColor)
                                                <span class="cs cs-{{$productColor}}"></span>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-catagory">Sku</td>
                                        <td>
                                            <div class="p-code">{{ $product->sku }}</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                    </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel">
                            <div class="customer-review-option">
                                <h4>{{ count($product->productComments) }} Comments</h4>
                                <div class="comment-option">
                                    @foreach($product->productComments as $productComment)
                                        <div class="co-item">
                                            <div class="avatar-pic">
                                                <img src="/front/img/user/{{ $productComment->user->avatar ?? 'default-avatar.png'}}" alt="">
                                            </div>
                                            <div class="avatar-text">
                                                <div class="at-rating">
                                                    @for($i = 1; $i <= 5;$i++)
                                                        @if($i <= $productComment->rating)
                                                            <i class="fa fa-star"></i>
                                                        @else
                                                            <i class="fa fa-star-o"></i>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <h5>{{$productComment->name }} <span>{{ date('m d, Y',strtotime($productComment->create_at)) }}></span></h5>
                                                <div class="at-reply">{{ $productComment->messages }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="leave-comment mt-5">
                                    <h4>Leave a comment</h4>
                                    <form action="" method="post" class="comment-form">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Name" name="name">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Email" name="email">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea placeholder="Messages" name="messages"></textarea>

                                                <div class="personal-rating">
                                                    <h6>Your Rating</h6>
                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label for="star5" title="text">5 stars</label>
                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label for="star4" title="text">4 stars</label>
                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label for="star3" title="text">3 stars</label>
                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label for="star2" title="text">2 stars</label>
                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="site-btn">Send message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
        </div>
    </div>


</section>
<!-- related product -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Related Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($relatedProducts as $relatedProduct)
            <div class="col-lg-3 col-sm-6">
                @include('front.components.product-item')
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Back to Top - Chat Code -->

<div class = "container">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class = "fa fa-chevron-up"></i></button>
</div>
<script>
    var mybutton = document.getElementById("myBtn");

    window.onscroll = function() {scrollFunction(); myFunction();};

    var navbar = document.querySelector(".nav-bar-container");

    // Get the offset position of the navbar

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        window.scrollTo({top: 0, behavior: 'smooth'})};
</script>

<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "113055687951669");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Body -->
@endsection
