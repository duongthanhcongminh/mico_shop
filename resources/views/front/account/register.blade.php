@extends('front.layout.master')

@section('title','Login')

@section('body')


    <section class="login-register">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-3 order-lg-1 img">
                    <img style="max-width: 100%;height: auto" src="front/img/man-large.jpg">
                </div>

                <form action="" method="post"
                    class="col-lg-4 order-1 order-lg-2 information">
                    @csrf
                    <h3>Register an account</h3>
                    <div class="input-box">
                        <div class="input-text">
                            <div id="input4">
                                <input type = "text" placeholder = "Name*" name="name" id="firstname">
                            </div>
                        </div>
                        <div class="input-text">
                            <div id="input5">
                                <input type = "text" placeholder = "Email*" name="email" id="email">
                            </div>
                        </div>
                        <div class="input-text">
                            <div id="input6">
                                <input type = "password" placeholder = "Password*" name="password" id="password">
                            </div>
                        </div>
                        <div class="input-text">
                            <div id="input7">
                                <input type = "password" placeholder = "Re-Password*" name="repassword" id="repassword">
                            </div>
                        </div>
                        <div class="input-text">
                            <div id="input8">
                                <input type = "text" placeholder = "Country*" name="country" id="country">
                            </div>
                        </div>
                        <div class="input-text">
                            <div id="input9">
                                <input type = "text" placeholder = "Street Address*" name="street_address" id="street_address">
                            </div>
                        </div>
                        <div class="input-text">
                            <div id="input10">
                                <input type = "text" placeholder = "Town/city*" name="town_city" id="town_city">
                            </div>
                        </div>
                        <div class="input-text">
                            <div id="input11">
                                <input type = "text" placeholder = "Phone*" name="phone" id="phone">
                            </div>
                        </div>
                    </div>
                    <div class = "input-box register">
                        <button id="bt4" onclick = "return postRegister();" type = "submit">REGISTER</button>
                        <button id="bt5"><a href = "/account/login">LOG IN</a></button>
                    </div>
                </form>

                <div class="col-lg-4 order-3 order-lg-3">

                    @if(session('notification'))
                        <div class="alert alert-warning" role="alert">
                            {{session('notification')}}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
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

@endsection
