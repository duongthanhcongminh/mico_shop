<!doctype html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin - MicoShop</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description"
          content="This is an example dashboard (CodeLean) created using build-in elements and components.">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link href="./dashboard/main.css" rel="stylesheet">
    <link href="./dashboard/my_style.css" rel="stylesheet">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
                <span>
                    <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
        </div>
        <div class="app-header__content">
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a href="/admin/account/info" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="front/img/user/{{ Auth::user()->avatar ?? 'default-avatar.png' }}"
                                             alt="">
                                    </a>

                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading"> {{ Auth::user()->name }} </div>
                                <div class="widget-subheading"> {{ App\Utilities\Constant::$user_level[Auth::user()->level] }} </div>
                            </div>
                            <div class="widget-content-right header-user-info ml-3">
                                <a href="./admin/logout" class="btn-pill btn-shadow btn btn-focus">Logout</a>
{{--                                <button type="button"--}}
{{--                                        class="btn-shadow p-1 btn btn-primary btn-sm">--}}
{{--                                    <i class="fa fa-sign-out-alt pr-1 pl-1" aria-hidden="true"></i>--}}
{{--                                </button>--}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                    <span>
                        <button type="button"
                                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Menu</li>

                        <li class="mm-active">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-plugin"></i>Management
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                @if(Auth::user()->level == 0)
                                    <li>
                                        <a href="./admin/order" class="{{ (request()->segment(2)=='order') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/product" class="{{ (request()->segment(2)=='product') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Product
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/category" class="{{ (request()->segment(2)=='category') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/brand" class="{{ (request()->segment(2)=='brand') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Brand
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/user" class="{{ (request()->segment(2)=='user') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>User
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/blog" class="{{ (request()->segment(2)=='blog') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Blog
                                        </a>
                                    </li>
                                @elseif(Auth::user()->level == 1)
                                    <li>
                                        <a href="./admin/order" class="{{ (request()->segment(2)=='order') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/product" class="{{ (request()->segment(2)=='product') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Product
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/category" class="{{ (request()->segment(2)=='category') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/brand" class="{{ (request()->segment(2)=='brand') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Brand
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/user" class="{{ (request()->segment(2)=='user') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>User
                                        </a>
                                    </li>
                                @elseif(Auth::user()->level == 3)
                                    <li>
                                        <a href="./admin/order" class="{{ (request()->segment(2)=='order') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/product" class="{{ (request()->segment(2)=='product') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Product
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/category" class="{{ (request()->segment(2)=='category') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/brand" class="{{ (request()->segment(2)=='brand') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Brand
                                        </a>
                                    </li>
                                @elseif(Auth::user()->level == 2)
                                    <li>
                                        <a href="./admin/order" class="{{ (request()->segment(2)=='order') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./admin/product" class="{{ (request()->segment(2)=='product') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Product
                                        </a>
                                    </li>
                                @else()
                                    <li>
                                        <a href="./admin/order" class="{{ (request()->segment(2)=='order') ? 'mm-active':'' }}">
                                            <i class="metismenu-icon"></i>Order
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="app-main__outer">

            <!-- Main -->
                @yield('body')


<script src="./dashboard/assets/scripts/jquery-3.2.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="./dashboard/assets/scripts/main.js"></script>
<script type="text/javascript" src="./dashboard/assets/scripts/my_script.js"></script>
</body>

</html>
