
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Greenbuds">
        <title>Premindustries</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="{{ asset('assets/img/logo_sep.ico') }}" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('assets/img/prem-touch-icon-57x57-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('assets/img/prem-touch-icon-72x72-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('assets/img/prem-touch-icon-144x144-precomposed.png') }}">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('assets/img/prem-touch-icon-144x144-precomposed.png') }}">

        <!-- GOOGLE WEB FONT -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" as="fetch" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
        <script>
        !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap",r="__3perf_googleFonts_c2536";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
        </script>

        <!-- BASE CSS -->
        <link href="{{ asset('assets/css/bootstrap.custom.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="{{ asset('assets/css/home_1.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/checkout.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cart.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/account.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/slider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/about.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/product_page.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/listing.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/faq.css') }}" rel="stylesheet">

        @livewireStyles

    </head>

    <body>

        <div id="page">

        <header class="version_2">
            <div class="layer"></div><!-- Mobile menu overlay mask -->
            <div class="main_header">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-2 col-lg-3 d-lg-flex align-items-center">
                            <div id="logo">
                                <a href="/"><img src="{{ asset('assets/img/permlogo.png') }}" alt="" width="100" height="35"></a>
                            </div>
                        </div>
                        <nav class="col-xl-8 col-lg-7">
                            <a class="open_close" href="javascript:void(0);">
                                <div class="hamburger hamburger--spin">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </a>
                            <!-- Mobile menu button -->
                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="/">HOME</a>
                                    </li>
                                    <li>
                                        <a href="/about">COMPANY</a>
                                   </li>
                                    <li>
                                        <a href="/products">PRODUCTS</a>
                                    </li>
                                    <li>
                                        <a href="/usesinskyfruit" >USES IN SKYFRUIT</a>
                                    </li>
                                    <li>
                                        <a href="/media">MEDIA</a>
                                    </li>
                                    <li>
                                        <a href="/health-tips">HEALTH TIPS</a>
                                    </li>
                                    <li>
                                        <a href="/contact" >CONTACT US</a>
                                    </li>
                                </ul>
                            </div>
                            <!--/main-menu -->
                        </nav>
                        <div class="col-xl-2 col-lg-2 d-lg-flex align-items-center justify-content-end text-right">
                            <a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94 423-23-221</strong></a>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /main_header -->

            <div class="main_nav Sticky">
                <div class="container">
                    <div class="row small-gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <nav class="categories">
                                <ul class="clearfix">
                                    <li><span>
                                            <a href="#">
                                                <span class="hamburger hamburger--spin">
                                                    <span class="hamburger-box"> </span>
                                                </span>
                                                PERMINDUSTRIES
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                            <div class="custom-search-input">
                                <input type="text" placeholder="Search Sky Fruit Products">
                                <button type="submit"><i class="header-icon_search_custom"></i></button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-3">
                            <ul class="top_tools">
                                <li>
                                    <div class="dropdown dropdown-cart">
                                        <a href="/cart" class="cart_bt"><strong>2</strong></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li>
                                                    <a href="product-detail-1.html">
                                                        <figure><img src="{{ asset('assets/img/products/product_placeholder_square_small.jpg') }}" data-src="{{ asset('assets/img/products/shoes/thumb/1.jpg') }}" alt="" width="50" height="50" class="lazy"></figure>
                                                        <strong><span>1x Armor Air x Fear</span>$90.00</strong>
                                                    </a>
                                                    <a href="#0" class="action"><i class="ti-trash"></i></a>
                                                </li>
                                                <li>
                                                    <a href="product-detail-1.html">
                                                        <figure><img src="{{ asset('assets/img/products/product_placeholder_square_small.jpg') }}" data-src="{{ asset('assets/img/products/shoes/thumb/2.jpg') }}" alt="" width="50" height="50" class="lazy"></figure>
                                                        <strong><span>1x Armor Okwahn II</span>$110.00</strong>
                                                    </a>
                                                    <a href="0" class="action"><i class="ti-trash"></i></a>
                                                </li>
                                            </ul>
                                            <div class="total_drop">
                                                <div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
                                                <a href="/cart" class="btn_1 outline">View Cart</a><a href="/checkout" class="btn_1">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown-cart-->
                                </li>
                                <li>
                                    <a href="#0" class="wishlist"><span>Wishlist</span></a>
                                </li>
                                <li>
                                    <div class="dropdown dropdown-access">
                                        <a href="account.html" class="access_link"><span>Account</span></a>
                                        <div class="dropdown-menu">


                                    @if(Route::has('login'))
                                        @auth
                                            @if(Auth::user()->utype === 'ADM')
                                                    <a href="#" class="btn_1">My Account ({{Auth::user()->name}})</a>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('admin.dashboard')}}"><i class="ti-truck"></i>Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                        </li>
                                                        <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                            @else
                                                    <a href="#" class="btn_1">My Account ({{Auth::user()->name}})</a>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('user.dashboard')}}"><i class="ti-truck"></i>Dashboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                        </li>
                                                        <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                            @endif
                                        @else
                                            <a href="{{route('login')}}" class="btn_1">Login</a>
                                            <a href="{{route('register')}}" class="btn_1">Register</a>
                                        @endif
                                    @endif
                                        </div>
                                    </div>
                                    <!-- /dropdown-access-->
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                                </li>
                                <li>
                                    <a href="#menu" class="btn_cat_mob">
                                        <div class="hamburger hamburger--spin" id="hamburger">
                                            <div class="hamburger-box">
                                                <div class="hamburger-inner"></div>
                                            </div>
                                        </div>
                                        PERMINDUSTRIES
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <div class="search_mob_wp">
                    <input type="text" class="form-control" placeholder="Search Sky Fruit Products">
                    <input type="submit" class="btn_1 full-width" value="Search">
                </div>
                <!-- /search_mobile -->
            </div>
            <!-- /main_nav -->
        </header>
        <!-- /header -->

        {{$slot}}

        <footer class="revealed">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_1">Quick Links</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_1">
                            <ul>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="help.html">Faq</a></li>
                                <li><a href="help.html">Help</a></li>
                                <li><a href="account.html">My account</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="/contacts">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 data-target="#collapse_2">Categories</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_2">
                            <ul>
                                <li><a href="listing-grid-1-full.html">Clothes</a></li>
                                <li><a href="listing-grid-2-full.html">Electronics</a></li>
                                <li><a href="listing-grid-1-full.html">Furniture</a></li>
                                <li><a href="listing-grid-3.html">Glasses</a></li>
                                <li><a href="listing-grid-1-full.html">Shoes</a></li>
                                <li><a href="listing-grid-1-full.html">Watches</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                            <h3 data-target="#collapse_3">Contacts</h3>
                        <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                            <ul>
                                <li><i class="ti-home"></i>403, Annai Mookambikai Nagar<br>
                                    Sengundram Village,<br> Singaperumal Koil,<br>
                                    Kancheepuram - 603204.<br>
                                    TamilNadu, india<br></li>
                                <li><i class="ti-headphone-alt"></i>9884434889 / 8072206772 </li>
                                <li><i class="icon-phone"></i>044 -27401720</li>
                                <li><i class="ti-email"></i><a href="#0">premindustries2017@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                            <h3 data-target="#collapse_4">Keep in touch</h3>
                        <div class="collapse dont-collapse-sm" id="collapse_4">
                            <div id="newsletter">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
                                </div>
                            </div>
                            <div class="follow_us">
                                <h5>Follow Us</h5>
                                <ul>
                                    <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/twitter_icon.svg') }}" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/facebook_icon.svg') }}" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/instagram_icon.svg') }}" alt="" class="lazy"></a></li>
                                    <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/youtube_icon.svg') }}" alt="" class="lazy"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <hr>
                <div class="row add_bottom_25">
                    <div class="col-lg-6">
                        <ul class="footer-selector clearfix">
                            <li>
                                <div class="styled-select lang-selector">
                                    <select>
                                        <option value="English" selected>English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                        <option value="Russian">Russian</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="styled-select currency-selector">
                                    <select>
                                        <option value="US Dollars" selected>US Dollars</option>
                                        <option value="Euro">Euro</option>
                                    </select>
                                </div>
                            </li>
                            <li><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('assets/img/cards_all.svg') }}" alt="" width="198" height="30" class="lazy"></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="additional_links">
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                            <li>© 2021 PremIndustries. All Rights Reserved | Designed by GreenBuds</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
        </div>
        <!-- page -->

        <div id="toTop"></div><!-- Back to top button -->

        <!-- COMMON SCRIPTS -->
        <script src="{{asset ('assets/js/common_scripts.min.js')}}"></script>
        <script src="{{asset ('assets/js/main.js') }}"></script>

        <!-- SPECIFIC SCRIPTS -->
        <script src="{{asset ('assets/js/carousel-home.js') }}"></script>

        @livewireScripts

    </body>
    </html>
