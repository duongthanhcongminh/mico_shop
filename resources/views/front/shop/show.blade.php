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
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" for="cs-black">black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label class="cs-violet" for="cs-violet">violet</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label class="cs-blue" for="cs-blue">blue</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label class="cs-yellow" for="cs-yellow">yellow</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red">
                            <label class="cs-red" for="cs-red">red</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green">
                            <label class="cs-green" for="cs-green">green</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Size</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">s</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="s-size">m</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">l</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xl-size">
                            <label for="xl-size">xl</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xll-size">
                            <label for="xll-size">xll</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Tags</h4>
                    <div class="fw-tags">
                        <a href="#">Towel</a>
                        <a href="#">Shoes</a>
                        <a href="#">Coat</a>
                        <a href="#">Dresses</a>
                        <a href="#">Trousers</a>
                        <a href="#">Men's hat</a>
                        <a href="#">Backpack</a>
                    </div>
                </div>
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
                                            <input type="radio" id="cc-{{ $productColor }}">
                                            <label for ="cc-{{ $productColor }}" class = "cc-{{ $productColor }}"></label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="pd-size_choose">
                                    @foreach (array_unique(array_column($product->productDetails->toArray(),'size')) as $productSize)
                                        <div class="sc-item">
                                            <input type="radio" id="sc-{{ $productSize }}">
                                            <label for ="sc-{{ $productSize }}">{{ $productSize }}"</label>
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
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="product-tab">
                <div class="tab-item">
                <ul class="nav" role="tablist">
                    <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">DESCRIPTION</a></li>
                    <li><a href="#tab-2" data-toggle="tab" role="tab">SPECIFICATION</a></li>
                    <li><a href="#tab-3" data-toggle="tab" role="tab">RATING</a></li>
                    <li><a href="#tab-4" data-toggle="tab" role="tab">COLOR</a></li>
                </ul>
                </div>
                <div class="tab-item-content">
                    <div class="tab-content">
                        <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                        <div class="product-content">
                                <div class="pc-right">
                                <img src="front/img/products/1/intro1.jpg" alt="">
                                </div>
                                <h5>Introduction</h5>
                                <p>The Bergen Miro is perfection in contemporary design.
                                    Made with the sturdiest of materials, its deep seats with
                                    well-cushioned back and armrests exudes a classic Danish
                                    design while resting on slim metal legs to ensure that this
                                    sofa retains its visually light profile despite its firm support.
                                    This sofa has been upholstered with SMART fabrics by Davis,
                                    which features an easy clean, water-repellent fabric to
                                    allow you that small window of time to swipe liquids up quickly.</p>
                                    <h5>Features</h5>
                                    <p>The back has a softly curved top rail adding an element
                                        of comfort in the way the chair cradles and supports
                                        your back when seated in it. The thinly upholstered,
                                        enclosed arms come straight out from the chair back and
                                        slope down at the front from the top to meet the chair seat.
                                        The seat is framed with welt and exposed wood seat rails.
                                        The legs of the Bergen chair taper to a thin stiletto look
                                        at the foot. Stretchers support the legs on each side and
                                        across the back.</p>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel">
                        <div class="specification-table">
                            <table>
                                <tr>
                                    <td class="p-catagory">DIMENSIONS</td>
                                    <td>69cm x 92cm x 88cm</td>
                                </tr>
                                <tr>
                                    <td class="p-catagory">LEG HEIGHT</td>
                                    <td>18cm</td>
                                </tr>
                                <tr>
                                    <td class="p-catagory">WEIGHT</td>
                                    <td>13kg</td>
                                </tr>
                                <tr>
                                    <td class="p-catagory">AVAILABILITY</td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td class="p-catagory">RATING</td>
                                    <td>
                                        <div class="pd-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>(4)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-catagory">DETAILED DESCRIPTION</td>
                                    <td><a class="nutdownload" href="https://docs.google.com/document/d/1XLfj82GR2Zzmsio3EHhtW-eMUbW6qpFE/edit" target="_blank" rel="noopener noreferrer"> Download Product Detail <i class = "icon_download"></i></a></td></tr>
                            </table>
                        </div>
                    </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel">
                            <div class="customer-review-option">
                                <h4>02 Comments</h4>
                                <div class="comment-option">
                                    <div class="co-item">
                                        <div class="avatar-pic">
                                            <img src="front/img/product-single/ava1.png" alt="">
                                        </div>
                                        <div class="avatar-text">
                                            <div class="at-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <h5 class="commet-khach">Vladimir Putin <span>7 Aug 2021</span></h5>
                                            <div class="at-reply">Fabric of good quality and looks classy. Satisfied first purchase!</div>
                                        </div>
                                    </div>
                                    <div class="co-item">
                                        <div class="avatar-pic">
                                            <img src="front/img/product-single/ava6.png" alt="">
                                        </div>
                                        <div class="avatar-text">
                                            <div class="at-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <h5 class="commet-khach">Blue Ofourma<span>7 Aug 2021</span></h5>
                                            <div class="at-reply">Looks great and its firm and comfy</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal-rating">
                                    <h6>Your Rating</h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="leave-comment">
                                    <h4>Leave A Comment</h4>
                                    <form action="" class="comment-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Your Name">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" placeholder=" Your Email">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea placeholder="Your Comment"></textarea>
                                                <div class="anonymous-check">
                                                <input type="checkbox" value="anonymous"> Anonymous</div>
                                                <button type="submit" class="site-btn">Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                        <div class="tab-pane fade" id="tab-4" role="tabpanel">
                            <div>
                                <!-- Tab Color -->
                                <div class="tabs">
                                    <div class="tab-itemcolor active">
                                        <div class="cc-item">
                                            Gray
                                            <input type="radio" id="cc-black">
                                            <label for ="cc-black" class = "pd-color-item1 active" style="background: #636363"></label><!--x-->
                                        </div>
                                    </div>
                                    <div class="tab-itemcolor">
                                        <div class="cc-item">
                                            Green
                                            <input type="radio" id="cc-1">
                                            <label for ="cc-1" class = "pd-color-item2" style="background: #528d65"></label><!--o-->
                                        </div>
                                    </div>
                                </div>

                                <!-- Tab Pictures -->
                                <div class="tab-contentcolor">
                                    <div class="tab-panecolor active">
                                        <div class = "row"><!--x-->
                                            <div class = "col-lg-6">
                                                <img src="front/img/products/1/arm1.jpg">
                                            </div>
                                            <div class = "col-lg-6">
                                                <img src="front/img/products/1/arm1-2.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-panecolor">
                                        <div class = "row"><!--o-->
                                            <div class = "col-lg-6">
                                                <img src="front/img/products/1/color1.jpg">
                                            </div>
                                            <div class = "col-lg-6">
                                                <img src="front/img/products/1/color2.jpg">
                                            </div>
                                        </div>
                                    </div>
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
<!-- related pờ rô đắc -->
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
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="front/img/products/2/arm2.jpg" alt="21">
                        <div class="sale">Sale 30%</div>
                        <div class = "icon2 icon-heart">
                                    <i class = "fa fa-heart-o"></i>
                                </div>
                        <ul>
                            <li class="w-icon active"><a href="#!" class = "add-cart2"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="productdetail02.html">+ Quick View</a></li>
                            <li class="w-icon"><a href="https://www.facebook.com/sharer/sharer.php?app_id=11610943376281
                            27&sdk=joey&u=https://richfieldchairs.github.io/chairs/productdetail02.html"
                                                  onclick="return !window.open(this.href, 'Facebook',
                            'width=640,height=580')"><i class="fa fa-share"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="category-name">SOFAS & ARMCHAIRS</div>
                        <a href="productdetail02.html">
                            <h5>Bergen Kubrick</h5>
                        </a>
                        <div class="product-price">
                            $349.30
                            <span>$499.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="front/img/products/16/anhchinh.jpg" alt="21">
                        <!--                        <div class="sale">Sale 30%</div>-->
                        <div class = "icon16 icon-heart">
                            <i class = "fa fa-heart-o"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#!" class = "add-cart16"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="productdetail16.html">+ Quick View</a></li>
                            <li class="w-icon"><a href="https://www.facebook.com/sharer/sharer.php?app_id=11610943376281
                            27&sdk=joey&u=https://richfieldchairs.github.io/chairs/productdetail16.html"
                                                  onclick="return !window.open(this.href, 'Facebook',
                            'width=640,height=580')"><i class="fa fa-share"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="category-name">DINING CHAIRS</div>
                        <a href="productdetail16.html">
                            <h5>Bergen Abbon</h5>
                        </a>
                        <div class="product-price">
                            $399.00
                            <!--                            <span>$499.00</span>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="front/img/products/17/anhchinh.jpg" alt="21">
                        <!--                        <div class="sale">Sale 30%</div>-->
                        <div class = "icon17 icon-heart">
                            <i class = "fa fa-heart-o"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#!" class = "add-cart17"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="productdetail17.html">+ Quick View</a></li>
                            <li class="w-icon"><a href="https://www.facebook.com/sharer/sharer.php?app_id=11610943376281
                            27&sdk=joey&u=https://richfieldchairs.github.io/chairs/productdetail17.html"
                                                  onclick="return !window.open(this.href, 'Facebook',
                            'width=640,height=580')"><i class="fa fa-share"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="category-name">DINING CHAIRS</div>
                        <a href="productdetail17.html">
                            <h5>Bergen Revy</h5>
                        </a>
                        <div class="product-price">
                            $249.00
                            <!--                            <span>£109</span>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="front/img/products/18/anhchinh.jpg" alt="21">
                        <div class="sale">Sale 50%</div>
                        <div class = "icon18 icon-heart">
                            <i class = "fa fa-heart-o"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#!" class = "add-cart18"><i class="icon_bag_alt"></i></a></li>
                            <li class="quick-view"><a href="productdetail18.html">+ Quick View</a></li>
                            <li class="w-icon"><a href="https://www.facebook.com/sharer/sharer.php?app_id=11610943376281
                            27&sdk=joey&u=https://richfieldchairs.github.io/chairs/productdetail18.html"
                                                  onclick="return !window.open(this.href, 'Facebook',
                            'width=640,height=580')"><i class="fa fa-share"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="category-name">DINING CHAIRS</div>
                        <a href="productdetail18.html">
                            <h5>Bergen Kalaspel</h5>
                        </a>
                        <div class="product-price">
                            $114.50
                            <span>$229.00</span>
                        </div>
                    </div>
                </div>
            </div>
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
