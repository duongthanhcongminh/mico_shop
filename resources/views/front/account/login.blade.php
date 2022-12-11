@extends('front.layout.master')

@section('title','Login')

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
<section class = "login-register">
    <div class = "container">
        <div class = "row">
            <div class = "col-lg-4 order-3 order-lg-1 img">
                <img style="object-fit: cover" src="front/img/man-large.jpg">
            </div>
            <div class = "col-lg-4 order-1 order-lg-2 login-box">

                @if(session('notification'))
                    <div class="alert alert-warning" role="alert">
                        {{session('notification')}}
                    </div>
                @endif

                    <form action="" method="post" id="f1" >
                    @csrf
                    <h3>Sign in</h3>
                    <div class="input-box">
                        <div class = "input-text">
                            <div id="input1">
                                <input type = "text" placeholder = "Email" id="email" name="email">
                            </div>
                            <div id="errorEmail"></div>
                        </div>
                        <div class = "input-text">
                            <div id="input2">
                                <input type = "password" placeholder = "Password" id="password" name="password">
                            </div>
                        </div>

                        <div id="button1">
                            <button type="submit" id = "bt1" onclick="return check();">LOG IN</button>
                        </div>
                        <span class = "line-items">
                                    <span class = "underline1"></span>
                                    <p>OR</p>
                                    <span class = "underline2"></span>
                                </span>
                        <div class="button2">
                            <button class="fb" href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="presentation" aria-hidden="true" focusable="false" style="height: 20px; width: 20px; display: block; fill: currentcolor;"><defs><path id="a" d="M.001 0H24v23.854H.001z"></path></defs><g fill="none" fill-rule="evenodd"><mask id="b" fill="#fff"><use xlink:href="#a"></use></mask><path d="M24 12c0-6.627-5.373-12-12-12S0 5.373 0 12c0 5.99 4.388 10.954 10.125 11.854V15.47H7.078V12h3.047V9.356c0-3.007 1.792-4.668 4.533-4.668 1.312 0 2.686.234 2.686.234v2.953H15.83c-1.491 0-1.956.925-1.956 1.874V12h3.328l-.532 3.469h-2.796v8.385C19.612 22.954 24 17.99 24 12" fill="#1877F2" mask="url(#b)"></path><path d="M16.671 15.469L17.203 12h-3.328V9.749c0-.949.465-1.874 1.956-1.874h1.513V4.922s-1.374-.234-2.686-.234c-2.741 0-4.533 1.66-4.533 4.668V12H7.078v3.469h3.047v8.385a12.09 12.09 0 003.75 0V15.47h2.796" fill="#FFF"></path></g></svg>
                                <div class="button-title"><p>FACEBOOK</p></div></button>
                            <button class="ins" href="#"><svg class="instagram-logo" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="20" height="100"
                                                              viewBox="0 0 551.034 551.034" style="enable-background:new 0 0 551.034 551.034;" xml:space="preserve">
		<path class="logo" id="XMLID_17_" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722 c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156 C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156 c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722 c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z"/>

                                    <path id="XMLID_81_" fill="#555" d="M275.517,133C196.933,133,133,196.933,133,275.516 s63.933,142.517,142.517,142.517S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6 c-48.095,0-87.083-38.988-87.083-87.083s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083 C362.6,323.611,323.611,362.6,275.517,362.6z"/>

                                    <circle id="XMLID_83_" fill="#555" cx="418.306" cy="134.072" r="34.149"/>

</svg>
                                <div class="button-title"><p>INSTAGRAM</p></div></button>
                        </div>
                        <div class="button2">
                            <button class="ggl" href="#"><svg viewBox="0 0 18 18" role="presentation" aria-hidden="true" focusable="false" style="height: 20px; width: 20px; display: block;"><g fill="none" fill-rule="evenodd"><path d="M9 3.48c1.69 0 2.83.73 3.48 1.34l2.54-2.48C13.46.89 11.43 0 9 0 5.48 0 2.44 2.02.96 4.96l2.91 2.26C4.6 5.05 6.62 3.48 9 3.48z" fill="#EA4335"></path><path d="M17.64 9.2c0-.74-.06-1.28-.19-1.84H9v3.34h4.96c-.1.83-.64 2.08-1.84 2.92l2.84 2.2c1.7-1.57 2.68-3.88 2.68-6.62z" fill="#4285F4"></path><path d="M3.88 10.78A5.54 5.54 0 0 1 3.58 9c0-.62.11-1.22.29-1.78L.96 4.96A9.008 9.008 0 0 0 0 9c0 1.45.35 2.82.96 4.04l2.92-2.26z" fill="#FBBC05"></path><path d="M9 18c2.43 0 4.47-.8 5.96-2.18l-2.84-2.2c-.76.53-1.78.9-3.12.9-2.38 0-4.4-1.57-5.12-3.74L.97 13.04C2.45 15.98 5.48 18 9 18z" fill="#34A853"></path><path d="M0 0h18v18H0V0z"></path></g></svg>
                                <div class="button-title"><p>GOOGLE</p></div></button>
                            <button class="apple" href="#"> <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="presentation" aria-hidden="true" focusable="false" style="height: 20px; width: 20px; display: block; fill: currentcolor;"><path d="m13.3 2.1a5.1 5.1 0 0 1 3.8-2.1 5.1 5.1 0 0 1 -1.2 3.8 4.1 4.1 0 0 1 -3.6 1.7 4.5 4.5 0 0 1 1-3.4zm-5 3.7c-2.8 0-5.8 2.5-5.8 7.3 0 4.9 3.5 10.9 6.3 10.9 1 0 2.5-1 4-1s2.6.9 4 .9c3.1 0 5.3-6.4 5.3-6.4a5.3 5.3 0 0 1 -3.2-4.9 5.2 5.2 0 0 1 2.6-4.5 5.4 5.4 0 0 0 -4.7-2.4c-2 0-3.5 1.1-4.3 1.1-.9 0-2.4-1-4.2-1z"></path></svg>
                                <div class="button-title"><p>APPLE</p></div></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class = "col-lg-4 order-2 order-lg-3 register-box">
                <h3>Register</h3>
                <div class = "input-box register">
                    <p>It's easy to create an account.</p>
                    <p>Register to enjoy faster check out, get updated on exclusive offers and promotions and our latest events.</p>
                    <button id="bt3"><a href = "./account/register">REGISTER</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

