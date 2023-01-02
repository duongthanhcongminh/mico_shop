<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="Clothing at your price">
    <meta name="keywords" content="kid's clothing">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="front/img/logo-02.png" type="image/png" sizes="16x16">
    <title>@yield('title') | MiCo Shop</title>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
{{--    <link href="https://unpkg.com/tailwindcss@*1.0/tailwind.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="front/css/bootstrap1.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
{{--    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">--}}
    <script src="https://kit.fontawesome.com/477e627b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="front/css/owl.video.css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
    <link href="./dashboard/main.css" rel="stylesheet">
    <link href="./dashboard/my_style.css" rel="stylesheet">
</head>

<body>
<!-- Start coding here -->

<!-- Preloader -->
<div id="preloader">
    <div class="loader"></div>
    <div class="loader-text">Please wait</div>
</div>
<!-- Header -->
<header>
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    micoshop1999@gmail.com
                </div>
                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    +84369218873
                </div>
            </div>
            <div class="ht-right">
                <div class="lan-selector">
                    <select class="language_drop" id="countries" name="countries" style="width: 300px">
                        <option value="en" data-image="front/img/flag-1.jpg" data-imagecss="flag en"
                                data-title="English">English</option>
                        <option value="de" data-image="front/img/flag-2.jpg" data-imagecss="flag de"
                                data-title="German">German</option>
                        <option value="vn" data-image="front/img/flag3.png" data-imagecss="flag-vn"
                                data-title="Vietnam">Vietnam</option>
                        <option value="kr" data-image="front/img/flag4.png" data-imagecss="flag-kr"
                                data-title="Korean">Korean</option>
                        <option value="ch" data-image="front/img/flag5.jpg" data-imagecss="flag-ch"
                                data-title="Vietnam">Chinese</option>
                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-bar-container">
        <div class = "container-fluid">
            <div class="row">
                <div class = "logo-sticky">
                    <div class="logo">
                        <a href="/"><img src="front/img/logo-01.png" height ="25"></a>
                    </div>
                </div>
                <div class = "nav-bar">
                    <ul>
                        <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="./">Home</a></li>
                        <li class="{{ (request()->segment(1) == 'shop') ? 'active' : '' }}"><a href="./shop">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                @foreach($categories as $category)
                                    <li><a href="shop/category/{{ $category->name }}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="#">FAQs</a>
                            <ul class="dropdown" style="width: 200px; padding: 10px 12px">
                                <li><a href="#">Helps & FAQs</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </li>
                        <li><a href="/blog">Blogs</a>
                        </li>
                        <li class = "last"><a href = "./account/my-order">My Order</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/"><img src="front/img/logo-02.png"></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <form action="shop">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input name="search" value="{{ request('search') }}" type="text" placeholder="What do you need?">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 text-right">
                    <div class="nav-right">
                        @if(Auth::check())
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="heart-icon">
                                    <a href = "/account/info"><i class = "fa fa-user"></i></a>
                                </li>
                                <li class="cart-icon">
                                    <a href = "./cart">
                                        <i class="icon_bag_alt"></i>
                                        <span class="cart-count">{{ count($cartItems) }}</span>
                                    </a>
                                    <div class="cart-hover">
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    @foreach($cartItems as $cartItem)
                                                        <tr data-rowId = "{{$cartItem->id}}">
                                                            <td class="si-pic"><img style="height: 70px;" src="front/img/products/{{ $cartItem->product_image }}" alt=""></td>
                                                            <td class="si-text">
                                                                <div class="product-selected">
                                                                    <h6>{{ $cartItem->product_name }}</h6>
                                                                    <p>( {{ $cartItem->product_size }},{{ $cartItem->product_color }} )</p>
                                                                    <p>${{ $cartItem->product_price }} x {{ $cartItem->qty }}</p>
                                                                </div>
                                                            </td>
                                                            <td class="si-close">
                                                                <a href="cart/delete/{{ $cartItem->id }}"><i class="ti-close"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>
                                                ${{array_sum(array_column($cartItems->toArray(),'total'))}}
                                            </h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="./cart" class="primary-btn view-card">VIEW CARD</a>
                                            <a href="./checkout" class="primary-btn checkout-card">CHECK OUT</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="text-body" href="/account/logout">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="d-flex justify-content-center align-items-center">
                                    <li class="dropdown-item">
                                        <a class="bg-light">
                                            _{{ Auth::user()->name }}_
                                        </a>
                                    </li>
                            </ul>
                        @else
                            <ul class="d-flex justify-content-center align-items-center">
                                <li class="heart-icon">
                                    <a href = "/account/login"><i class = "fa fa-sign-in"></i> Login</a>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{--Body here--}}

@yield('body')





<!-- Footer -->
<!-- Partner Logo Section -->
<div class = "partner-logo">
    <div class = "container">
        <div class = "logo-carousel">
            <div class = "logo-item">
                <div class = "tablecell-inner">
                    <img src = "front/img/logo-carousel/logo-1.png">
                </div>
            </div>
            <div class = "logo-item">
                <div class = "tablecell-inner">
                    <img src = "front/img/logo-carousel/logo-2.png">
                </div>
            </div>
            <div class = "logo-item">
                <div class = "tablecell-inner">
                    <img src = "front/img/logo-carousel/logo-3.png">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class = "footer-section">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-3">
                <div class = "footer-left">
                    <div class = "footer-logo">
                        <a href = "index.html">
                            <img src = "front/img/logo-01.png" alt = "" height = 40>
                        </a>
                    </div>
                    <ul>
                        <li>175 Tay Son Street, Ha Noi, Viet Nam</li>
                        <li>Phone: +84369218874 </li>
                        <li>Email: micoshop@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class = "col-lg-2 offset-lg-1">
                <div class = "footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href = "about.html">About us</a></li>
                        <li><a href = "store.html">Brands</a></li>
                        <li><a href = "contact.html">Contact</a></li>
                        <li><a href = "faqs.html">Help & FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class = "col-lg-2">
                <div class = "footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href = "login.html">Log in</a></li>
                        <li><a href = "register.html">Register</a></li>
                        <li><a href = "./cart">Shopping Cart</a></li>
                        <li><a href = "products1.html">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class = "col-lg-4">
                <div class = "newslatter-item">
                    <h5>Join Our Newsletter for $50 off</h5>
                    <p>Get E-mail updates about our latest shop and special offers</p>
                    <form action = "#" class = "subscribe-form">
                        <input type = "text" id="sub-email" placeholder = "Enter your email">
                        <button type = "button" onclick="checkSubEmail()">Subscribe</button>
                    </form>
                    <div id="subemail-error"></div>
                </div>
            </div>
        </div>
    </div>
    <div class = "copyright-reserved">
        <div class = "container">
            <div class = "row">
                <div class = "col-lg-12">
                    <div class = "copyright-text">
                        MICO SHOP &copy; <script>
                            document.write(new Date().getFullYear());</script>.
                    </div>
                    <span class="copyright-reserved">&nbsp;<a style="color: white" href="sitemap.html">Discover our Sitemap.</a></span>
                    <div class = "payment-pic">
                        <img src = "front/img/payment-method.png"></img>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Js Plugins -->
<script src="front/js/jquery-3.3.1.min.js"></script>
<script src="front/js/bootstrap.min.js"></script>
<script src="front/js/jquery-ui.min.js"></script>
<script src="front/js/jquery.countdown.min.js"></script>
<script src="front/js/jquery.nice-select.min.js"></script>
<script src="front/js/jquery.zoom.min.js"></script>
<script src="front/js/jquery.dd.min.js"></script>
<script src="front/js/owl.carousel.min.js"></script>
<script src="front/js/owl.video.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        disable: function() {
            var maxWidth = 1077;
            return (window.innerWidth < maxWidth);
        }
    });
</script>
<script src="front/js/main.js"></script>
<script>
    deletePromoRecord();
</script>
<script type="text/javascript" src="./dashboard/assets/scripts/main.js"></script>
<script type="text/javascript" src="./dashboard/assets/scripts/my_script.js"></script>
<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "102874662302852");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v15.0'
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
</body>

</html>
