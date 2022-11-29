<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="Clothing at your price">
    <meta name="keywords" content="men's clothing, women's clothing, kid's clothing">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="front/img/logo-01.png" type="image/png" sizes="16x16">
    <title>@yield('title') | MiCo Shop</title>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/477e627b99.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="front/css/owl.video.css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
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
                    micoshop@gmail.com
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
                        <a href="index.html"><img src="front/img/logo-01.png" height ="25"></a>
                    </div>
                </div>
                <div class = "nav-bar">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="products1.html">Products</a>
                            <table class="dropdown" style="width: 500px">
                                <tr>
                                    <th>By Category</th>
                                    <th>By Brand</th>
                                    <th>Offers</th>
                                </tr>
                                <tr>
                                    <td><a href="#">Dining Chairs</a></td>
                                    <td><a href="#">Bartlett</a></td>
                                    <td><a href="#" style = "color: crimson">Sales</a></td>
                                </tr>
                                <tr>
                                    <td><a href="sofas.html">Sofas & Armchairs</a></td>
                                    <td><a href="belair-products.html">Bel Air</a></td>
                                    <td><a href="product-compare.html">Products Compare</a></td>
                                </tr>
                                <tr>
                                    <td><a href="banquette.html">Banquette</a></td>
                                    <td><a href="bergen-products.html">Bergen</a></td>
                                </tr>
                                <tr>
                                    <td><a href="stool.html">Bar Height Stools</a></td>
                                </tr>
                                <tr>
                                    <td><a href="officechairs.html">Office Chairs</a></td>
                                </tr>
                                <tr>
                                    <td><a href="kidschairs.html">Kids Chairs</a></td>
                                </tr>
                            </table></li>
                        <li><a href="store.html">Store</a>
                            <ul class="dropdown">
                                <li><a href="bartlett.html">Bartlett</a></li>
                                <li><a href="belair.html">Bel Air</a></li>
                                <li><a href="bergen.html">Bergen</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="faqs.html">FAQs</a>
                            <ul class="dropdown" style="width: 200px; padding: 10px 12px">
                                <li><a href="faqs.html">Helps & FAQs</a></li>
                                <li><a href="returnpolicy.html">Return Policy</a></li>
                                <li><a href="terms.html">Terms & Conditions</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blogs</a>
                            <ul class="dropdown" style="width: 150px; padding: 10px 12px">
                                <li><a href="getinspired.html">Get Inspired</a></li>
                                <li><a href="lifestyle.html">Lifestyle</a></li>
                            </ul>
                        </li>
                        <li class = "last"><a href = "contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class = "text-right">
                    <div class="nav-right">
                        <ul>
                            <li class="user-icon">
                                <a href="#" onclick = "document.getElementById('search-input').focus();">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li class="user-icon">
                                <a href="login.html">
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <li class="heart-icon">
                                <a href = "wishlist.html"><i class = "fa fa-heart-o"></i></a>
                            </li>
                            <li class="cart-icon-1">
                                <a href = "cart.html">
                                    <i class="icon_bag_alt"></i>
                                    <span>0</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div role="navigation" id = "mobilenav">
        <div id="menuToggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <li class = "nav-item"><a href="index.html">Home</a></li>
                <li class ="nav-item sub-menu">Products
                    <input type = "checkbox" id = "menu-1">
                    <div id = "menu-cont-1">
                        <ul class = "ham-dropdown">
                            <label for = "menu-1" class = "menu-label">Back to Products</label>
                            <h6><a href="products1.html">Products</a></h6>
                            <h6>By Category</h6>
                            <a href="diningchairs.html" class = "nav-item"><li>Dining Chairs</li></a>
                            <a href="sofas.html" class = "nav-item"><li>Sofas & Armchairs</li></a>
                            <a href="stool.html" class = "nav-item"><li>Bar Height Stools</li></a>
                            <a href="banquette.html" class = "nav-item"><li>Banquette</li></a>
                            <a href="officechairs.html" class = "nav-item"><li>Office Chairs</li></a>
                            <a href="kidschairs.html" class = "nav-item"><li>Kids Chairs</li></a>
                        </ul>
                        <ul class = "ham-dropdown">
                            <h6>By Brand</h6>
                            <a href="bergen-products.html" class = "nav-item"><li>Bergen</li></a>
                            <a href="belair-products.html" class = "nav-item"><li>Bel Air</li></a>
                            <a href="bartlett-products.html" class = "nav-item"><li>Bartlett</li></a>
                        </ul>
                        <ul class = "ham-dropdown">
                            <h6>Offer</h6>
                            <a href="sale.html" class = "nav-item"><li>Sale</li></a>
                            <a href="product-compare.html" class="nav-item"><li>Products Compare</li></a>
                        </ul></div></li>
                <li class ="nav-item sub-menu">Store
                    <input type = "checkbox" id = "menu-2">
                    <div id = "menu-cont-2">
                        <ul class = "ham-dropdown">
                            <label for = "menu-2" class = "menu-label">Back to Store</label>
                            <h6><a href="store.html">Store</a></h6>
                            <a href="bergen.html" class = "nav-item"><li>Bergen</li></a>
                            <a href="belair.html" class = "nav-item"><li>Bel Air</li></a>
                            <a href="bartlett.html" class = "nav-item"><li>Bartlett</li></a>
                        </ul></div>
                </li>
                <li class = "nav-item"><a href="about.html">About Us</a></li>
                <li class ="nav-item sub-menu">FAQs
                    <input type = "checkbox" id = "menu-3">
                    <div id = "menu-cont-3">
                        <ul class = "ham-dropdown">
                            <label for = "menu-3" class = "menu-label">Back to FAQs</label>
                            <h6><a href="faqs.html">FAQs</a></h6>
                            <a href="faqs.html" class = "nav-item"><li>Help & FAQs</li></a>
                            <a href="returnpolicy.html" class = "nav-item"><li>Return Policy</li></a>
                            <a href="terms.html" class = "nav-item"><li>Terms & Conditions</li></a>
                        </ul></div>
                </li>
                <li class ="nav-item sub-menu">Blogs
                    <input type = "checkbox" id = "menu-4">
                    <div id = "menu-cont-4">
                        <ul class = "ham-dropdown">
                            <label class = "menu-label" for = "menu-4">Back to Blogs</label>
                            <h6><a href="blog.html">Blog</a></h6>
                            <a href="getinspired.html" class = "nav-item"><li>Get Inspired</li></a>
                            <a href="lifestyle.html" class = "nav-item"><li>Lifestyle</li></a>
                        </ul></div>
                </li>
                <li class = "nav-item"><a href="contact.html">Contact Us</a></li>
                <ul class = "menuside-contact">
                    <p>MY ACCOUNT</p>
                    <li class="menuside-item">
                        <ul>
                            <li><a href="login.html">
                                    <i class="fa fa-user"></i></a>
                            </li>
                            <li><a href = "wishlist.html"><i class = "fa fa-heart-o"></i></a></li>
                            <li class = "cart-icon-1">
                                <a href = "cart.html">
                                    <i class="icon_bag_alt"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <p>FOLLOW US</p>
                    <li class="menuside-item">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="search-bar">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="index.html"><img src="front/img/logo-01.png"></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="advanced-search">
                        <select class="form-select category-btn" onchange="filterselected(this)">
                            <option value="all">All Categories</option>
                            <option value="dining">Dining Chairs</option>
                            <option value="sofa">Sofas & Armchairs</option>
                            <option value="banquette">Banquette</option>
                            <option value="stool">Stools</option>
                            <option value="office">Office Chairs</option>
                            <option value="kid">Kids Chairs</option>
                        </select>
                        <form class="input-group" id="input-group">
                            <input type="text" id = "search-input" placeholder="Search for products..."
                                   onkeyup="searchfunction()" onfocus="displayList()" onfocusout="hideList()">
                            <ul class="product-list" id="the-list">
                                <li class="filterDiv sofa"><a href="productdetail01.html">Bergen Miro</a></li>
                                <li class="filterDiv sofa"><a href="productdetail02.html">Bergen Kubrick</a></li>
                                <li class="filterDiv sofa"><a href="productdetail03.html">Bergen Sete</a></li>
                                <li class="filterDiv stool"><a href="productdetail04.html">Bergen Shona</a></li>
                                <li class="filterDiv sofa"><a href="productdetail05.html">Bel Air 2LG</a></li>
                                <li class="filterDiv stool"><a href="productdetail06.html">Bel Air Lule</a></li>
                                <li class="filterDiv stool"><a href="productdetail07.html">Bel Air Swinton</a></li>
                                <li class="filterDiv sofa"><a href="productdetail08.html">Bel Air Orson</a></li>
                                <li class="filterDiv sofa"><a href="productdetail09.html">Bel Air Branagh</a></li>
                                <li class="filterDiv sofa"><a href="productdetail10.html">Bel Air Elmira</a></li>
                                <li class="filterDiv banquette"><a href="productdetail11.html">Bartlett Assim</a></li>
                                <li class="filterDiv banquette"><a href="productdetail12.html">Bartlett Raleigh</a></li>
                                <li class="filterDiv banquette"><a href="productdetail13.html">Bartlett Asare 2</a></li>
                                <li class="filterDiv banquette"><a href="productdetail14.html">Bartlett Asare</a></li>
                                <li class="filterDiv banquette"><a href="productdetail15.html">Bartlett Abel</a></li>
                                <li class="filterDiv dining"><a href="productdetail16.html">Bergen Abbon</a></li>
                                <li class="filterDiv dining"><a href="productdetail17.html">Bergen Revy</a></li>
                                <li class="filterDiv dining"><a href="productdetail18.html">Bergen Kalaspel</a></li>
                                <li class="filterDiv dining"><a href="productdetail19.html">Bergen Deon</a></li>
                                <li class="filterDiv dining"><a href="productdetail20.html">Bel Air Rhye</a></li>
                                <li class="filterDiv office"><a href="productdetail21.html">Bel Air Thelma</a></li>
                                <li class="filterDiv office"><a href="productdetail22.html">Bel Air Lule 2</a></li>
                                <li class="filterDiv office"><a href="productdetail23.html">Bel Air Revy</a></li>
                                <li class="filterDiv office"><a href="productdetail24.html">Bergen Margot</a></li>
                                <li class="filterDiv office"><a href="productdetail25.html">Bergen Swinton</a></li>
                                <li class="filterDiv kid"><a href="productdetail26.html">Bartlett Lyra</a></li>
                                <li class="filterDiv kid"><a href="productdetail27.html">Bartlett Lyra Garden</a></li>
                                <li class="filterDiv kid"><a href="productdetail28.html">Bartlett Nardi</a></li>
                                <li class="filterDiv kid"><a href="productdetail29.html">Bartlett Topa</a></li>
                                <li class="filterDiv kid"><a href="productdetail30.html">Bartlett Swara</a></li>
                            </ul>
                            <div class="btn-groupie">
                                <button type="reset" class="close-btn" onclick="clearsearch()">
                                    <i class="ti-close"></i>
                                </button>
                                <button type="button" class="search-btn" onclick="displayList()" onfocusout="hideList()">
                                    <i class="ti-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <div class="nav-right">
                        <ul>
                            <li class="user-icon">
                                <a href="login.html">
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <li class="heart-icon">
                                <a href = "wishlist.html"><i class = "fa fa-heart-o"></i></a>
                            </li>
                            <li class="cart-icon">
                                <a href = "cart.html">
                                    <i class="icon_bag_alt"></i>
                                    <span>0</span>
                                </a>
                                <div class = "cart-hover">
                                    <div class = "row select-items">
                                        <div class = "col-lg-12">
                                            <div class = "cart-hover-items">
                                                <div class = "select-button">
                                                    <a href = "cart.html" class = "primary-btn view-card">VIEW CART
                                                    </a>
                                                    <a onclick="return cartcheck1()" class = "primary-btn checkout-card">CHECK OUT</a>
                                                    <div class="row">
                                                        <div class="col-lg-6 checkoutbtn-left">
                                                            <div id="cartcheckError1"></div>
                                                        </div>
                                                        <div class="col-lg-6 checkoutbtn-right">
                                                            <div id="go-shopping"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
                        <li><a href = "cart.html">Shopping Cart</a></li>
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
<script src="front/js/cart.js"></script><script src="js/wishlist.js"></script>

</body>

</html>