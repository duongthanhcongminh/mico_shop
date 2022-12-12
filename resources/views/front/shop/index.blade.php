@extends('front.layout.master')

@section('title','Product')

@section('body')
    <!--    breadcrumb section start-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumb section end-->
<!-- Banner header -->
<div id = "banner" style = "background-image: url('https://image.stern.de/8912638/t/fz/v2/w1440/r1.3333/-/25-jahre-friends.jpg')">
    <div id = "banner-text">
        <h2>Products</h2>
    </div>
</div>

<div class = "notification-toast animate__animated"></div>

<!-- Body -->
<!-- Product Shop-->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 products-sidebar-filter">

                @include('front.shop.components.products-sidebar-filter')

            </div>
            <div class = "col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    @if(session('notification'))
                        <div class="row mt-5 d-flex justify-content-center alert alert-warning" role="alert">
                            {{session('notification')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <form action="">
                                <div class="select-option">
                                <select name="sort_by" onchange="this.form.submit();" class="sorting">
                                    <option {{ request('sort_by') == 'latest' ? 'selected' : '' }} value="latest">Sorting: Latest</option>
                                    <option {{ request('sort_by') == 'oldest' ? 'selected' : '' }} value="oldest">Sorting Oldest</option>
                                    <option {{ request('sort_by') == 'name-ascending' ? 'selected' : '' }} value="name-ascending">Sorting: Name A-Z</option>
                                    <option {{ request('sort_by') == 'name-descending' ? 'selected' : '' }} value="name-descending">Sorting: Name Z-A</option>
                                    <option {{ request('sort_by') == 'price-ascending' ? 'selected' : '' }} value="price-ascending">Sorting: Price Low->High</option>
                                    <option {{ request('sort_by') == 'price-descending' ? 'selected' : '' }} value="price-descending">Sorting: Price High->Low</option>
                                </select>
                                <select name="show" onchange="this.form.submit();" class="p-show">
                                    <option {{ request('show') == '3' ? 'selected' : '' }} value="3">Show: 3</option>
                                    <option {{ request('show') == '9' ? 'selected' : '' }} value="9">Show: 9</option>
                                    <option {{ request('show') == '15' ? 'selected' : '' }} value="15">Show: 15</option>
                                </select>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class = "product-list">
                    <div class = "row">
                        @foreach($products as $product)
                        <div class = "col-lg-4 col-sm-6">
                            @include('front.components.product-item')
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="row mt-5 d-flex justify-content-center">
                    {{ $products->onEachSide(1)->links() }}
                </div>
            </div>
        </div>


    </div>
</section>
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
