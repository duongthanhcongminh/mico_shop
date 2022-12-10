@extends('front.layout.master')

@section('title','Product')

@section('body')
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
<!--Breadcrumb -->
<div class = "container">
    <div class = "row">
        <div class = "col-lg-12">
            <div class = "breadcrumb-text">
                <a href = "index.html">Home</a>
                <span>Cart</span>
            </div>
        </div>
    </div>
</div>

<!-- Main -->
<section class = "cart">
    <div class = "container">
        <div class = "row bill-header">
            <div class = "col-lg-8">
                <h2>Shopping Cart</h2>
            </div>
            <div class = "col-lg-4">
                <span class = "policies">
                    <a href = "returnpolicy.html">Return Policy</a>
                    <a href = "terms.html">Terms and Conditions</a>
                </span>
            </div>
        </div>
        <div class = "row mt-3 ">
            <div class = "col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>IMAGE</th>
                                <th class="">PRODUCT NAME</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carts as $cart)
                                <tr data-rowID = "{{ $cart->rowId }}">
                                    <td class="cart-pic first-row"><img style="height: 170px;" src="/front/img/products/{{ $cart->options->images[0]->path }}" alt=""></td>
                                    <td class="first-row">
                                        <h5>{{ $cart->name }}</h5>
                                    </td>
                                    <td class="p-price first-row">{{ number_format($cart->price,2) }}</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{ $cart->qty }}" data-rowid="{{ $cart->rowId }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">{{ number_format($cart->price * $cart->qty,2) }}</td>
                                    <td class="close-td first-row">
                                        <i onclick="removeCart('{{ $cart->rowId }}')" class="ti-close"></i>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-buttons">
                            <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                            <a href="#" class="primary-btn up-cart">Update cart</a>
                        </div>
                        <div class="discount-coupon">
                            <h6>Discount Codes</h6>
                            <form action="#" class="coupon-form">
                                <input type="text" placeholder="Enter your codes">
                                <button type="submit" class="site-btn coupon-btn">Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span>${{ $total }}</span></li>
                                <li class="cart-total">Total <span>${{ $subtotal }}</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
