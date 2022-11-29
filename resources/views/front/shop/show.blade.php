@extends('front.layout.master')

@section('title','Product')

@section('body')
<!-- Trang trên menu con -->
<div class = "container">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "breadcrumb-text">
                <a href = "index.html"> Home</a>
                <a href = "products1.html"> Products</a>
                <a href = "sofas.html"> Sofas & Armchairs</a>
                    <span>Bergen Miro</span>
            </div>
        </div>
    </div>
</div>
<!-- Banner header -->
<div id = "banner" style = "background-image: url(front/img/products/banner-sofa.jpg)">
    <div id = "banner-text">
        <h2>Sofas & Armchairs</h2>
    </div>
</div>

<div class = "notification-toast animate__animated"></div>

<!-- Body -->
<!-- Product details-->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <li><a href="diningchairs.html">Dining Chairs</a></li>
                        <li><a href="sofas.html">Sofas & Armchairs</a></li>
                        <li><a href="banquette.html">Banquette</a></li>
                        <li><a href="stool.html">Bar Height Stools</a></li>
                        <li><a href="officechairs.html">Office Chairs</a></li>
                        <li><a href="kidschairs.html">Kids Chairs</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <ul class="filter-brand">
                        <li><a href="bergen-products.html">Bergen</a></li>
                        <li><a href="belair-products.html">Bel Air</a></li>
                        <li><a href="bartlett-products.html">Bartlett</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="col-sm-12">
                            <div id="slider-range"></div>
                        </div>
                    </div>
                    <div class="row slider-labels">
                        <div class="col-xs-6 caption">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <strong>Min</strong> <span id="slider-range-value1"></span>
                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-xs-6 text-right caption">
                            <strong>Max</strong> <span id="slider-range-value2"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form>
                                <input type="hidden" name="min-value" value="">
                                <input type="hidden" name="max-value" value="">
                            </form>
                        </div>
                    </div><br>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Color</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" title="Yellow" for="cs-black" onclick = "window.open('product-yellow.html', '_self')"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-1">
                            <label class="cs-1" for="cs-1" title="Green" onclick = "window.open('product-green.html', '_self')"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-2">
                            <label class="cs-2" for="cs-2" title="Gray" onclick = "window.open('product-gray.html', '_self')"></label>
                        </div>
                        <br>
                        <div class="cs-item">
                            <input type="radio" id="cs-3">
                            <label class="cs-3" for="cs-3" title="Beige" onclick = "window.open('product-beige.html', '_self')"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-4">
                            <label class="cs-4" for="cs-4" title="Blue" onclick = "window.open('product-blue.html', '_self')"></label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-5">
                            <label class="cs-5" for="cs-5" title="Pink" onclick = "window.open('product-pink.html', '_self')"></label>
                        </div>

                    </div>
                </div>
            </div>
            <div class = "col-lg-9 order-1 order-lg-2 ">
                <div class="row">
                    <div class="col-lg-6 product-color-1">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="front/img/products/{{ $product->$productImage[0]->path }}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    @foreach($product->productImage as $productImage)
                                        <div class="pt active" data-imgbigurl="front/img/products/{{ $product->$productImage[0]->path }}">
                                            <img src="front/img/products/{{ $product->$productImage[0]->path }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6 product-color-2">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="front/img/products/1/color1.jpg" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="front/img/products/1/color1.jpg">
                                    <img src="front/img/products/1/color1.jpg" alt="">
                                </div>
                                <div class="pt" data-imgbigurl="front/img/products/1/color2.jpg">
                                    <img src="front/img/products/1/color2.jpg" alt="">
                                </div>
                                <div class="pt" data-imgbigurl="front/img/products/1/color3.jpg">
                                    <img src="front/img/products/1/color3.jpg" alt="">
                                </div>
                                <div class="pt" data-imgbigurl="front/img/products/1/color4.jpg">
                                    <img src="front/img/products/1/color4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>Sofas & Armchairs</span>
                                <h3>Bergen Miro</h3>
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
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(4)</span>
                            </div>
                            <div class="pd-desc">
                                <p>Our in-house design team know a thing or two about Scandinavian style. Miro's slim, rounded arms, loose, pillowy back cushions and subtle metal legs are here to prove our point</p>
                                <h4>$279.30<span>$399.00</span></h4>
                            </div>
                            <div class = "product-color-detail1">
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <input type="radio" id="color1">
                                            <label for ="color1" class = "active" style="background: #636363"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="color2">
                                            <label for ="color2" class = "pd-color-item2" style="background: #528d65"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1" id = "qty-detail">
                                        </div>
                                        <a href = "#!" class="primary-btn pd-cart add-cart-detail1">Add To Cart</a>
                                </div>
                            </div>
                            <div class = "product-color-detail2">
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <input type="radio" id="cc-black">
                                            <label for ="cc-black" class = "pd-color-item1" style="background: #636363"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-1">
                                            <label for ="cc-1" class = "active" style="background: #528d65"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" id = "qty-detail-2">
                                    </div>
                                    <a href = "#!" class="primary-btn pd-cart add-cart-detail1">Add To Cart</a>
                                </div>
                            </div>
                            <ul class="pd-tags">
                                <li><span>Categories</span>: Bergen, Sofas & Armchairs</li>
                                <li><span>Delivery</span>: In 5 working days</li>
                            </ul>
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
