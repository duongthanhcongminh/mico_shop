@extends('front.layout.master')

@section('title','Home')

@section('body')



<!-- Back to Top - Chat Code -->

<div class = "container">
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class = "fa fa-chevron-up"></i></button>
</div>
<script>
    //Get the button
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
        window.scrollTo({top: 0, behavior: 'smooth'});
    }
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
<div class = "notification-toast animate__animated"></div>
<!-- Hero Section -->
<section class = "hero-section">
    <div class = "hero-items owl-carousel">
        <div class = "single-hero-items set-bg" data-setbg = "front/img/hero-1.jpg">
            <div class = "container">
                <div class = "row">
                    <div class = "col-lg-5">
                        <span>Women's Collection</span>
                        <h1>NEW ARRIVALS</h1>
                        <p></p>
                        <a href = "#" class = "primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class = "single-hero-items set-bg" data-setbg = "front/img/hero-2.jpg">
            <div class = "container">
                <div class = "row">
                    <div class = "col-lg-5">
                        <span>Kid's Collection</span>
                        <h1>NEW ARRIVALS</h1>
                        <p>
                            Slip Margot into your office for instant vintage appeal – it makes every day a little extra.
                        </p>
                        <a href = "#" class = "primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class = "single-hero-items set-bg" data-setbg = "front/img/hero-3.jpg">
            <div class = "container">
                <div class = "row">
                    <div class = "col-lg-5">
                        <span>Men's Collection</span>
                        <h1>NEW ARRIVALS</h1>
                        <p>
                            See what's new and exciting for Spring 2022! Abel Storage Bench is currently available for order at special price!
                        </p>
                        <a href = "#" class = "primary-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner Category -->
<div class = "banner-section spad">
    <div class = "container-fluid">
        <div class = "row mt-4">
            <div class = "col-lg-4" data-aos = "fade-up">
                <div class = "single-banner">
                    <img src = "front/img/banner-1.png" alt = "">
                    <div class = "inner-text">
                        <a href = "#">Shirts</a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class = "col-lg-4" data-aos = "fade-down">
                <div class = "single-banner">
                    <img src = "front/img/banner-2.png" alt = "">
                    <div class = "inner-text">
                        <a href = "#">Hoodies and Sweaters</a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class = "col-lg-4" data-aos = "fade-up">
                <div class = "single-banner">
                    <img src = "front/img/banner-3.png" alt = "">
                    <div class = "inner-text">
                        <a href = "#">T-shirts</a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
        <div class = "row mt-4">
            <div class = "col-lg-4" data-aos = "fade-down">
                <div class = "single-banner">
                    <img src = "front/img/banner-4.png" alt = "">
                    <div class = "inner-text">
                        <a href = "#">Bottom</a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class = "col-lg-4" data-aos = "fade-up">
                <div class = "single-banner">
                    <img src = "front/img/banner-5.png" alt = "">
                    <div class = "inner-text">
                        <a href = "#">Jeans</a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
            <div class = "col-lg-4" data-aos = "fade-down">
                <div class = "single-banner">
                    <img src = "front/img/banner-6.png" alt = "">
                    <div class = "inner-text">
                        <a href = "#">Shoes</a>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bestsellers -->
