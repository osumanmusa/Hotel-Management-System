<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Owl Carousel CSS --> 
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="fonts/flaticon.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="css/boxicons.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="css/theme-dark.css">
        
        <!-- Title -->
        <title>Oftop - Single Property HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>

        <!-- Preloader 
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                    </div>
                </div>
            </div>
        </div>
         End Preloader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{asset('img/logos/logo1.png')}}" class="logo-one" alt="Logo">
                    <img src="{{asset('img/logos/logo-4.png')}}" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container-fluid">
                    <nav class="container-max navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                    <img src="{{asset('img/logos/logo1.png')}}" class="logo-one" alt="Logo">
                    <img src="{{asset('img/logos/logo-4.png')}}" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active">
                                        Home 
                                    </a>
                                    
                                </li>
                                <li class="nav-item">
                                    <a href="/about" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/service" class="nav-link">
                                        Services 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Gallery
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog 
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/contact" class="nav-link">
                                        Contact
                                    </a>
                                </li>
                            </ul>

                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))

                            <div class="appointment-btn m-1">
                                <a href="{{ route('login') }}" class="default-btn auth-buttons">
                                    <i class='bx bx-user'></i>
                                    Login
                                </a>
                            </div>
                            @endif

                            @if (Route::has('register'))
                            <div class="appointment-btn m-1">
                                <a href="{{ route('register') }}" class="default-btn auth-buttons">
                                    <i class='bx bx-user'></i>
                                    Sign up
                                </a>
                            </div>
                            @endif
                        @else


                            <div class="appointment-btn m-1">
                                <a class="default-btn auth-buttons" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class='bx bx-user'></i>
                                    Logot
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                            </div>
                        
                        @endguest
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

            @yield('content')

        <!-- Footer Area -->
        <footer class="footer-area footer-bg">
            <div class="footer-top pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xxl-3 col-md-6">
                            <div class="single-footer-widget single-footer-color">
                                <a href="index.htm" class="logo">
                                    <img src="assets/img/logos/footer-logo.png" alt="Logo">
                                </a>
                                <p>
                                    Lorem ipsum dolor sit ame consectetur adisicing elitsed do eiusmod 
                                    tempor labet dolore magna aliquaUt
                                </p>
                                <ul class="social-link">
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                                    </li> 
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                                    </li> 
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                                    </li> 
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                                    </li> 
                                    <li>
                                        <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-lg-2 col-xxl-3 col-md-6">
                            <div class="single-footer-widget single-footer-color pl-70">
                                <h3>SERVICES</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="services.html" target="_blank">
                                            <i class='bx bx-plus'></i>
                                            Property on Sale
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="about.html" target="_blank">
                                            <i class='bx bx-plus'></i>
                                            About Us
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="team.html" target="_blank">
                                            <i class='bx bx-plus'></i>
                                            Our Team
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="terms-condition.html" target="_blank">
                                            <i class='bx bx-plus'></i>
                                            Terms of Use
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="privacy-policy.html" target="_blank">
                                            <i class='bx bx-plus'></i>
                                            Privacy Policy
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-xxl-3 col-md-6">
                            <div class="single-footer-widget single-footer-color pl-3">
                                <h3>CONTACT INFO</h3>
                                <ul class="footer-contact-list">
                                    <li>
                                        <span>Monday - Friday :</span> 9 am to 6 pm
                                    </li> 
                                    <li>
                                        <span>Saturday - Sunday :</span> 9 am to 2 pm
                                    </li> 
                                    <li>
                                        <span>Phone :</span> <a href="tel:2151234567"> 215 - 123 - 4567</a>
                                    </li> 
                                    <li>
                                        <span>Email :</span> <a href="mailto:info@Oftopinc.com"> info@oftopinc.com</a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-xxl-3 col-md-6">
                            <div class="single-footer-widget single-footer-color pl-5">
                                <h3>Gallery</h3>
                                <ul class="footer-gallery">
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/gallery/g-1.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/gallery/g-2.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/gallery/g-3.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/gallery/g-4.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/gallery/g-5.jpg" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/gallery/g-6.jpg" alt="image">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </footer>
        <!-- Footer Area End -->




       <!-- Jquery Min JS -->
       <script src="js/jquery.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/carousel-thumbs.js"></script>
        <!-- Meanmenu JS -->
        <script src="js/meanmenu.js"></script>
        <!-- Magnific Popup JS -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Wow JS -->
        <script src="js/wow.min.js"></script>
        <!-- Nice Select JS -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="js/custom.js"></script>
    </body>
    </html>