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
        animation: marquee 30s linear infinite;
    }

    @keyframes marquee {
        0% { transform: translate(100%, 0); }
        100% { transform: translate(-100%, 0); }
    }

    .marquee span {
        display: inline-block;
        padding-right: 50px;
    }

    .price-change {
        font-weight: bold;
    }

    .price-change.rise {
        color: green; /* Green for rise */
    }

    .price-change.fall {
        color: red; /* Red for fall */
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
        <div class="loader-wrap">
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
        </div>

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
                                        <li><a href="{{route('front')}}">Home</a></li>
                                        <li><a href="{{route('front.about')}}">About Us</a></li>
                                        <li><a href="{{route('front.plans')}}">Investment Plan</a></li>
                                        <li><a href="{{route('front.faq')}}">Faq</a>
                                        <li class="current"><a href="{{route('front.legal')}}">Legal</a></li>
                                        <li><a href="{{route('front.contact')}}">Contact</a></li>
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
                            <nav class="main-menu clearfix mt-4">
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
                <div class="nav-logo"><a href="/"><img src="assets/images/signals2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        {{-- <li>Chicago 12, Melborne City, USA</li> --}}
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">customercare@fundingiqsignals.com</a></li>
                    </ul>
                </div>
                {{-- <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div> --}}
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="line-box">
              <div class="line-1"></div>
              <div class="line-2"></div>
            </div>
            <div class="auto-container">
              <div class="content-box d-flex flex-column">
                <h1 class="text-center mt-4">Legal</h1>
                <p class="text-center">Legal process below</p>
                <ul class="bread-crumb clearfix">
                  <li><a href="{{route('front')}}">Home</a></li>
                  <li><a href="{{route('front.about')}}">Legal</a></li>
                </ul>
              </div>
            </div>
          </section>
        <!-- page-title end -->

        <!-- faq-page-section -->
        <section class="faq-page-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-box"><i class="flaticon-plus"></i></div>
                                    <span>01</span>
                                    <h4>What services does your platform offer?</h4>
                                    <p>Our platform provides a comprehensive range of financial services, including secure funding and withdrawal transactions, real-time trading of cryptocurrency pairs, and detailed investment management.</p>
                                </div>
                                <div class="acc-content current">
                                    <div class="text">
                                        <p> We cater to both individual and institutional clients, ensuring seamless and efficient transactions through our user-friendly interface.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"><i class="flaticon-plus"></i></div>
                                    <span>02</span>
                                    <h4> How can I verify my KYC (Know Your Customer) information?</h4>
                                    <p>To verify your KYC information, log in to your account and navigate to the "Profile" section. There, you will find an option to upload your KYC documents (such as an ID, passport, or utility bill).</p>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p> After uploading, our team will review your documents. You will be notified via email once your KYC is approved or if additional information is needed.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"><i class="flaticon-plus"></i></div>
                                    <span>03</span>
                                    <h4>What should I do if I encounter an issue with a transaction?</h4>
                                    <p>If you encounter any issues with a transaction, please contact our support team immediately. You can reach us via the "Contact Us" page on our website or by emailing support@fundingiqsignals.com</p>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>Provide as much detail as possible about the issue, including transaction IDs and any error messages. Our team will investigate and resolve the issue as quickly as possible.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"><i class="flaticon-plus"></i></div>
                                    <span>04</span>
                                    <h4>How long does it take to process a funding transaction?</h4>
                                    <p>Funding transactions are typically processed within 1-2 business days. However, processing times may vary depending on the payment method and any additional verification requirements.</p>
                                </div>
                                <div class="acc-content">
                                    <div class="text">
                                        <p>We will notify you via email once your funding transaction has been completed or if there are any issues.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-page-section end -->

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
                                        <li><a href="{{route('front')}}">Home</a></li>
                                        <li><a href="{{route('front.about')}}">About Us</a></li>
                                        <li><a href="{{route('front.plans')}}">Investment Plan</a></li>
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
                                        <li><a href="{{route('front.faq')}}">Faq</a></li>
                                        <li><a href="{{route('front.legal')}}">Legal</a></li>
                                        <li><a href="{{route('front.contact')}}">Contact</a></li>
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


</body><!-- End of .page_wrapper -->

</html>


