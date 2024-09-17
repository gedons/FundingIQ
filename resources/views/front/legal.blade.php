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
           .card {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .card h2, .card h3 {
            text-align: center;
            color: #333;
        }
        .card ul {
            padding-left: 20px;
        }
        .card ul li {
            margin-bottom: 10px;
        }
        .card p, .card li {
            color: #555;
        }
        .card-section {
            margin-bottom: 30px;
        }
        .card-footer {
            text-align: center;
            margin-top: 30px;
        }
        .card-footer p {
            font-size: 14px;
            color: #777;
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
        <section class="faq-legal-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <h2>Legal Document</h2>
                            <p>Effective Date:12/07/12 </p>

                            <div class="card-section">
                                <h3>1. Terms of Service</h3>
                                <p><strong>1.1 Introduction</strong><br>Welcome to [Your Website Name] (the "Site"). These Terms of Service ("Terms") govern your access to and use of our services, including our website and any other products or services we may offer (collectively, the "Services"). By accessing or using the Services, you agree to comply with and be bound by these Terms.</p>

                                <p><strong>1.2 Use of Services</strong><br>By using our Services, you represent and warrant that you are at least 18 years of age or have reached the age of majority in your jurisdiction. You agree to use our Services in compliance with all applicable laws, rules, and regulations.</p>

                                <p><strong>1.3 Account Registration</strong><br>You may need to create an account to access certain Services. You are responsible for maintaining the confidentiality of your account information, including your password. You agree to provide accurate and up-to-date information during registration and keep it updated at all times.</p>

                                <p><strong>1.4 Prohibited Activities</strong><br>You agree not to engage in the following prohibited activities while using the Site or Services:
                                    <ul>
                                        <li>Violating any local, state, national, or international law or regulation.</li>
                                        <li>Attempting to interfere with or disrupt the Services, servers, or networks connected to the Services.</li>
                                        <li>Engaging in fraudulent or deceptive practices.</li>
                                    </ul>
                                </p>

                                <p><strong>1.5 Modification of Terms</strong><br>We reserve the right to update or modify these Terms at any time. Changes will be effective immediately upon posting. Your continued use of the Services following any changes indicates your acceptance of the revised Terms.</p>
                            </div>

                            <div class="card-section">
                                <h3>2. Privacy Policy</h3>
                                <p><strong>2.1 Information Collection</strong><br>We are committed to protecting your privacy. By using our Services, you agree that we may collect, use, and store certain personal information as described in this Privacy Policy.</p>

                                <p><strong>2.2 Data We Collect</strong><br>We may collect the following types of information:
                                    <ul>
                                        <li><strong>Personal Information:</strong> Includes name, email address, phone number, payment details, etc., that you provide during registration or transactions.</li>
                                        <li><strong>Usage Data:</strong> Information about how you use our Services, such as IP addresses, browser type, pages viewed, and other diagnostic data.</li>
                                    </ul>
                                </p>

                                <p><strong>2.3 How We Use Your Data</strong><br>We use your data to:
                                    <ul>
                                        <li>Provide, maintain, and improve our Services.</li>
                                        <li>Process transactions and send you related information.</li>
                                        <li>Communicate with you regarding updates, promotions, or customer support.</li>
                                    </ul>
                                </p>

                                <p><strong>2.4 Data Protection</strong><br>We implement a variety of security measures to ensure the protection of your personal information. However, no transmission method over the internet is entirely secure, and we cannot guarantee its absolute security.</p>

                                <p><strong>2.5 Third-Party Services</strong><br>We may share your information with third-party service providers to facilitate our Services. These third parties are obligated to keep your information confidential and secure.</p>
                            </div>

                            <div class="card-section">
                                <h3>3. Disclaimer</h3>
                                <p><strong>3.1 General Disclaimer</strong><br>The information provided on this Site is for general informational purposes only. We make no representations or warranties of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, or completeness of any information on the Site.</p>

                                <p><strong>3.2 Financial Disclaimer</strong><br>[Your Website Name] is not responsible for any financial loss, profit, or damage incurred as a result of transactions carried out on our platform. Trading in financial markets involves risk, and you should not engage in trading unless you fully understand the nature of the risks involved.</p>

                                <p><strong>3.3 No Guarantees</strong><br>We do not guarantee any specific outcomes regarding the performance of investments or transactions on our platform. Past performance is not indicative of future results, and you are solely responsible for any investment decisions you make.</p>
                            </div>

                            <div class="card-section">
                                <h3>4. Refund Policy</h3>
                                <p><strong>4.1 General Refund Policy</strong><br>All transactions, including funding and withdrawals, are final and non-refundable once completed, except in cases where refunds are required by law or agreed upon as part of a specific promotional offer.</p>

                                <p><strong>4.2 Chargebacks</strong><br>Unauthorized chargebacks will be subject to investigation and may result in the suspension of your account. If you believe a transaction was unauthorized, please contact our support team immediately.</p>
                            </div>

                            <div class="card-section">
                                <h3>5. Governing Law</h3>
                                <p>These Terms and any disputes arising out of or related to the Services will be governed by and construed in accordance with the laws of [Your Jurisdiction], without regard to its conflict of law provisions.</p>
                            </div>

                            <div class="card-section">
                                <h3>6. Contact Information</h3>
                                <p>If you have any questions about these Terms, the Privacy Policy, or any other legal matters related to our Services, please contact us at:</p>
                                <p><strong>Email:</strong> support@fundingiqsignals.com</p>
                                {{-- <p><strong>Address:</strong> [Insert Address]</p> --}}
                            </div>
                    </div>
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


