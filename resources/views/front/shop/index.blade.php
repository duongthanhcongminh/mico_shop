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
                 <form action="shop">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            @foreach($categories as $category)
                            <li><a href="shop/category/{{ $category->name }}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            @foreach($brands as $brand)
                                <div class="bc-item">
                                    <label for="bc-{{$brand->id}}">
                                        {{ $brand->name }}
                                        <input type="checkbox"
                                               {{(request("brand")[$brand->id] ?? '') == 'on' ? 'checked' : ''}}
                                               id="bc-{{$brand->id}}" name="brand[{{$brand->id}}]"
                                               onchange="this.form.submit();">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount" name="price_min">
                                    <input type="text" id="maxamount" name="price_max">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                 data-min="10" data-max="999"
                                 data-min-value="{{ str_replace('$', '', request('price_min')) }}"
                                 data-max-value="{{ str_replace('$', '', request('price_max')) }}">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>

                        <button type="submit" class="filter-btn">Filter</button>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black" name="color" value="black" onchange="this.form.submit();"
                                        {{ request('color') == 'black' ? 'checked' : ''}} >
                                <label class="cs-black {{request('color') == 'black' ? 'font-weight-bold' : ''}}" for="cs-black">black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet" name="color" value="violet" onchange="this.form.submit();"
                                    {{ request('color') == 'violet' ? 'checked' : ''}} >
                                <label class="cs-violet {{request('color') == 'violet' ? 'font-weight-bold' : ''}}" for="cs-violet">violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue" name="color" value="blue" onchange="this.form.submit();"
                                    {{ request('color') == 'blue' ? 'checked' : ''}} >
                                <label class="cs-blue {{request('color') == 'blue' ? 'font-weight-bold' : ''}}" for="cs-blue">blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow" name="color" value="yellow" onchange="this.form.submit();"
                                    {{ request('color') == 'yellow' ? 'checked' : ''}} >
                                <label class="cs-yellow {{request('color') == 'yellow' ? 'font-weight-bold' : ''}}" for="cs-yellow">yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red" name="color" value="red" onchange="this.form.submit();"
                                    {{ request('color') == 'red' ? 'checked' : ''}} >
                                <label class="cs-red {{request('color') == 'red' ? 'font-weight-bold' : ''}}" for="cs-red">red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green" name="color" value="green" onchange="this.form.submit();"
                                    {{ request('color') == 'green' ? 'checked' : ''}} >
                                <label class="cs-green {{request('color') == 'green' ? 'font-weight-bold' : ''}}" for="cs-green">green</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size" name="size" value="s" onchange="this.form.submit();"
                                    {{ request('size') == 's' ? 'checked' : '' }}>
                                <label for="s-size" class="{{ request('size') == 's' ? 'active' : '' }}" >s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size" name="size" value="m" onchange="this.form.submit();"
                                    {{ request('size') == 'm' ? 'checked' : '' }}>
                                <label for="m-size" class="{{ request('size') == 'm' ? 'active' : '' }}" >m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size" name="size" value="l" onchange="this.form.submit();"
                                    {{ request('size') == 'l' ? 'checked' : '' }}>
                                <label for="l-size" class="{{ request('size') == 'l' ? 'active' : '' }}">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xl-size" name="size" value="xl" onchange="this.form.submit();"
                                    {{ request('size') == 'xl' ? 'checked' : '' }}>
                                <label for="xl-size" class="{{ request('size') == 'xl' ? 'active' : '' }}">xl</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xll-size" name="size" value="xxl" onchange="this.form.submit();"
                                    {{ request('size') == 'xxl' ? 'checked' : '' }}>
                                <label for="xll-size class="{{ request('size') == 'xxl' ? 'active' : '' }}"">xll</label>
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
                 </form>
            </div>
            <div class = "col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
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
                            <div class = "product-item">
                                <div class = "pi-pic">
                                    <img src = "front/img/products/{{$product->productImages[0]->path }}" alt = "">
                                    @if($product->discount !=null)
                                    <div class = "sale pp-sale">Sale</div>
                                    @endif
                                    <div class = "icon1 icon-heart">
                                        <i class = "fa fa-heart-o"></i>
                                    </div>
                                    <ul>
                                        <li class = "w-icon active"><a href = "#" class = "add-cart1">
                                        <i class = "icon_bag_alt"></i></a></li>
                                        <li class = "quick-view"><a href = "shop/product/{{ $product->id }}">+ Quick View</a></li>
                                    </ul>
                                </div>
                                <div class = "pi-text">
                                    <div class = "catagory-name">{{ $product->tag }}</div>
                                    <a href = "shop/product/{{ $product->id }}">
                                        <h5>{{ $product->name }}</h5>
                                        <span style = "display: none">1</span>
                                    </a>
                                    <div class = "product-price">
                                        @if( $product->discount != null )
                                            <h4>${{ $product->discount }}<span>${{ $product->price }}</span></h4>
                                        @else
                                            <h4>${{ $product->price }}</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
{{--                {{ $products->links() }}--}}
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