<section class = "bestsell-banner spad">
    <h2>Best sellers</h2>
    <div class = "container-fluid" style = "padding: 20px 0 0;">
        <div class = "product-slider owl-carousel">
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/t-shirt1.jpg" alt = "">
                    <div class = "sale">Sale 30%</div>
                    <div class = "icon1 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart1"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">T-shrit</div>
                    <a href = "#">
                        <h5>Men's T-shirt</h5>
                    </a>
                    <div class = "product-price">
                        $279.30 <span>$399.00</span>
                    </div>
                </div>
            </div>
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/t-shirt2.jpg" alt = "">
                    <div class = "sale">Sale 30%</div>
                    <div class = "icon2 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart2"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "productdetail02.html">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">T-shirt</div>
                    <a href = "#">
                        <h5>Men's T-shirt</h5>
                    </a>
                    <div class = "product-price">
                        $349.30
                        <span>$499.00</span>
                    </div>
                </div>
            </div>
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/t-shirt3.jpg" alt = "">
                    <div class = "sale">Sale 30%</div>
                    <div class = "icon6 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart6"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">T-shirt</div>
                    <a href = "#">
                        <h5>Men's T-shirt</h5>
                    </a>
                    <div class = "product-price">
                        $209.30
                        <span>$299.00</span>
                    </div>
                </div>
            </div>
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/short1.jpg" alt = "">
                    <div class = "icon10 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart10"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "p#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">Short</div>
                    <a href = "#">
                        <h5>Men's Short</h5>
                    </a>
                    <div class = "product-price">
                        $2,199.00
                    </div>
                </div>
            </div>
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/jean1.jpg" alt = "">
                    <div class = "icon15 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart15"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">Jeans</div>
                    <a href = "#">
                        <h5>Jeans</h5>
                    </a>
                    <div class = "product-price">
                        $179.00
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Deal of the Week -->
<section class = "deal-of-week set-bg spad" data-setbg = "front/img/time-bg.png">
    <div class = "col-lg-6 text-center">
        <div class = "section-title">
            <h2>Deal Of The Week</h2>
            <p ></p>
            <div class = "product-price">
                $114.50
                <span>$229.00</span>
            </div>
        </div>
        <div class = "countdown-timer" id = "countdown">
            <div class = "cd-item">
                <span>12</span>
                <p>Days</p>
            </div>
            <div class = "cd-item">
                <span>12</span>
                <p>Hrs</p>
            </div>
            <div class = "cd-item">
                <span>48</span>
                <p>Mins</p>
            </div>
            <div class = "cd-item">
                <span>52</span>
                <p>Secs</p>
            </div>
        </div>
        <a href = "#" class = "primary-btn">Shop Now</a>
    </div>

</section>

<!-- Top Sale -->
<section class = "sale-banner spad">
    <h2>On Sale</h2>
    <div class = "container-fluid" style = "padding: 20px 0 0;">
        <div class = "product-slider owl-carousel">
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/t-shirt1.jpg" alt = "">
                    <div class = "sale">Sale 30%</div>
                    <div class = "icon4 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart4"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">T-shirt</div>
                    <a href = "#">
                        <h5>Men's T-shirt</h5>
                    </a>
                    <div class = "product-price">
                        $209.30  <span>$299.00</span>
                    </div>
                </div>
            </div>
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/t-shirt2.jpg" alt = "">
                    <div class = "sale">Sale 30%</div>
                    <div class = "icon8 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart8"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">T-shirt</div>
                    <a href = "#">
                        <h5>Men's T-shirt</h5>
                    </a>
                    <div class = "product-price">
                        $734.30
                        <span>$1,049.00</span>
                    </div>
                </div>
            </div>
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/t-shirt2.jpg" alt = "">
                    <div class = "sale">Sale 30%</div>
                    <div class = "icon9 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart9"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">T-shirt</div>
                    <a href = "#">
                        <h5>Men's T-shirt</h5>
                    </a>
                    <div class = "product-price">
                        $734.30
                        <span>$1,049.00</span>
                    </div>
                </div>
            </div>
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/short1.jpg" alt = "">
                    <div class = "sale">Sale 30%</div>
                    <div class = "icon27 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart27"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">Short</div>
                    <a href = "#">
                        <h5>Men's Short</h5>
                    </a>
                    <div class = "product-price">
                        $125.30  <span>$179.00</span>
                    </div>
                </div>
            </div>
            <div class = "product-item">
                <div class = "pi-pic">
                    <img src = "front/img/products/1/jean1.jpg" alt = "">
                    <div class = "sale">Sale 30%</div>
                    <div class = "icon28 icon-heart">
                        <i class = "fa fa-heart-o"></i>
                    </div>
                    <ul>
                        <li class = "w-icon active"><a href = "#!" class = "add-cart28"><i class = "icon_bag_alt"></i></a></li>
                        <li class = "quick-view"><a href = "#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-share"></i></a></li>
                    </ul>
                </div>
                <div class = "pi-text">
                    <div class = "catagory-name">Jeans</div>
                    <a href = "#">
                        <h5>Men's Jeans</h5>
                    </a>
                    <div class = "product-price">
                        $279.30
                        <span>$399.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop by Brand -->
