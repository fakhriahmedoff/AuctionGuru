<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Japanese Auction Sheet Translation Services</title>

    <meta name="keywords" content="WebSite Template">
    <meta name="description" content="Japanese Auction Sheet Translation Services">
    <meta name="author" content="Japanese Auction Sheet Translation Services">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicons/9466-img-favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicons/4684-img-apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
          href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap"
          rel="stylesheet" type="text/css">

@include('frontend.layout.partials.styles')

<!-- Head Libs -->
    <script src="{{asset('frontend')}}/js/modernizr-modernizr.min.js"></script>

</head>
<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">

<div class="body">
    <div class="notice-top-bar bg-dark">
        <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
        </button>
        <!--				<div  class="container">-->
        <!--					<div class="row justify-content-center py-2">-->
        <!--						<div class="col-9 col-md-12 text-center">-->
        <!--							<p class="text-color-light mb-0">Get 10% extra OFF on Porto Summer Sale - Use <strong>PORTOSUMMER</strong> coupon - <strong><a href="demo-product-landing-checkout.html" class="text-color-light text-decoration-none">Shop Now!</a></strong></p>-->
        <!--						</div>-->
        <!--					</div>-->
        <!--				</div>-->
    </div>
    <header id="header" class="header-transparent"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 1, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body header-border-bottom overflow-visible">
            <div class="header-container container">
                <div class="header-row py-3">
                    <div class="header-column flex-row w-auto">
                        <div class="header-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('frontend')}}/images/product-landing-logo.png" alt="Porto" width="123"
                                     height="32">
                            </a>
                        </div>
                    </div>
                    <div class="header-column w-100 ps-lg-5">
                        <div class="header-nav w-100 p-0">
                            <div
                                    class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 justify-content-start w-100">
                                <div
                                        class="header-nav-main header-nav-main-arrows header-nav-main-effect-2 header-nav-main-sub-effect-1 w-100">
                                    <nav class="collapse w-100">
                                        <ul class="nav nav-pills flex-column flex-lg-row w-100" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item " data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="70"

                                                   href="@if(Request::route()->getName() != 'home') {{route('home')}}@endif#home">Home</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="70"
                                                   href="@if(Request::route()->getName() != 'home') {{route('home')}}@endif#pricing">Pricing</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="70"
                                                   href="@if(Request::route()->getName() != 'home') {{route('home')}}@endif#about-us">About
                                                    us</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="70"
                                                   href="@if(Request::route()->getName() != 'home') {{route('home')}}@endif#we-provide">What
                                                    we provide</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item" data-hash data-hash-offset="0"
                                                   data-hash-offset-lg="90"
                                                   href="@if(Request::route()->getName() != 'home') {{route('home')}}@endif#reviews">Reviews</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item @if(Request::route()->getName() == 'orderPage') active @endif" href="{{route('orderPage')}}">Order
                                                    Now</a>
                                            </li>
                                            <li class="dropdown ms-lg-auto no-line-effect">
                                                {{--                                                <a href="#" class="dropdown-item dropdown-toggle">USD</a>--}}
                                                {{--                                                <ul class="dropdown-menu">--}}
                                                {{--                                                    <li><a href="#" class="dropdown-item">EURO</a></li>--}}
                                                {{--                                                    <li><a href="#" class="dropdown-item">BRL</a></li>--}}
                                                {{--                                                </ul>--}}
                                            </li>
                                            <li class="dropdown no-line-effect">
                                                <a href="#" class="dropdown-item dropdown-toggle">ENG</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" class="dropdown-item"><img
                                                                    src="{{asset('frontend')}}/images/img-blank.gif"
                                                                    class="flag flag-us" alt="English">
                                                            English</a></li>
                                                    <li><a href="#" class="dropdown-item"><img
                                                                    src="{{asset('frontend')}}/images/img-blank.gif"
                                                                    class="flag flag-es"
                                                                    alt="Espa&ntilde;ol"> Espa&ntilde;ol</a></li>
                                                    <li><a href="#" class="dropdown-item"><img
                                                                    src="{{asset('frontend')}}/images/img-blank.gif"
                                                                    class="flag flag-fr"
                                                                    alt="Fran&ccedil;aise"> Fran&ccedil;aise</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    <div class="header-column flex-row w-auto">--}}
                    {{--                        <div class="header-nav-features ps-0 ms-1">--}}
                    {{--                            <div--}}
                    {{--                                class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">--}}
                    {{--                                <a href="#" class="header-nav-features-toggle">--}}
                    {{--                                    <img src="{{asset('frontend')}}/images/icons-icon-cart-big.svg" height="30" alt=""--}}
                    {{--                                         class="header-nav-top-icon-img">--}}
                    {{--                                    <span class="cart-info">--}}
                    {{--												<span class="cart-qty">1</span>--}}
                    {{--											</span>--}}
                    {{--                                </a>--}}
                    {{--                                <div class="header-nav-features-dropdown" id="headerTopCartDropdown">--}}
                    {{--                                    <ol class="mini-products-list">--}}
                    {{--                                        <li class="item">--}}
                    {{--                                            <a href="#" title="Camera X1000" class="product-image"><img--}}
                    {{--                                                    src="{{asset('frontend')}}/images/product-landing-product-carousel-1.jpg"--}}
                    {{--                                                    alt="Porto Headphone"></a>--}}
                    {{--                                            <div class="product-details">--}}
                    {{--                                                <p class="product-name">--}}
                    {{--                                                    <a href="#">Porto Headphone </a>--}}
                    {{--                                                </p>--}}
                    {{--                                                <p class="qty-price">--}}
                    {{--                                                    1X <span class="price">$350</span>--}}
                    {{--                                                </p>--}}
                    {{--                                                <a href="#" title="Remove This Item" class="btn-remove"><i--}}
                    {{--                                                        class="fas fa-times"></i></a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </li>--}}
                    {{--                                    </ol>--}}
                    {{--                                    <div class="totals">--}}
                    {{--                                        <span class="label">Total:</span>--}}
                    {{--                                        <span class="price-total"><span class="price">$350</span></span>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="actions">--}}
                    {{--                                        <a class="btn btn-primary w-100" href="demo-product-landing-checkout.html">Checkout</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <button class="btn header-btn-collapse-nav ms-3" data-bs-toggle="collapse"--}}
                    {{--                                data-bs-target=".header-nav-main nav">--}}
                    {{--                            <i class="fas fa-bars"></i>--}}
                    {{--                        </button>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </header>
