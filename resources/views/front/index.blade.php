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

<!-- Men's  -->
<section class = "men-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/man-large.jpg">
                    <h2>Men's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class = "product-slider owl-carousel d-flex justify-content-center align-items-center">
                    @foreach($featuredProducts['men'] as $product)
                        @include('front.components.product-item')
                    @endforeach
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

<!-- Woman -->
<section class = "men-banner spad mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/women-large.jpg">
                    <h2>Women's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class = "product-slider owl-carousel d-flex justify-content-center align-items-center">
                    @foreach($featuredProducts['women'] as $product)
                        @include('front.components.product-item')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="deal-of-week spad">
    <img src="front/img/hero-2.jpg">
</div>
<!-- Kid -->
<section class = "men-banner spad mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/man-large.jpg">
                    <h2>Kid's</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class = "product-slider owl-carousel d-flex justify-content-center align-items-center">
                    @foreach($featuredProducts['kid'] as $product)
                        @include('front.components.product-item')
                    @endforeach
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
            @foreach($blogs as $blog)
                <div class = "col-lg-4 col-md-6" data-aos="fade-up"
                     data-aos-easing="ease-in-sine">
                    <div class = "single-latest-blog">
                        <img src = "front/img/blog/{{ $blog->image }}">
                        <div class = "latest-text">
                            <div class = "tag-list">
                                <div class = "tag-item">
                                    <i class="fa fa-calendar-0"></i>
                                    {{ date('M d, Y', strtotime($blog->created_at)) }}
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    {{count($blog->blogComments )}}
                                </div>
                            </div>
                            <a href = "#">
                                <h4>{{ $blog->title }}</h4>
                            </a>
                            <p>{{ $blog->subtitle }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
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