<div class = "brand-section spad">
    <div class = "row">
        <h2 class = "mobile-head">Shop by Brand</h2>
        <div class = "col-lg-4 exp">
            <div class = "single-banner">
                <img src = "front/img/banner-brand1.jpg" alt = "" data-aos = "fade-up">
                <div class = "inner-text">
                    <a href = "#">BRAND1</a>
                </div>
                <div class = "overlay"></div>
            </div>
        </div>
        <div class = "col-lg-4 exp1 exptext" data-aos = "fade-down">
            <h2>Shop by Brand</h2>
        </div>
        <div class = "col-lg-4 exp" data-aos = "fade-up">
            <div class = "single-banner">
                <img src = "front/img/banner-brand2.jpg" alt = "">
                <div class = "inner-text">
                    <a href = "#">BRAND2</a>
                </div>
                <div class = "overlay"></div>
            </div>
        </div>
    </div>
    <div class = "row">
        <div class = "col-lg-4 exp1" data-aos = "fade-down"></div>
        <div class = "col-lg-4 exp exp2" data-aos = "fade-up">
            <div class = "single-banner">
                <img src = "front/img/banner-brand3.jpg" alt = "">
                <div class = "inner-text">
                    <a href = "#">BRAND3</a>
                </div>
                <div class = "overlay"></div>
            </div>
        </div>
        <div class = "col-lg-4 exp1" data-aos = "fade-down"></div>
    </div>
</div>


<!-- Instagram -->
<div class = "instagram-photo">
    <div class = "insta-item set-bg" data-setbg = "front/img/products/1/insta1.jpg">
        <div class = "inside-text">
            <i class = "fa fa-instagram">
                <p><a href = "#">Instagram</a></p>
            </i>
        </div>
    </div>
    <div class = "insta-item set-bg" data-setbg = "front/img/products/1/insta2.jpg">
        <div class = "inside-text">
            <i class = "fa fa-instagram">
                <p><a href = "#">Instagram</a></p>
            </i>
        </div>
    </div>
    <div class = "insta-item set-bg" data-setbg = "front/img/products/1/insta3.jpg">
        <div class = "inside-text">
            <i class = "fa fa-instagram">
                <p><a href = "#">Instagram</a></p>
            </i>
        </div>
    </div>
    <div class = "insta-item set-bg" data-setbg = "front/img/products/1/insta4.jpg">
        <div class = "inside-text">
            <i class = "fa fa-instagram">
                <p><a href = "#">Instagram</a></p>
            </i>
        </div>
    </div>
</div>

<!-- Latest Blog Section -->
<section class = "latest-blog spad">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "section-title">
                    <h2>Latest Blog</h2>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class = "col-lg-4 col-md-6" data-aos="fade-up"
                 data-aos-easing="ease-in-sine">
                <div class = "single-latest-blog">
                    <img src = "front/img/products/1/latest-1.jpg">
                    <div class = "latest-text">
                        <div class = "tag-list">
                            <div class = "tag-item">
                                LIFESTYLE
                            </div>
                        </div>
                        <a href = "#">
                            <h4>Transforms a Georgian-Era Home</h4>
                        </a>
                        <p>Just a few strides from the bustle of Brick Lane in London’s
                            East End—where the sweet, spicy scent of the street’s...</p>
                    </div>
                </div>
            </div>
            <div class = "col-lg-4 col-md-6" data-aos="fade-down"
                 data-aos-easing="ease-in-sine">
                <div class = "single-latest-blog">
                    <img src = "front/img/products/1/latest-2.jpg">
                    <div class = "latest-text">
                        <div class = "tag-list">
                            <div class = "tag-item">
                                GET INSPIRED
                            </div>
                        </div>
                        <a href = "#">
                            <h4>5 Mid-Century Modern Sofas to Breathe Life</h4>
                        </a>
                        <p>For the home-decor-obsessed, a scroll through your Instagram
                            feed and a browse through a tasteful design store...</p>
                    </div>
                </div>
            </div>
            <div class = "col-lg-4 col-md-6" data-aos="fade-up"
                 data-aos-easing="ease-in-sine">
                <div class = "single-latest-blog">
                    <img src = "front/img/products/1/latest-3.jpg">
                    <div class = "latest-text">
                        <div class = "tag-list">
                            <div class = "tag-item">
                                GET INSPIRED
                            </div>
                        </div>
                        <a href = "#">
                            <h4>The Cloud Couch Becomes the Celebrity Favorite</h4>
                        </a>
                        <p>Owned and adored by celebrities such as Kendall Jenner,
                            Kerry Washington, Nina Dobrev, and Naomi Watts...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Uploads -->
<div class = "recent-upload">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-12">
                <div class = "section-title">
                    <h2>Recent Uploads</h2>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class="owl-carousel video-items owl-theme">
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=3ItMs3k_bwY"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=q6iLmccaNV0"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=kWQZcTljiak"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=hoKDrFyQDy0"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=5fzrbjvb2Mg"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=yuLMna0a6GY"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=DsZhTIwJV5E"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=xZ2tCTuJI5E"></a></div>
            </div>
        </div>
    </div>
</div>

@endsection

