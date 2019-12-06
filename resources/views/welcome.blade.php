<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Event Asia</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
        <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/typicons.font/typicons.css" rel="stylesheet">
        <link href="lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
        <link href="lib/select2/css/select2.min.css" rel="stylesheet">
        <link href="lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
        <link href="lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

        <!-- azia CSS -->
        <link rel="stylesheet" href="css/azia.css">
    </head>
    <body class="az-body">
            <div class="container">
                    @yield('core')
                </div>
           
            {{-- <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif --}}

        <!-- Start Header Area -->
        <header class="az-header">
            <div class="container">
                <div class="header-wrap">
                        
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#home"><img src="img/logo.png" alt=""></a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="hide">
                                <a href="#home">Acceuil</a>
                                <a href="#functionalities">Functionalités</a>
                                <a href="#speaker">Réalisateur</a>
                                <a href="#upcoming">Event Prochain</a>
                                <a href="#create_event">Create Event</a>
                                {{-- <a href="{{ url('/evenmt') }}">create event</a> --}}

                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </header>
        <div class="container">
                {{-- <div class="header-wrap"> --}}
        <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
                </div>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                    <div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
                        <div class="banner-content col-lg-6 col-md-12">
                            <h1>
                                Our Next Event Starts in
                            </h1>
                            <div class="row clock_sec d-flex flex-row justify-content-between" id="clockdiv">
                                <div class="clockinner">
                                    <span class="days"></span>
                                    <div class="smalltext">Days</div>
                                </div>
                                <div class="clockinner">
                                    <span class="hours"></span>
                                    <div class="smalltext">Hours</div>
                                </div>
                                <div class="clockinner">
                                    <span class="minutes"></span>
                                    <div class="smalltext">Minutes</div>
                                </div>
                                <div class="clockinner">
                                    <span class="seconds"></span>
                                    <div class="smalltext">Seconds</div>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start facilities Area -->
        <section class="facilities-area section-gap" id="functionalities">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Core Functionalities</h1>
                        <p>
                            {{-- inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct. --}}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="sigle-facilities col-lg-4 col-md-6 pb-40">
                        <span class="lnr lnr-chart-bars"></span>
                        <h4>Management</h4>
                        <p>
                            {{-- inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct. --}}
                        </p>
                    </div>
                    <div class="sigle-facilities col-lg-4 col-md-6 pb-40">
                        <span class="lnr lnr-bullhorn"></span>
                        <h4>Marketing</h4>
                        <p>
                            {{-- inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct. --}}
                        </p>
                    </div>
                    <div class="sigle-facilities col-lg-4 col-md-6 pb-40">
                        <span class="lnr lnr-poop"></span>
                        <h4>Uniqueness</h4>
                        <p>
                            {{-- inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct. --}}
                        </p>
                    </div>
                    <div class="sigle-facilities col-lg-4 col-md-6">
                        <span class="lnr lnr-smile"></span>
                        <h4>Design</h4>
                        <p>
                            {{-- inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct. --}}
                        </p>
                    </div>
                    <div class="sigle-facilities col-lg-4 col-md-6">
                        <span class="lnr lnr-sun"></span>
                        <h4>Creativity</h4>
                        <p>
                            {{-- inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct. --}}
                        </p>
                    </div>
                    <div class="sigle-facilities col-lg-4 col-md-6">
                        <span class="lnr lnr-magic-wand"></span>
                        <h4>Strategy</h4>
                        <p>
                            {{-- inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face higher conduct. --}}
                        </p>
                    </div>


                </div>
            </div>
        </section>
        <!-- End facilities Area -->

        <!-- Start speaker Area -->
        <section class="speaker-area section-gap" id="speaker">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Team    </h1>
                        <p>
                            {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua. --}}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 speaker-wrap">
                        <div class="single-speaker">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/houssem.png" alt="">
                                      <div class="content-details fadeIn-bottom"></div>
                                </a>
                             </div>
                        </div>
                          <h2>Houssem eddine ben jemia</h2>
                          {{-- <p>inappropriate behavior</p> --}}
                    </div>
                    <div class="col-lg-4 col-md-4 speaker-wrap">
                        <div class="single-speaker">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/rana.png" alt="">
                                      <div class="content-details fadeIn-bottom"></div>
                                </a>
                             </div>
                        </div>
                          <h2>Rana Draouil</h2>
                          {{-- <p>inappropriate behavior</p> --}}
                    </div>
                    <div class="col-lg-4 col-md-4 speaker-wrap">
                        <div class="single-speaker">
                            <div class="content">
                                <a href="#" target="_blank">
                                  <div class="content-overlay"></div>
                                       <img class="content-image img-fluid d-block mx-auto" src="img/oussef.png" alt="">
                                      <div class="content-details fadeIn-bottom"></div>
                                </a>
                             </div>
                        </div>
                          <h2>Oussef Lassoued</h2>
                          {{-- <p>inappropriate behavior</p> --}}
                    </div>

                </div>
            </div>
        </section>
        <!-- End speaker Area -->


        <!-- Start calender Area -->
        <section class="calender-area relative section-gap">
            <div class="overlay overlay-bg"></div>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Calendrier D'événement </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 calender-wrap" id="calendar"></div>
                    <div class="col-lg-12 event-dates">
                        <div class="single-event d-flex flex-row">
                            <p class="col">
                                Dec 01
                            </p>
                            <p class="col-8">
                                World AIDS Day
                            </p>
                            <p class="col text-right">
                                <span class="lnr lnr-highlight"></span>
                                <span class="lnr lnr-trash"></span>
                            </p>
                        </div>
                        <div class="single-event d-flex flex-row">
                            <p class="col">
                                Dec 16
                            </p>
                            <p class="col-8">
                                Victory Day of people republic of Bangladesh
                            </p>
                            <p class="col text-right">
                                <span class="lnr lnr-highlight"></span>
                                <span class="lnr lnr-trash"></span>
                            </p>
                        </div>
                        <div class="single-event d-flex flex-row">
                            <p class="col">
                                Dec 25
                            </p>
                            <p class="col-8">
                                Chrismas Day Arrangement
                            </p>
                            <p class="col text-right">
                                <span class="lnr lnr-highlight"></span>
                                <span class="lnr lnr-trash"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End calender Area -->


        <!-- Start events Area -->
        <section class="events-area section-gap" id="upcoming">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-80 header-text">
                        <h1>Upcoming Events</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> labore  et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="row no-padding">
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-events row no-padding">
                            <div class="col-lg-4 image">
                                <img src="img/e1.jpg" alt="">
                            </div>
                            <div class="col-lg-7 details">
                                <a href="#">
                                    <h4>Addiction When Gambling
                                    Becomes A Problem</h4>
                                </a>
                                <p>
                                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                                </p>
                                <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                            </div>
                        </div>
                        <div class="single-events row no-padding">
                            <div class="col-lg-4 image">
                                <img src="img/e2.jpg" alt="">
                            </div>
                            <div class="col-lg-7 details">
                                <a href="#">
                                    <h4>Addiction When Gambling
                                    Becomes A Problem</h4>
                                </a>
                                <p>
                                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                                </p>
                                <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                            </div>
                        </div>
                        <div class="single-events row no-padding">
                            <div class="col-lg-4 image">
                                <img src="img/e3.jpg" alt="">
                            </div>
                            <div class="col-lg-7 details">
                                <a href="#">
                                    <h4>Addiction When Gambling
                                    Becomes A Problem</h4>
                                </a>
                                <p>
                                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                                </p>
                                <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-events row no-padding">
                            <div class="col-lg-4 image">
                                <img src="img/e4.jpg" alt="">
                            </div>
                            <div class="col-lg-7 details">
                                <a href="#">
                                    <h4>Addiction When Gambling
                                    Becomes A Problem</h4>
                                </a>
                                <p>
                                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                                </p>
                                <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                            </div>
                        </div>
                        <div class="single-events row no-padding">
                            <div class="col-lg-4 image">
                                <img src="img/e5.jpg" alt="">
                            </div>
                            <div class="col-lg-7 details">
                                <a href="#">
                                    <h4>Addiction When Gambling
                                    Becomes A Problem</h4>
                                </a>
                                <p>
                                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                                </p>
                                <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                            </div>
                        </div>
                        <div class="single-events row no-padding">
                            <div class="col-lg-4 image">
                                <img src="img/e6.jpg" alt="">
                            </div>
                            <div class="col-lg-7 details">
                                <a href="#">
                                    <h4>Addiction When Gambling
                                    Becomes A Problem</h4>
                                </a>
                                <p>
                                    inappropriate behavior Lorem ipsum dolor sit amet, consectetur.
                                </p>
                                <p class="meta"><span class="lnr lnr-heart"></span> <span class="likes">05 likes</span> <span class="lnr lnr-bubble"></span> <span class="likes">06 comments</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End events Area -->
        <section class="events-area section-gap" id="create_event">
                <div class="container">
                        <div class="container">
                                @yield('content1')
                            </div>
                </div>
                
            </section>

        <!-- start footer Area -->
        <footer class="az-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h6>Top Products</h6>
                            <ul class="footer-nav">
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#">Manage Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                        <div class="single-footer-widget newsletter">
                            <h6>Newsletter</h6>
                            <p>You can trust us. we only send promo offers, not a single spam.</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="form-group row" style="width: 100%">
                                        <div class="col-lg-8 col-md-12">
                                            <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                                        </div>
                                    </div>
                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">Instragram Feed</h6>
                            <ul class="instafeed d-flex flex-wrap">
                                <li><img src="img/i1.jpg" alt=""></li>
                                <li><img src="img/i2.jpg" alt=""></li>
                                <li><img src="img/i3.jpg" alt=""></li>
                                <li><img src="img/i4.jpg" alt=""></li>
                                <li><img src="img/i5.jpg" alt=""></li>
                                <li><img src="img/i6.jpg" alt=""></li>
                                <li><img src="img/i7.jpg" alt=""></li>
                                <li><img src="img/i8.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row footer-bottom d-flex justify-content-between">
                    <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->

        <script src="new/lib/jquery/jquery.min.js"></script>
<script src="form/dist/js/moment-with-locales.js"></script>
<script>
    var urlsite = "https://www.youyous.fr/crm/crm2/";
    moment.locale('fr');
</script>

<script src="new/lib/jquery-ui/ui/widgets/datepicker.js"></script>
<script src="new/lib/jquery-ui/ui/i18n/datepicker-fr.js"></script>

<script src="new/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="new/lib/ionicons/ionicons.js"></script>
{#<script src="new/lib/jquery.maskedinput/jquery.maskedinput.js"></script>#}
{#<script src="new/maskinput/jquery.mask.js"></script>#}
<script src="new/lib/spectrum-colorpicker/spectrum.js"></script>
<script src="new/lib/select2/js/select2.min.js"></script>
<script src="new/lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script src="new/js/azia.js"></script>
<script src="https://unpkg.com/ionicons@4.5.0/dist/ionicons.js"></script>
<script type="text/javascript" src="form/dist/js/main_new.js"></script>
<script type="text/javascript" src="form/dist/js/signature_new.js"></script>

        
    </body>
</html>
