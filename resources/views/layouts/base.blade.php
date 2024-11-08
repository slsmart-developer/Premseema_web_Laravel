
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
        <link href="{{ asset('assets/css/slider_carsol.css') }}" rel="stylesheet">



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
                                <a href="/"><img src="{{ asset('assets/img/permlogo.png') }}" alt="" width="180" height="65"></a>
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

                            @livewire('header-search-component')

                        <div class="col-xl-3 col-lg-2 col-md-3">

                            <ul class="top_tools">
                               
                                <li>
                                    <div class="dropdown dropdown-access">
                                        <div class="align-items-center" style="margin-top: 4px">
                                         <a ><i class="icon-phone" style="font-size: 25px;"></i></a>
                                         </div>
                                       
                                        <div class="dropdown-menu">
                                            <div class="total_drop">
                                            <div class="clearfix"><h5>Need Help?</h5></div>
                                            <a href="tel:+919884434889" class="btn_1">Call : +91 98844 34889</a>
                                            <a href="tel:+918072206772" class="btn_1">Call : +91 80722 06772</a>
                                            <a href="tel:04427401720" class="btn_1">Call : 044 -27401720</a>
                                        </div>
                                   
                                        </div>
                            </div>
                                </li>
                            
                                <li>


                                    <div class="dropdown dropdown-cart">
                                        
                                        <a href="/cart" class="cart_bt"><strong>
                                        @if(Cart::count() > 0)
                                        {{Cart::count()}}
                                        @endif
                                        </strong></a>

                                        <div class="dropdown-menu">
                                            @foreach (Cart::content() as $item)
                                            <ul>
                                                <li>
                                                    <a href="/cart">
                                                        <figure><img src="{{ asset('assets/img/products/product_placeholder_square_small.jpg') }}" data-src="{{ asset('assets/img/products/prem_product')}}/{{$item->model->image}}" alt="" width="50" height="50" class="lazy"></figure>
                                                        <strong><span>{{$item->name}}</span>₹{{$item->model->regular_price}}</strong>
                                                    </a>
                                                    <a href="#" class="action" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="ti-trash"></i></a>
                                                </li>

                                            </ul>
                                            @endforeach
                                            <div class="total_drop">
                                                <div class="clearfix"><strong>Total</strong><span>₹{{Cart::subtotal()}}</span></div>
                                                <a href="/cart" class="btn_1 outline">View Cart</a><a href="/checkout" class="btn_1">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /dropdown-cart-->
                                </li>
                 
                                <li>
                                    <div class="dropdown dropdown-access">
                                        <a href="#" class="access_link"><span></span></a>
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
                                                            <a href="{{ route('admin.products')}}"><i class="ti-truck"></i>All Products</a>
                                                          </li>
                                                          <li>
                                                            <a href="{{ route('admin.orders')}}"><i class="ti-truck"></i>All Orders</a>
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
                    <div class="col-lg-5 col-md-6">
                    <h3 data-target="#collapse_3">Premindustries</h3>
                        <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                            <ul>
                                <li><i class="ti-home"></i>403, Annai Mookambikai Nagar,<br>
                                    Sengundram Village, Singaperumal Koil,<br>
                                    Kancheepuram - 603 204,<br>
                                    TamilNadu, India.<br>
                                    Marketed by Prem Life Science</li>
                                <li><i class="ti-headphone-alt"></i>+91 98844 34889 / +91 80722 06772 </li>
                                <li><i class="icon-phone"></i>044 -27401720</li>
                                <li><i class="ti-email"></i><a href="#0">premindustries2017@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                    <h3 data-target="#collapse_1">Services</h3>
                        <div class="collapse dont-collapse-sm links" id="collapse_1">
                            <ul>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Cancellation</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Bulk Orders</a></li>
                                <li><a href="#">Buying Guides</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                       <h3 data-target="#collapse_2">Policies</h3>
                       <div class="collapse dont-collapse-sm links" id="collapse_2">
                           <ul>
                               <li><a href="#">Terms & Conditions</a></li>
                               <li><a href="#">Privacy</a></li>
                               <li><a href="#">Refund</a></li>
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
                 
                    <div class="col-lg-12">
                        <ul class="additional_links">
                            <li><a href="#">© 2021 PremIndustries. All Rights Reserved | Designed by GreenBuds</a></li>
                        </ul>
                    </div>
                  
                </div>
                <!-- /row-->
              
                <hr>

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


        <script>
            function toggleIcon(e) {
            $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('glyphicon-plus glyphicon-minus');
            }
            $('.panel-group').on('hidden.bs.collapse', toggleIcon);
            $('.panel-group').on('shown.bs.collapse', toggleIcon);
        </script>

        <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        }
        </script>


        @livewireScripts

    </body>
    </html>
