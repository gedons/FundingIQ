<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Join our forex broker platform to trade a wide range of currency pairs with competitive spreads and high leverage. Enjoy secure transactions, real-time market data, and 24/7 customer support. Start trading today!">
<title>FIQsignals - Trade Securely and Efficiently</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/signals1.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<style>
    .marquee {
        overflow: hidden;
        white-space: nowrap;
        box-sizing: border-box;
        animation: marquee 15s linear infinite;
    }

    @keyframes marquee {
        0% { transform: translate(100%, 0); }
        100% { transform: translate(-100%, 0); }
    }

    .marquee span {
        display: inline-block;
        padding-right: 50px;
    }

    .popup {
        position: fixed;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        background-color: white;
        border: 2px solid green;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: none;
        z-index: 1000;
        transition: all 0.9s ease;
        }
    .popup.show {
        display: block;
        opacity: 1;
        transform: translateY(-50%) translateY(-20px);
    }
</style>
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper home_2">


        <!-- preloader -->
        {{-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="f" class="letters-loading">
                                f
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="Q" class="letters-loading">
                                Q
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="g" class="letters-loading">
                                g
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- preloader end -->
        <div class="popup" id="investment-popup"></div>


        <!-- main header -->
        <header class="main-header header-style-two">
            <!-- header-top -->
            <div class="header-top">
                <div class="outer-container">
                    <div class="left-column">
                        <div class="language-box">
                            <div class="icon-box"><img src="assets/images/icons/icon-29.png" alt=""></div>
                            <div class="select-box">
                                <select class="wide">
                                   <option data-display="English">English</option>
                                   <option value="1">Chinese</option>
                                   <option value="2">Hindi</option>
                                   <option value="3">Spanish</option>
                                   <option value="4">Turky</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area">
                            <div class="logo-box">
                                <figure class="logo"><a href="/"><img src="assets/images/signals1.png"  alt=""></a></figure>
                            </div>
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index.html">Home</a></li>
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">Investment Plan</a></li>
                                        <li><a href="index.html">Faq</a>
                                        <li><a href="index.html">Legal</a></li>
                                        <li><a href="index.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            @if (Auth::check())
                                <div class="clients-box">
                                    <div class="icon-box">
                                        <img src="assets/images/icons/icon-31.png" alt="">
                                    </div>
                                    @if (Auth::user()->role === 'admin')
                                        <a href="{{ url('/admin/dashboard') }}">Admin Dashboard<i class="flaticon-right-down"></i></a>
                                    @elseif (Auth::user()->role === 'trader')
                                        <a href="{{ url('/trader/dashboard') }}">Trader Dashboard<i class="flaticon-right-down"></i></a>
                                    @else
                                        <a href="{{ url('/home') }}">Client Portal<i class="flaticon-right-down"></i></a>
                                    @endif
                                </div>
                            @else
                                <div class="btn-box">
                                    <a href="/register" class="theme-btn btn-one"><span>Open an A/c</span></a>
                                </div>
                            @endif                        
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="menu-area">
                            <div class="logo-box">
                                <figure class="logo"><a href="index.html"><img src="assets/images/signals2.png"  alt=""></a></figure>
                            </div>
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            @if (Auth::check())
                            <div class="clients-box">
                                <div class="icon-box">
                                    <img src="assets/images/icons/icon-31.png" alt="">
                                </div>
                                @if (Auth::user()->role === 'admin')
                                    <a href="{{ url('/admin/dashboard') }}">Admin Dashboard<i class="flaticon-right-down"></i></a>
                                @elseif (Auth::user()->role === 'trader')
                                    <a href="{{ url('/trader/dashboard') }}">Trader Dashboard<i class="flaticon-right-down"></i></a>
                                @else
                                    <a href="{{ url('/home') }}">Client Portal<i class="flaticon-right-down"></i></a>
                                @endif
                                </div>
                            @else
                                <div class="btn-box">
                                    <a href="/register" class="theme-btn btn-one"><span>Open an A/c</span></a>
                                </div>
                            @endif                        
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/signals2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        {{-- <li>Chicago 12, Melborne City, USA</li> --}}
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">customercare@fundingiqsignals.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-style-two -->
        <section class="banner-style-two">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none nav-style-one">
                <div class="slide-item">
                    <div class="bg-layer" style="background-image:url(assets/images/banner/banner-5.jpg)"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-7 col-lg-12 col-md-12 content-column">
                                <div class="content-box">
                                    <div class="video-btn">
                                        <a href="#" class="lightbox-image" data-caption=""><i class="flaticon-play"></i>FIQsingnals</a>
                                    </div>
                                    <h2>Trade <br />with Confidence</h2>
                                    <p>Access real-time market data, execute trades instantly,<br />and manage your portfolio with our user-friendly platform.</p>
                                    <div class="btn-box">
                                        <a href="/register" class="theme-btn btn-one"><span>Get Started</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="bg-layer" style="background-image:url(assets/images/banner/banner-6.jpg)"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-7 col-lg-12 col-md-12 offset-xl-5 content-column">
                                <div class="content-box">
                                    <div class="video-btn">
                                        <a href="#" class="lightbox-image" data-caption=""><i class="flaticon-play"></i>FIQsingnals</a>
                                    </div>
                                    <h2>Competitive<br />and High Leverage </h2>
                                    <p>Whether you're a beginner or an experienced trader,<br /> our platform offers flexibility and control.</p>
                                    <div class="btn-box">
                                        <a href="/register" class="theme-btn btn-one"><span>Get Started</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="bg-layer" style="background-image:url(assets/images/banner/banner-7.jpg)"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-7 col-lg-12 col-md-12 content-column">
                                <div class="content-box">
                                    <div class="video-btn">
                                        <a href="#" class="lightbox-image" data-caption=""><i class="flaticon-play"></i>FIQsingnals</a>
                                    </div>
                                    <h2>Secure<br />Transactions</h2>
                                    <p>Your funds are protected with industry-leading security protocols, <br />ensuring fast deposits and withdrawals.</p>
                                    <div class="btn-box">
                                        <a href="/register" class="theme-btn btn-one"><span>Get Started</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-style-two end -->


        <!-- funfact-section -->
        <section class="funfact-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Interesting Numbers</span>
                    <h2><span>Achievements</span> of FIQsignal</h2>
                </div>
                <div class="inner-box">
                    <div class="funfact-block-one">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                            <div class="shape-3" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="49">0</span><span class="small-text">M</span>
                        </div>
                        <p>Active Traders</p>
                        <div class="icon-box"><img src="assets/images/icons/icon-32.png" alt=""></div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                            <div class="shape-3" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="3.7">0</span><span class="small-text">B</span>
                        </div>
                        <p>Market Capitalisation</p>
                        <div class="icon-box"><img src="assets/images/icons/icon-33.png" alt=""></div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                            <div class="shape-3" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="73.4">0</span><span class="small-text">M</span>
                        </div>
                        <p>Total Revenue</p>
                        <div class="icon-box"><img src="assets/images/icons/icon-34.png" alt=""></div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                            <div class="shape-3" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="09">0</span><span class="small-text">M</span>
                        </div>
                        <p>Awards Won</p>
                        <div class="icon-box"><img src="assets/images/icons/icon-35.png" alt=""></div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                            <div class="shape-3" style="background-image: url(assets/images/shape/shape-11.png);"></div>
                        </div>
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="1500" data-stop="99">0</span><span>+</span>
                        </div>
                        <p>Offices & Branches</p>
                        <div class="icon-box"><img src="assets/images/icons/icon-36.png" alt=""></div>
                    </div>
                </div>

            </div>
        </section>
        <!-- funfact-section end -->


        <!-- pricing-style-two -->
        <section class="pricing-style-two bg-color-2 sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="title-box">
                    <div class="sec-title light">
                        <span class="sub-title">Trading</span>
                        <h2>Top <span>Pricing</span> List in Market</h2>
                    </div>
                    {{-- <div class="chat-box">
                        <figure class="thumb-box"><img src="assets/images/resource/chat-1.jpg" alt=""></figure>
                        <div class="link-box"><a href="contact.html"><span>Live Chat With <br />Expert</span></a></div>
                    </div> --}}
                </div>
                <div class="row  clearfix marquee bg-light p-2">
                    <div class="col-lg-3 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="currency-box">
                                    <ul class="list-item">
                                        <li><img src="assets/images/icons/flag-1.png" alt="">eur</li>
                                        <li><img src="assets/images/icons/flag-2.png" alt="">usd</li>
                                    </ul>
                                </div>
                                <div class="content-box">
                                    <ul class="list-item clearfix">
                                        <li>Sell<span>Buy</span></li>
                                        <li class="red">$1.06199<span class="yellow">$1.06185</span></li>
                                        <li>Spread <br /><span class="green">-0.14</span><a href="#">Trade</a></li>
                                    </ul>
                                </div>
                                <div class="graph-box">
                                    <div class="graph"><img src="assets/images/icons/graph-1.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="currency-box">
                                    <ul class="list-item">
                                        <li><img src="assets/images/icons/flag-2.png" alt="">usd</li>
                                        <li><img src="assets/images/icons/flag-3.png" alt="">jpy</li>
                                    </ul>
                                </div>
                                <div class="content-box">
                                    <ul class="list-item clearfix">
                                        <li>Sell<span>Buy</span></li>
                                        <li class="yellow">$1.22195<span class="red">$1.22199</span></li>
                                        <li>Spread <br /><span class="green">+0.04</span><a href="#">Trade</a></li>
                                    </ul>
                                </div>
                                <div class="graph-box">
                                    <div class="graph"><img src="assets/images/icons/graph-2.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="currency-box">
                                    <ul class="list-item">
                                        <li><img src="assets/images/icons/flag-4.png" alt="">gbp</li>
                                        <li><img src="assets/images/icons/flag-2.png" alt="">usd</li>
                                    </ul>
                                </div>
                                <div class="content-box">
                                    <ul class="list-item clearfix">
                                        <li>Sell<span>Buy</span></li>
                                        <li class="yellow">$0.65982<span class="red">$0.65994</span></li>
                                        <li>Spread <br /><span class="green">+0.12</span><a href="#">Trade</a></li>
                                    </ul>
                                </div>
                                <div class="graph-box">
                                    <div class="graph"><img src="assets/images/icons/graph-3.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="currency-box">
                                    <ul class="list-item">
                                        <li><img src="assets/images/icons/flag-5.png" alt="">aud</li>
                                        <li><img src="assets/images/icons/flag-2.png" alt="">cad</li>
                                    </ul>
                                </div>
                                <div class="content-box">
                                    <ul class="list-item clearfix">
                                        <li>Sell<span>Buy</span></li>
                                        <li class="red">$14.785<span class="yellow">$13.625</span></li>
                                        <li>Spread <br /><span class="green">-0.14</span><a href="#">Trade</a></li>
                                    </ul>
                                </div>
                                <div class="graph-box">
                                    <div class="graph"><img src="assets/images/icons/graph-4.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-style-two end -->


        <!-- account-style-two -->
        <section class="account-style-two sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <span class="sub-title">Account Types</span>
                    <h2>FIQsignal Trading <span>Accounts</span></h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 account-block">
                        <div class="account-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="upper-box centred">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <h3>Basic a/c</h3>
                                    <p>Perfect for beginners looking to start trading with a low minimum deposit</p>
                                    <div class="icon-box"><img src="assets/images/icons/icon-37.png" alt=""></div>
                                </div>
                                <div class="content-box">
                                    <ul class="list-item clearfix">
                                        <li>Initial Deposit <span>$100</span></li>
                                        <li>Leverage <span>Up to 1:100</span></li>
                                        <li>Order Execution <span>Standard execution</span></li>
                                        <li>Spread <span>Fixed from 3 pips</span></li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <div class="link-box"><a href="/register"><span>Open Your Account</span></a></div>
                                    {{-- <div class="more-link"><a href="/register">More Info</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 account-block">
                        <div class="account-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="recommended-box">
                                <h6>Most Recommended</h6>
                            </div>
                            <div class="inner-box">
                                <div class="upper-box centred">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <h3>Standard a/c</h3>
                                    <p>Designed for regular traders who need more flexibility and tighter spreads.</p>
                                    <div class="icon-box"><img src="assets/images/icons/icon-38.png" alt=""></div>
                                </div>
                                <div class="content-box">
                                    <ul class="list-item clearfix">
                                        <li>Initial Deposit <span>$500</span></li>
                                        <li>Leverage <span>Up to 1:200</span></li>
                                        <li>Order Execution <span>Fast execution</span></li>
                                        <li>Spread <span>Fixed from 1.5 pips</span></li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <div class="link-box"><a href="/register"><span>Open Your Account</span></a></div>
                                    {{-- <div class="more-link"><a href="/register">More Info</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 account-block">
                        <div class="account-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="upper-box centred">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                                    <h3>Premium a/c</h3>
                                    <p>Perfect for experienced traders who require the best trading conditions</p>

                                    <div class="icon-box"><img src="assets/images/icons/icon-37.png" alt=""></div>
                                </div>
                                <div class="content-box">
                                    <ul class="list-item clearfix">
                                        <li>Initial Deposit <span>$2000</span></li>
                                        <li>Leverage <span>Up to 1:500</span></li>
                                        <li>Order Execution<span>Priority execution</span></li>
                                        <li>Spread <span>Fixed from 0.5 pips</span></li>
                                    </ul>
                                </div>
                                <div class="lower-box">
                                    <div class="link-box"><a href="/register"><span>Open Your Account</span></a></div>
                                    {{-- <div class="more-link"><a href="/register">More Info</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account-style-two end -->



        <!-- chooseus-style-two -->
        <section class="chooseus-style-two sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-20.png);"></div>
            <figure class="image-layer"><img src="assets/images/resource/chooseus-1.png" alt=""></figure>
            <div class="auto-container">
                <div class="sec-title centred light">
                    <span class="sub-title">Why FIQsignals</span>
                    <h2>Reason For <span>FIQsignals</span></h2>
                </div>
                <div class="inner-box">
                    <div class="left-column">
                        <div class="single-item">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-16.png);"></div>
                            <div class="icon-box">
                                <div class="icon"><img src="assets/images/icons/icon-40.png" alt=""></div>
                            </div>
                            <div class="title-text"><h3>Accurate Predictions<span>01</span></h3></div>
                            <p>Leverage our advanced algorithms for precise forex predictions.</p>
                        </div>
                        <div class="single-item">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-17.png);"></div>
                            <div class="title-text"><h3>User-Friendly Interface<span>03</span></h3></div>
                            <p>Experience a clean and intuitive platform for easy navigation.</p>
                            <div class="icon-box">
                                <div class="icon"><img src="assets/images/icons/icon-41.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="single-item">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                            <div class="icon-box">
                                <div class="icon"><img src="assets/images/icons/icon-40.png" alt=""></div>
                            </div>
                            <div class="title-text"><h3>Reliable Support<span>02</span></h3></div>
                            <p>Access 24/7 customer support for any questions or issues.</p>
                        </div>
                        <div class="single-item">
                            <div class="shape" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                            <div class="title-text"><h3>Real-Time Alerts<span>04</span></h3></div>
                            <p>Make informed decisions quickly with real-time notifications.</p>
                            <div class="icon-box">
                                <div class="icon"><img src="assets/images/icons/icon-41.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-style-two end -->


        <!-- location-section -->
        <section class="location-section sec-pad">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="sec-title">
                                    <span class="sub-title">Get in Touch</span>
                                    <h2>Support in <br />Multi <span>Language</span></h2>
                                </div>
                                <div class="text-box">
                                    <p>We can assure you high-quality certified translations of your brokerage documents in multiple languages!</p>
                                    {{-- <a href="#" class="theme-btn"><span>Read More</span></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 location-column">
                            <div class="location-inner">
                                <div class="map" style="background-image: url(assets/images/icons/map-1.png);"></div>
                                <div class="location-box">
                                    <div class="single-location"><a href="https://www.google.com/maps" target="_blank"><img src="assets/images/icons/location-1.png" alt=""></a></div>
                                    <div class="single-location"><a href="https://www.google.com/maps" target="_blank"><img src="assets/images/icons/location-1.png" alt=""></a></div>
                                    <div class="single-location"><a href="https://www.google.com/maps" target="_blank"><img src="assets/images/icons/location-1.png" alt=""></a></div>
                                    <div class="single-location"><a href="https://www.google.com/maps" target="_blank"><img src="assets/images/icons/location-1.png" alt=""></a></div>
                                    <div class="single-location"><a href="https://www.google.com/maps" target="_blank"><img src="assets/images/icons/location-1.png" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                            <div class="form-inner">
                                <form action="https://azim.hostlin.com/Bullion/contact.html" method="post">
                                    <div class="form-group">
                                        <div class="icon"><img src="assets/images/icons/icon-45.png" alt=""></div>
                                        <input type="email" name="email" placeholder="customercare@fundingiqsignals.com" required>
                                        <button type="submit"><i class="flaticon-right-down"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 link-column">
                            <div class="single-link">
                                <a href="faq.html">Faq’s</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- location-section end -->

        <!-- trade-style-two -->
        <section class="pricing-style-two bg-color-2 sec-pad">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
            <div class="auto-container">
                <div class="title-box">
                    <div class="sec-title light">
                        <h2>Trade <span>Deposits</span> and Withdrawals</h2>
                    </div>
                </div>
                <div class="container wow fadeInUp mt-5" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="row">
                        <div class="col-md-6">

                            <!-- Tabs with icons on Card -->
                            <div class="card card-nav-tabs">
                                <div class="alert alert-success">
                                    <h3><i class="fa fa-plus" aria-hidden="true"></i> Trade Deposits</h3>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="deposit">
                                            <div class="table-responsive" style="height:400px; overflow-y:auto; overflow-x:auto;">
                                                <marquee direction="up" height="100%">
                                                    <table class="table" style="background-color: #000;">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Status</th>
                                                                <th class="text-center">Amount(USD)</th>
                                                                <th class="text-center">Wallet</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="color: white">
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$10,000.00</td>
                                                                <td class="text-center">
                                                                    3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$51,000.00</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$24,100.00</td>
                                                                <td class="text-center">
                                                                    f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$4,000.00</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$500</td>
                                                                <td class="text-center">
                                                                    00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$240,000</td>
                                                                <td class="text-center">
                                                                    b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$17,000</td>
                                                                <td class="text-center">
                                                                    1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$51,000</td>
                                                                <td class="text-center">
                                                                    6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$21,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$6,000</td>
                                                                <td class="text-center">
                                                                    797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$9,000</td>
                                                                <td class="text-center">
                                                                    f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$23,000</td>
                                                                <td class="text-center">
                                                                    2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$51,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$5,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">5,000</td>
                                                                <td class="text-center">
                                                                    15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$18,000</td>
                                                                <td class="text-center">
                                                                    66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$2,500</td>
                                                                <td class="text-center">
                                                                    ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$9,000</td>
                                                                <td class="text-center">
                                                                    376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$43,000</td>
                                                                <td class="text-center">
                                                                    aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$10,000.00</td>
                                                                <td class="text-center">
                                                                    3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$51,000.00</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$24,100.00</td>
                                                                <td class="text-center">
                                                                    f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$4,000.00</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$500</td>
                                                                <td class="text-center">
                                                                    00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$240,000</td>
                                                                <td class="text-center">
                                                                    b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$17,000</td>
                                                                <td class="text-center">
                                                                    1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$51,000</td>
                                                                <td class="text-center">
                                                                    6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$21,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$6,000</td>
                                                                <td class="text-center">
                                                                    797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$9,000</td>
                                                                <td class="text-center">
                                                                    f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$23,000</td>
                                                                <td class="text-center">
                                                                    2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$51,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$5,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">5,000</td>
                                                                <td class="text-center">
                                                                    15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$18,000</td>
                                                                <td class="text-center">
                                                                    66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$2,500</td>
                                                                <td class="text-center">
                                                                    ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$9,000</td>
                                                                <td class="text-center">
                                                                    376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$43,000</td>
                                                                <td class="text-center">
                                                                    aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </marquee>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs with icons on Card -->
                        </div>
                        <div class="col-md-6">

                            <!-- Tabs with icons on Card -->
                            <div class="card card-nav-tabs">
                                <div class="alert alert-danger">
                                    <h3><i class="fa fa-minus" aria-hidden="true"></i> Latest Withdraws</h3>
                                </div>
                                <div class="card-content">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="deposit">
                                            <div class="table-responsive" style="height:400px; overflow-y:auto; overflow-x:auto;">
                                                <marquee direction="down" height="100%">
                                                    <table class="table" style="width: 100%; background-color:#000;">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Status</th>
                                                                <th class="text-center">Amount(USD)</th>
                                                                <th class="text-center">Wallet</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="color: white">
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$10,000.00</td>
                                                                <td class="text-center">
                                                                    3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$51,000.00</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$24,100.00</td>
                                                                <td class="text-center">
                                                                    f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$4,000.00</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$500</td>
                                                                <td class="text-center">
                                                                    00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$240,000</td>
                                                                <td class="text-center">
                                                                    b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$17,000</td>
                                                                <td class="text-center">
                                                                    1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$51,000</td>
                                                                <td class="text-center">
                                                                    6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$21,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$6,000</td>
                                                                <td class="text-center">
                                                                    797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$9,000</td>
                                                                <td class="text-center">
                                                                    f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$23,000</td>
                                                                <td class="text-center">
                                                                    2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$51,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$5,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">5,000</td>
                                                                <td class="text-center">
                                                                    15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$18,000</td>
                                                                <td class="text-center">
                                                                    66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$2,500</td>
                                                                <td class="text-center">
                                                                    ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$9,000</td>
                                                                <td class="text-center">
                                                                    376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$43,000</td>
                                                                <td class="text-center">
                                                                    aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$10,000.00</td>
                                                                <td class="text-center">
                                                                    3a17c5984af22cd7a443f14457841b3b19a51ea75a30e18bc6a82e4f8732dbca
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$51,000.00</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$24,100.00</td>
                                                                <td class="text-center">
                                                                    f007e92cc9f82ba9c8c40c481eec7315fa9abcd85e7249a6cb57e38a2cf22d3e
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$4,000.00</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$500</td>
                                                                <td class="text-center">
                                                                    00db85ef40da34f3ea76aa60f0b2053eec2d90121e450791c18d8edbfedde6f1
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$240,000</td>
                                                                <td class="text-center">
                                                                    b21a418a44ed8b56118facefe7aa8d26541dff811b8a8ca65cfa1346d62c5c48
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$17,000</td>
                                                                <td class="text-center">
                                                                    1e652d2899a1d058a20041a9faaeb5dc009101ca412ff09c387e6b281bd1db8b
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$51,000</td>
                                                                <td class="text-center">
                                                                    6a49e66a66f75e72e6bd383ac798792af204a6693708912ad0d48e363a2ab7a7
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$21,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$6,000</td>
                                                                <td class="text-center">
                                                                    797ba039291417fdbdb411ea0a102d23090cde9ac7799ff605f40b5db484891d
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$9,000</td>
                                                                <td class="text-center">
                                                                    f0b66ce7a33bbc63bf50050beaf52be71709c359aa1d344bb90f943690485661
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$23,000</td>
                                                                <td class="text-center">
                                                                    2083e95ada3c584471ba5982e16c5dc2a6e464d3c170555ea8c708668be9383b
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$51,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$5,000</td>
                                                                <td class="text-center">
                                                                    8a2b9781aa4995625af7d2b008f020ac74e7e0d2a599e93ed995f7c3bc2be9f2
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">5,000</td>
                                                                <td class="text-center">
                                                                    15c3a97edbd606bd1e455aa2875677f5c6cd2b804e9054e898f640d313e39781
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$18,000</td>
                                                                <td class="text-center">
                                                                    66c13496e9d53a2402fd49bbe91df298164472679cc868bbfebbabb4844d784c
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$2,500</td>
                                                                <td class="text-center">
                                                                    ce972a6b82135fcba0890ea0c8668bdddf782fd580672daa6616c3b1af40ca9f
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn
                                                btn-success btn-sm"><span class="btn-label"><i class="fa
                                                fa-check" aria-hidden="true"></i></span>Confirmed</button></td>
                                                                <td class="text-center">$9,000</td>
                                                                <td class="text-center">
                                                                    376e809b02e6ef044f6d5cf5b72111f25f3c3e16a93dce865a178e2e0f5c484c
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><button class="btn btn-warning btn-sm"><span class="btn-label"><i class="fa fa-warning" aria-hidden="true"></i></span>Pending</button>
                                                                </td>
                                                                <td class="text-center">$43,000</td>
                                                                <td class="text-center">
                                                                    aa14458f8082d9c4265ef491ca0b5d4801c16bbf7a4aece7b70a0b4824ffdfea
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </marquee>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs with icons on Card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trade-style-two end -->

        <!-- clients-style-two -->
        <section class="clients-style-two centred">
            <div class="auto-container">
                <div class="sec-title">
                    <span class="sub-title">Our Partners</span>
                    <h2><span>Partners</span> Around the World </h2>
                </div>
                <ul class="clients-logo-list clearfix">
                    <li><figure class="clients-box"><a href="#"><img src="assets/images/clients/clients-6.png" alt=""></a></figure></li>
                    <li><figure class="clients-box"><a href="#"><img src="assets/images/clients/clients-7.png" alt=""></a></figure></li>
                    <li><figure class="clients-box"><a href="#"><img src="assets/images/clients/clients-8.png" alt=""></a></figure></li>
                    <li><figure class="clients-box"><a href="#"><img src="assets/images/clients/clients-9.png" alt=""></a></figure></li>
                    <li><figure class="clients-box"><a href="#"><img src="assets/images/clients/clients-10.png" alt=""></a></figure></li>
                    <li><figure class="clients-box"><a href="#"><img src="assets/images/clients/clients-11.png" alt=""></a></figure></li>
                    <li><figure class="clients-box"><a href="#"><img src="assets/images/clients/clients-12.png" alt=""></a></figure></li>
                    <li><figure class="clients-box"><a href="#"><img src="assets/images/clients/clients-13.png" alt=""></a></figure></li>
                </ul>
            </div>
        </section>
        <!-- clients-style-two end -->



        <!-- cta-section -->
        <section class="cta-section centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-22.png);"></div>
            <span class="big-text">fIQsignals</span>
            <div class="auto-container">
                <div class="inner-box">
                    <h2>A 360 Trading Experience</h2>
                    <p>Experience comprehensive trading with our all-in-one platform that <br />offers real-time data, advanced analytics, and seamless execution.</p>
                    <a href="#" class="theme-btn"><span>Read More</span></a>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- footer-style-two -->
        <footer class="footer-style-two">
            <div class="widget-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="#"><img src="assets/images/signals2.png" alt=""></a></figure>
                                <div class="widget-content">
                                    <div class="year-box">
                                        <h4>Since</h4>
                                        <h2>2010</h2>
                                        {{-- <div class="link-box">
                                            <a href="#"><span>More In Timeline</span></a>
                                        </div> --}}
                                    </div>
                                    <div class="text-box">
                                        <p>Experience comprehensive trading with our all-in-one platform that <br />offers real-time data, advanced analytics, and seamless execution.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_60">
                                <div class="widget-title">
                                    <h3>Company</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Investment Plan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_80">
                                <div class="widget-title">
                                    <h3>Useful links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">Faq</a></li>
                                        <li><a href="#">Legal</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-two">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <div class="guide-box">
                            <h5><a href="#">Trade <br />with FIQsignals</a></h5>
                        </div>
                        <div class="copyright-box">
                            <p>&copy; <span>2024 <a href="#">FIQsignals</a>.</span> All Rights Reserved.</p>
                            <ul class="footer-nav clearfix">
                                <li><a href="#">Legal Notice</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <ul class="social-links clearfix">
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-square-pinterest"></i></a></li>
                            <li class="scroll-to-target" data-target="html"><i class="flaticon-up-arrow"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-style-two end -->

    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        function showPopup(message) {
            const popup = $('#investment-popup');
            popup.text(message).addClass('show');
            setTimeout(() => {
                popup.removeClass('show');
            }, 3000);
        }

        function fetchRandomPopup() {
            $.get('/random-popup', function(data) {
                const message = `Someone from ${data.country} has ${data.action} $${data.amount}`;
                showPopup(message);
            });
        }

        // Fetch random investment every 5 seconds
        setInterval(fetchRandomPopup, 5000);
    </script>

</body><!-- End of .page_wrapper -->

</html>
