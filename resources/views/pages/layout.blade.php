<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from htmldemo.net/hmart/hmart/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 11:19:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hmart - Two</title>
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/font.awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/venobox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Minify Version -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <link rel="stylesheet" href="{{asset('assets/myStyle.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <script src="https://unpkg.com/htmx.org@1.9.12"
            integrity="sha384-ujb1lZYygJmzgSwoxRggbCHcjc0rB2XoQrxeTUQyRjrOnlCoYta87iKBWq3EsdM2"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12/dist/ext/response-targets.js"></script>

</head>

<body hx-ext="response-targets">
<div class="main-wrapper">

    @include('components.header')

    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->
    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <form id="" action="{{route('shop.settings.update',['shop'=>request()->segment(1)])}}" method="post">
                @csrf
                <div class="head">
                    <span class="title">მაღაზიის მონაცემები</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>

                            <div class="flex-column justify-content-center align-middle w-100">
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    მაღაზიის სახელი
                                </label>
                                <input id=""  name="name"
                                       class="form-input"
                                       type="text"
                                       value="{{$shop->name}}"
                                       placeholder="მაღაზიის სახელი"
                                >
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2 w-100">
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    მისამართი
                                </label>
                                <input id=""  name="address"
                                       class="form-input"
                                       type="text"
                                       value="{{$shop->address}}"
                                       placeholder="მისამართი"
                                   >
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2 w-100">
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
                                        <path fill="#0f0" d="M13,42h22c3.866,0,7-3.134,7-7V13c0-3.866-3.134-7-7-7H13c-3.866,0-7,3.134-7,7v22	C6,38.866,9.134,42,13,42z"></path><path fill="#fff" d="M35.45,31.041l-4.612-3.051c-0.563-0.341-1.267-0.347-1.836-0.017c0,0,0,0-1.978,1.153	c-0.265,0.154-0.52,0.183-0.726,0.145c-0.262-0.048-0.442-0.191-0.454-0.201c-1.087-0.797-2.357-1.852-3.711-3.205	c-1.353-1.353-2.408-2.623-3.205-3.711c-0.009-0.013-0.153-0.193-0.201-0.454c-0.037-0.206-0.009-0.46,0.145-0.726	c1.153-1.978,1.153-1.978,1.153-1.978c0.331-0.569,0.324-1.274-0.017-1.836l-3.051-4.612c-0.378-0.571-1.151-0.722-1.714-0.332	c0,0-1.445,0.989-1.922,1.325c-0.764,0.538-1.01,1.356-1.011,2.496c-0.002,1.604,1.38,6.629,7.201,12.45l0,0l0,0l0,0l0,0	c5.822,5.822,10.846,7.203,12.45,7.201c1.14-0.001,1.958-0.248,2.496-1.011c0.336-0.477,1.325-1.922,1.325-1.922	C36.172,32.192,36.022,31.419,35.45,31.041z"></path>
                                    </svg>                                </label>
                                <input  style="max-width: 315px!important"
                                        value="{{$shop->user->mobile}}"
                                        name="mobile" class="form-input mt-2"
                                       type="text" placeholder="საკონტაქტო">

                            </div>


                            <div class="flex-row justify-content-center align-middle mt-2 w-100">
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" width="36" height="36" preserveAspectRatio="xMidYMid"><defs><radialGradient id="a" cx="19.247%" cy="99.465%" r="108.96%" fx="19.247%" fy="99.465%"><stop offset="0%" stop-color="#09F"/><stop offset="60.975%" stop-color="#A033FF"/><stop offset="93.482%" stop-color="#FF5280"/><stop offset="100%" stop-color="#FF7061"/></radialGradient></defs><path fill="url(#a)" d="M128 0C55.894 0 0 52.818 0 124.16c0 37.317 15.293 69.562 40.2 91.835 2.09 1.871 3.352 4.493 3.438 7.298l.697 22.77c.223 7.262 7.724 11.988 14.37 9.054L84.111 243.9a10.218 10.218 0 0 1 6.837-.501c11.675 3.21 24.1 4.92 37.052 4.92 72.106 0 128-52.818 128-124.16S200.106 0 128 0Z"/><path fill="#FFF" d="m51.137 160.47 37.6-59.653c5.98-9.49 18.788-11.853 27.762-5.123l29.905 22.43a7.68 7.68 0 0 0 9.252-.027l40.388-30.652c5.39-4.091 12.428 2.36 8.82 8.085l-37.6 59.654c-5.981 9.489-18.79 11.852-27.763 5.122l-29.906-22.43a7.68 7.68 0 0 0-9.25.027l-40.39 30.652c-5.39 4.09-12.427-2.36-8.818-8.085Z"/></svg>

                                </label>
                                <input style="max-width: 315px!important"
                                        value="{{$shop->messenger}}"
                                        name="messenger" class="form-input mt-2"
                                       type="text" placeholder="ფბ გვერდის მისამართი">


                            </div>

                            <div class="flex-row justify-content-center align-middle mt-2 w-100">
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" fill="url(#a)"
                                         height="40" width="40">
                                        <defs>
                                            <linearGradient x1="50%" x2="50%" y1="97.078%" y2="0%" id="a">
                                                <stop offset="0%" stop-color="#0062E0"/>
                                                <stop offset="100%" stop-color="#19AFFF"/>
                                            </linearGradient>
                                        </defs>
                                        <path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"/>
                                        <path fill="#FFF"
                                              d="m25 23 .8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"/>
                                    </svg>

                                </label>
                                <input  style="max-width: 315px!important"
                                        value="{{$shop->facebook}}"
                                        name="facebook" class="form-input mt-2"
                                        type="text" placeholder="ფბ გვერდის მისამართი">


                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2 w-100">
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    <svg enable-background="new 0 0 1024 1024" height="36" id="Instagram_2_"
                                         version="1.1" viewBox="0 0 1024 1024" width="36" xml:space="preserve"
                                         xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Background">
                                            <linearGradient
                                                    gradientTransform="matrix(0.9397 0.3421 0.3421 -0.9397 276.2042 765.8284)"
                                                    gradientUnits="userSpaceOnUse" id="bg_1_" x1="463.9526"
                                                    x2="-194.4829" y1="-73.1143" y2="711.4479">
                                                <stop offset="0" style="stop-color:#20254C"/>
                                                <stop offset="0.0571" style="stop-color:#29254D"/>
                                                <stop offset="0.1502" style="stop-color:#41234F"/>
                                                <stop offset="0.2679" style="stop-color:#692152"/>
                                                <stop offset="0.4039" style="stop-color:#A01F57"/>
                                                <stop offset="0.5333" style="stop-color:#DA1C5C"/>
                                                <stop offset="0.5924" style="stop-color:#DC255A"/>
                                                <stop offset="0.6889" style="stop-color:#E13D56"/>
                                                <stop offset="0.8106" style="stop-color:#EA654E"/>
                                                <stop offset="0.9515" style="stop-color:#F69C44"/>
                                                <stop offset="1" style="stop-color:#FBB040"/>
                                            </linearGradient>
                                            <circle cx="512.001" cy="512" fill="url(#bg_1_)" id="bg" r="512"/>
                                        </g>
                                        <g id="Instagram_3_">
                                            <circle cx="658.765" cy="364.563" fill="#FFFFFF" r="33.136"/>
                                            <circle cx="512.001" cy="512" fill="none" r="121.412" stroke="#FFFFFF"
                                                    stroke-miterlimit="10" stroke-width="45"/>
                                            <path d="M255.358,612.506c0,91.127,73.874,165,165,165   h183.283c91.127,0,165-73.873,165-165V411.495c0-91.127-73.873-165-165-165H420.358c-91.127,0-165,73.873-165,165V612.506z"
                                                  fill="none" stroke="#FFFFFF" stroke-miterlimit="10"
                                                  stroke-width="45"/>
                                        </g></svg>

                                </label>
                                <input style="max-width: 315px!important"
                                        value="{{$shop->instagram}}"
                                        name="instagram" class="form-input mt-2"
                                        type="text" placeholder="ფბ გვერდის მისამართი">


                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2 w-100">
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    <svg viewBox="0 0 256 180" width="36" height="36" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134Z" fill="red"/><path fill="#FFF" d="m102.421 128.06 66.328-38.418-66.328-38.418z"/></svg>
                                </label>
                                <input style="max-width: 315px!important"
                                        value="{{$shop->youtube}}"
                                        name="youtube" class="form-input mt-2"
                                        type="text" placeholder="ფბ გვერდის მისამართი">


                            </div>
                        </li>

                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons">
                        <button
                                id="changemobile"
                                type="button"
                                style="width: 100%;border-radius: 15px">
                            <a style="border-radius: 15px"
                               class="btn btn-dark btn-hover-primary mt-30px">მობილურის ცვლილება</a>
                        </button>
                    </div>
                    <div class="buttons">
                        <button style="width: 100%;border-radius: 15px">
                            <a style="border-radius: 15px"
                               class="btn btn-dark btn-hover-primary mt-30px">შენახვა</a>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div id="offcanvas-settings" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <form id="settingsform" action="{{route('settings.update',['shop'=>request()->segment(1)])}}" method="post">
                @csrf
                <div class="head">
                    <span class="title">ძირითადი პარამეტრები</span>
                    <button class="offcanvas-close">×</button>
                </div>
                <div class="body customScroll">
                    <ul class="minicart-product-list">
                        <li>
                            <div class="flex-row justify-content-center align-middle">
                                <input id="main_banner_checkbox" style="height: 25px;" name="use_main_banner"
                                       class="form-check-input"
                                       type="checkbox"
                                       @if($shop->settings->first()->use_main_banner==1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    გამოვიყენო მთავარი ბანერი
                                </label>
                            </div>
                            <div class="flex-row justify-content-center align-middle">
                                <input style="height: 25px;" name="use_main_gallery" class="form-check-input  mt-2"
                                       type="checkbox"
                                       @if($shop->settings->first()->use_main_gallery==1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    ვაჩვენო მთავარი გალერეა
                                </label>
                            </div>

                            <div class="flex-row justify-content-center align-middle mt-2">
                                <input style="height: 25px;" name="use_category" class="form-check-input"
                                       type="checkbox"
                                       @if($shop->settings->first()->use_category===1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    პროდუქტის კატეგორიების გამოყენება
                                </label>
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2">
                                <input style="height: 25px;" name="use_slider" class="form-check-input" type="checkbox"
                                       @if($shop->settings->first()->use_slider===1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    პროდუქტების სლაიდერი
                                </label>
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2">
                                <input style="height: 25px;" name="use_faq" class="form-check-input" type="checkbox"
                                       value=""
                                       @if($shop->settings->first()->use_faq===1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    ხშირად დასმული კითხვები
                                </label>
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2">
                                <input style="height: 25px;" name="use_spec" class="form-check-input" type="checkbox"
                                       value=""
                                       @if($shop->settings->first()->use_spec===1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    ვაჩვენო პროდუქტის მახასიათებლები
                                </label>
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2">
                                <input style="height: 25px;" name="use_socials" class="form-check-input" type="checkbox"
                                       value=""
                                       @if($shop->settings->first()->use_socials===1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    ვაჩვენო სოც. გვერდები
                                </label>
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2">
                                <input style="height: 25px;" name="use_service" class="form-check-input" type="checkbox"
                                       value=""
                                       @if($shop->settings->first()->use_service===1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    ვაჩვენო საინფორმაციო ველი
                                </label>
                            </div>
                            <div class="flex-row justify-content-center align-middle mt-2">
                                <input style="height: 25px;" name="use_messenger" class="form-check-input"
                                       type="checkbox" value=""
                                       @if($shop->settings->first()->use_messenger===1)checked="" @endif >
                                <label style="margin-bottom: 0!important;" for="flexCheckChecked">
                                    მესენჯერის გამოყენება
                                </label>
                            </div>

                        </li>

                    </ul>
                </div>
                <div class="foot">
                    <div class="buttons">
                        <button style="width: 100%;border-radius: 15px">
                            <a style="border-radius: 15px"
                               class="btn btn-dark btn-hover-primary mt-30px">შენახვა</a>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img
                                    src="{{asset('')}}assets/images/product-image/1.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Modern Smart Phone</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img
                                    src="{{asset('')}}assets/images/product-image/2.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Bluetooth Headphone</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img
                                    src="{{asset('')}}assets/images/product-image/3.webp" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Smart Music Box</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->
    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="user-panel">
            <ul>
                <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
                <li><a href="my-account.html"><i class="fa fa-user"></i> Account</a></li>
            </ul>
        </div>
        <div class="inner customScroll">
            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li>
                        <a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Inner Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Related Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                    <li><a href="thank-you-page.html">Thank You Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                    </li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                    </li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-gallery-right.html">Product Gallery
                                            Right</a></li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a>
                                    </li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a>
                                    </li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            <li><a href="blog-list.html">Blog List Page</a></li>
                            <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                            <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->
    <!-- Hero/Intro Slider Start -->


    @if($shop->settings->first()->use_main_banner===1)
        @include('components.banners.mainbanner')
    @endif


    {{--==================== Product  DIALOGS  =============================--}}
    @auth
        <div class="d-flex flex-row align-items-center justify-content-center gap-2 mb-5">
            <button data-category-modal STYLE="width: max-content" class="button-31">კატეგორიის
                დამატება
            </button>
            <dialog class="dialog" style="" data-category>
                <div style="position:relative;height: 100%;">

                    <form action="{{route('category.store',['shop'=>request()->segment(1)])}}" method="post">
                        @csrf
                        <input class="form-input" type="text" name="name"
                               placeholder="კატეგორიის დასახელება">

                        <div id="categorydiv"></div>
                        <div class=" d-flex justify-content-center align-items-center mt-5 mb-2">
                            <button STYLE="width: min-content;" type="submit" class="button-31">
                                დამატება
                            </button>
                        </div>
                    </form>
                    <div class="d-flex flex-column justify-content-center align-items-center mb-2">
                        @foreach($shop->categories as $index => $category)
                            <input type="hidden" name="id" id="catid{{$index}}" value="{{$category->id}}">
                            <div class="d-flex  align-items-center justify-content-between mt-2">
                                <p style="display: inline-block;max-width: 290px!important;overflow: hidden">{{$category->name}}</p>
                                <button type="button" STYLE="width: min-content;">
                                    <img style="cursor: pointer!important"
                                         src="{{asset('assets/icons/edit_icon.svg')}}" alt="">
                                </button>
                            </div>
                        @endforeach
                    </div>
                    <div
                            {{--                            style="position: absolute;bottom: 20px;width: 100%;"--}}
                            class="d-flex justify-content-center align-items-center">
                        <button style="width: min-content;" type="button" data-closecat-modal
                                class="button-31">დახურვა
                        </button>
                    </div>
                </div>
            </dialog>

            <button data-open-modal STYLE="width: max-content;" class="button-31">
                პროდუქტის დამატება
            </button>
            <dialog class="dialog" style="" data-modal>
                <div id="producterrors"></div>
                <form style="height: 100%" action="{{route('product.store',['shop'=>request()->segment(1)])}}"
                      method="post">
                    @csrf
                    <input class="form-input" type="text" name="name" placeholder="პროდუქტის სახელი">

                    <input class="form-input" type="text" name="price" placeholder="ფასი">
                    <input class="form-input" type="text" name="SKU" placeholder="კოდი (არასავალდებულო)">

                    {{--                                <input class="form-input" type="text" name="description" placeholder="აღწერა">--}}
                    <textarea style="height: 170px;line-height: 1.2!important;" class="form-input"
                              name="description"
                              placeholder="აღწერა"></textarea>

                    <input type="hidden" name="image1" data-converted-newprodimg
                           class="newproductimage">
                    <input type="hidden" name="image2" data-converted-newprodimg2
                           class="newproductimage2">
                    <input type="hidden" name="image3" data-converted-newprodimg3
                           class="newproductimage3">
                    <input type="hidden" name="image4" data-converted-newprodimg4
                           class="newproductimage4">

                    <template id="specstemplate">
                        <div class="d-flex justify-content-between mb-2">
                            <input style="padding:0 10px;display:  inline-block;max-width: 120px;margin-bottom:0"
                                   class="form-input " type="text" name="new_spec[]"
                                   placeholder="სპეციფიკაცია">
                            <input style="padding:0 10px;display: inline-block;max-width: 150px;margin-bottom:0"
                                   class="form-input" type="text" name="new_value[]"
                                   placeholder="ინფორმაცია">
                            <button style="display: inline-block;padding: 0;width: 50px" type="button"
                                    class="button-31 removeButton">
                                <svg style="pointer-events: none;" xmlns="http://www.w3.org/2000/svg"
                                     width="1em" height="1em" viewBox="0 0 24 24">
                                    <path fill="white" d="M19 12.998H5v-2h14z"/>
                                </svg>
                            </button>
                        </div>
                    </template>
                    <div class="d-flex justify-content-between mb-2">

                        <input disabled style="display: inline-block;max-width: 120px;margin-bottom:0"
                               class="form-input disabledinput" type="text" placeholder="სპეციფიკაცია">
                        <input disabled style="display: inline-block;max-width: 150px;margin-bottom:0"
                               class="form-input disabledinput" type="text" placeholder="ინფორმაცია">
                        <button id="addspec" style="display: inline-block;padding: 0;width: 50px"
                                type="button"
                                class="button-31">
                            <svg style="pointer-events: none" xmlns="http://www.w3.org/2000/svg"
                                 width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="white" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="d-flex flex-column mb-2" id="specsdiv">

                    </div>
                    @if($shop->settings->first()->use_category)
                        <select id="category_id" name="category" class="form-input line-height-1">
                            @foreach($shop->categories as $index => $category)
                                <option name="category_id"
                                        value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    @endif
                    <div class="d-flex flex-column align-items-start mb-2">
                        <div class=" mt-1">
                            <input style="height: 25px;" name="main_page" class="form-check-input"
                                   type="checkbox" checked="">
                            <label style="margin-bottom: 0!important;margin-top: 7px"
                                   for="flexCheckChecked">
                                დაემატოს საერთო გალერეაში
                            </label>
                        </div>
                        <div class=" mt-1">
                            <input style="height: 25px;" name="category_gallery" class="form-check-input"
                                   type="checkbox" checked="">
                            <label style="margin-bottom: 0!important;margin-top: 7px"
                                   for="flexCheckChecked">
                                დაემატოს კატეგორიის გალერეაში
                            </label>
                        </div>
                    </div>
                    <input style="display: none" type="file" data-newprod-image
                           onchange="convertToWebP()">
                    <input style="display: none" type="file" data-newprod-image2
                           onchange="convertToWebP2()">
                    <input style="display: none" type="file" data-newprod-image3
                           onchange="convertToWebP3()">
                    <input style="display: none" type="file" data-newprod-image4
                           onchange="convertToWebP4()">
                    <div class="d-flex flex-column gap-2 align-items-center justify-content-center mt-1">
                        <div style="width: max-content"
                             class="d-flex flex-column justify-content-around align-items-center">
                            <button style="width: max-content" type="button" data-product-newopload
                                    class="button-31">ფოტო 1
                            </button>
                            <br>
                            <span id="newfilename"></span>
                        </div>
                        <div style="width: max-content"
                             class="d-flex flex-column justify-content-around align-items-center">
                            <button style="width: max-content" type="button" data-product-newopload2
                                    class="button-31">ფოტო 2
                            </button>
                            <br>
                            <span id="newfilename2"></span>
                        </div>
                        <div style="width: max-content" class="d-flex flex-column justify-content-center">
                            <button style="width: max-content" type="button" data-product-newopload3
                                    class="button-31">ფოტო 3
                            </button>
                            <br>
                            <span id="newfilename3"></span>
                        </div>
                        <div style="width: max-content"
                             class="d-flex flex-column justify-content-around align-items-center">
                            <button style="width: max-content" type="button" data-product-newopload4
                                    class="button-31">ფოტო 4
                            </button>
                            <br>
                            <span id="newfilename4"></span>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-around align-items-center  mt-5 mb-2">
                        <button STYLE="width: min-content;margin-right: 20px" type="button"
                                data-close-modal class="button-31">დახურვა
                        </button>
                        <button STYLE="width: min-content;margin-left: 20px" type="submit"
                                class="button-31">დამატება
                        </button>
                    </div>

                </form>


            </dialog>
        </div>
    @endauth

    {{--====================   Main Banner DIALOG =============================--}}

    @auth
        <div style="width: 100%!important;" class="row">
            <div style="padding-right: 0!important;width: 100%!important;" class="col-12">
                <div style="width: 100%!important;" class="section-title text-center">
                    {{--                       Create Product modal--}}
                    <dialog class="mainbannerdialog" id="mainbannermodal" style="" data-mainbanner-modal>
                        <form style="height: 100%"
                              action="{{route('main.banner.store',['shop'=>request()->segment(1)])}}" method="post">
                            @csrf
                            <input class="form-input" type="text" name="bannertext" placeholder="სასურველი სათაური">

                            <input type="hidden" class="mainbannerhidden" name="mainbanner_image"
                                   data-converted-mainbanner>


                            <input style="display: none" type="file" data-mainbanner-image
                                   onchange="convertToWebPmain()">

                            <div class="d-flex flex-column gap-2 align-items-center justify-content-center mt-1">
                                <div style="width: max-content">
                                    <button style="width: max-content" type="button" data-mainbanner-newopload
                                            class="button-31">ფოტო
                                    </button>
                                    <br>
                                    <span id="mainbannerfilename"></span>
                                </div>
                            </div>
                            <div class="flex-row align-items-center mt-5">
                                <button STYLE="width: min-content;margin-right: 20px" type="button"
                                        data-mainbanner-close class="button-31">დახურვა
                                </button>
                                <button STYLE="width: min-content;margin-left: 20px" type="submit"
                                        class="button-31">
                                    დამატება
                                </button>
                            </div>
                        </form>


                    </dialog>
                    <button
                            data-mainbanner-open STYLE="width: max-content" class="button-31 mt-2">მთავარი ბანერის
                        დამატება
                    </button>
                    {{--                     Edit Dialog with HTMX--}}
                    <dialog class="editmainbannerdialog" id="editmainbannermodal" style="" data-mainbanner-editmodal>

                    </dialog>


                </div>
            </div>
        </div>
    @endauth
    {{--====================   Change Mobile DIALOG =============================--}}

    @auth
        <dialog style="height: 500px!important;text-align: center" class="dialog" data-mobile-dialog>
            <form  action="{{route('mobile.store')}}" method="post">
                @csrf
                <label for="">მობილური</label>
                <br>

                <input style="width: 150px" value="{{auth()->user()->mobile}}"  class="form-input" type="text" name="mobile" placeholder="">
                <br>
                <br>
                <div class="flex-row align-items-center mb-2">
                    <button  STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">კოდის მიღება</button>
                </div>
            </form>

            <form  style="margin-top: 20px" action="{{route('confirm.mobile2')}}" method="post">
                @csrf
                <label for="">სმს კოდი</label>
                <br>

                <input style="width: 150px"  class="form-input" type="text" name="code" placeholder="">
                <br>

                <div class="flex-row align-items-center mb-2">
                    <button  STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">დადასტურება</button>
                </div>
            </form>
            <br> <br>
            <button id="closechangemobile"  STYLE="width:  max-content;border-radius: 15px;" type="submit" class="button-31 ">გაუქმება</button>
            {{--    <div style="margin-top: 20px" class="flex-row align-items-cente">--}}
            {{--        <button  STYLE="width: max-content;border-radius: 15px" type="submit" class="button-31 ">ნომრის შეცვლა</button>--}}
            {{--    </div>--}}


        </dialog>
    @endauth
    <a href="#" id="shareFacebook">Facebook</a>
    <!-- Feature product area start -->
    @yield('index')
    @yield('products')
    @yield('single-product')
    <!-- Feature product area End -->

    {{--        =========================================================================================--}}


    <!-- Footer Area Start -->
    @include('components.footer')
    <!-- Footer Area End -->
</div>


<!--Product Quick View Modal -->

@if(empty($shop->products))
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/zoom-image/1.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/zoom-image/2.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/zoom-image/3.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/zoom-image/4.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/zoom-image/5.webp')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/small-image/1.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/small-image/2.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/small-image/3.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/small-image/4.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                             src="{{asset('assets/images/product-image/small-image/5.webp')}}" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>სმარტფონი </h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">₾ 20.90</li>
                                    </ul>
                                </div>
                                {{--                                <div class="pro-details-rating-wrap">--}}
                                {{--                                    <div class="rating-product">--}}
                                {{--                                        <i class="fa fa-star"></i>--}}
                                {{--                                        <i class="fa fa-star"></i>--}}
                                {{--                                        <i class="fa fa-star"></i>--}}
                                {{--                                        <i class="fa fa-star"></i>--}}
                                {{--                                        <i class="fa fa-star"></i>--}}
                                {{--                                    </div>--}}
                                {{--                                    <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>--}}
                                {{--                                </div>--}}
                                <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmll
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip exet commodo consequat. Duis
                                    aute irure dolor</p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>კოდი:</span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>კატეგორია: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">სმარტ მოწყობილობები </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="specs">
                                    <p class="mb-1"><span>Weight</span> 400 g</p>
                                    <p class="mb-1"><span>Dimensions</span>10 x 10 x 15 cm</p>
                                    <p class="mb-1"><span>Materials</span> 60% cotton, 40% polyester</p>
                                    <p class="mb-1"><span>Other Info</span> American heirloom jean shorts pug seitan
                                        letterpress</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" id="quickviewtarget">

                </div>
            </div>
        </div>
    </div>

@endif



<!-- Global Vendor, plugins JS -->
<!-- JS Files
============================================ -->
<script src="{{asset('assets/js/custom-htmx.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
{{--    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>--}}
<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
{{--    <script src="{{asset('assets/js/plugins/jquery.countdown.min.js')}}"></script>--}}
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollUp.js')}}"></script>
<script src="{{asset('assets/js/plugins/venobox.min.js')}}"></script>
{{--    <script src="{{asset('assets/js/plugins/jquery-ui.min.js')}}"></script>--}}
<script src="{{asset('assets/js/plugins/mailchimp-ajax.js')}}"></script>

<!-- Minify Version -->
<!-- <script src="assets/js/vendor.min.js"></script>
<script src="assets/js/plugins.min.js"></script>
<script src="assets/js/main.min.js"></script> -->

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('assets/js/main.js')}}"></script>


<script src="{{asset('assets/js/webp.createProduct.js')}}"></script>
<script src="{{asset('assets/js/webp.createmainbanner.js')}}"></script>
<script src="{{asset('assets/js/sitesettings.js')}}"></script>


<script>

    // editMain Banner Modal
    let editmainbannermodal = document.querySelectorAll("[data-mainbanner-editopen]")


    editmainbannermodal.forEach(el => {
            el.addEventListener('click', () => {
                document.querySelector("[data-mainbanner-editmodal]").showModal()
                document.body.style.overflow = 'hidden';
            })
        }
    )


    // Main Banner Modal
    let mainbannermodal = document.querySelector("[data-mainbanner-open]")
    let closebanner = document.querySelector("[data-mainbanner-close]")

    closebanner.addEventListener('click', () => {
        document.querySelector("[data-mainbanner-modal]").close()
        document.body.style.overflow = 'auto';
    })


    mainbannermodal.addEventListener('click', () => {
        document.querySelector("[data-mainbanner-modal]").showModal()
        document.body.style.overflow = 'hidden';

    })


    // Category Modal
    let categorymodal = document.querySelector("[data-category-modal]")
    let closecat = document.querySelector("[data-closecat-modal]")

    categorymodal.addEventListener('click', () => {

        document.querySelector("[data-category]").showModal()
        document.body.style.overflow = 'hidden';


    })
    closecat.addEventListener('click', () => {
        document.querySelector("[data-category]").close()
        document.body.style.overflow = 'auto';

    })


    //  New Product Modal
    let openmodal = document.querySelectorAll("[data-open-modal]")
    let closemodal = document.querySelectorAll("[data-close-modal]")

    openmodal.forEach(el => {
        el.addEventListener('click', () => {
            document.querySelector("[data-modal]").showModal()
            document.body.style.overflow = 'hidden';
        })
    })


    closemodal.forEach(el => {
        el.addEventListener('click', () => {
            document.querySelector("[data-modal]").close()
            document.body.style.overflow = 'auto';
        })
    })


    // Edit Modal

    let openedit = document.querySelectorAll("[data-open-edit]")


    openedit.forEach(el => {
        el.addEventListener('click', () => {
            document.querySelector("[data-edit-modal]").showModal()
            document.body.style.overflow = 'hidden';

        })
    })


    // Change Mobile

    const openmobile = document.getElementById('changemobile')
    const closechangemobile = document.getElementById('closechangemobile')


    openmobile.addEventListener('click', () => {
        document.querySelector("[data-mobile-dialog]").showModal()
        document.body.style.overflow = 'hidden';
    })

    closechangemobile.addEventListener("click", () => {
        document.querySelector("[data-mobile-dialog]").close()
        document.body.style.overflow = 'auto';
    })



</script>


{{-- add Specs when creating product--}}
<script>
    document
        .getElementById("addspec")
        .addEventListener("click", function () {
            var template = document.getElementById("specstemplate");
            var clonedTemplate = document.importNode(template.content, true);
            document.getElementById("specsdiv").appendChild(clonedTemplate);
        });
    document.getElementById("specsdiv").addEventListener("click", function (e) {
        if (e.target.classList.contains("removeButton")) {
            console.log('clicked')
            e.target.parentNode.remove();
        }
    });

</script>

<script>
    const productUrl = window.location.href;

        document.getElementById('shareFacebook').setAttribute('href', `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(productUrl)}`);
        document.getElementById('shareMessenger').setAttribute('href', `fb-messenger://share?link=${encodeURIComponent(productUrl)}&app_id=YOUR_APP_ID`);

</script>

</body>


<!-- Mirrored from htmldemo.net/hmart/hmart/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 11:19:41 GMT -->
</html>