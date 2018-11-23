<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>F-plus Portfolio Template | Single Portfolio</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('front/img/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link href="{{ asset('front/style.css') }}" rel="stylesheet">



    <link href="{{ asset('front/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/others/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/estilos.css') }}" rel="stylesheet">
    

    <!-- Responsive CSS -->
    <link href="{{ asset('front/css/responsive/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="fplus-load"></div>
        <img src="img/core-img/h-logo.png" alt="logo">
    </div>

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="logo_area">
                        <a class="d-flex align-items-center justify-content-center" href="index.html"><img src="{{  asset('front/img/core-img/h-logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="menu-open-close d-flex align-items-center justify-content-center">
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->

    <!-- ****** Menu Area Start ****** -->
    <div class="fplus-menu-area">
        <!-- Menu -->
        <div class="fplus-main-menu h-100 d-flex align-items-center">
            <nav class="navbar navbar-expand-lg">
                <div class="" id="fplus-nav">
                    <ul class="navbar-nav" id="fplusNav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('master.index') }}">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="fplusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="fplusDropdown">
                                <a class="dropdown-item" href="/">Inicio</a>
                                <a class="dropdown-item" href="single-portfolio.html">Single Portfolio</a>
                                <a class="dropdown-item" href="static-page.html">Static Page</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">Our Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Recent News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Header Social Icon -->
        <div class="header-social-info d-flex align-items-center justify-content-end">
            <div class="h-social-icon">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- ****** Menu Area End ****** -->

    <!-- ****** Hero Area Start ****** -->
   @foreach ($producto as  $pro)
   <div class="fplus-hero-area" style="background-image: url({{ $pro->fotos[0]->url }})"></div>
   @endforeach
   
    <!-- ****** Hero Area End ****** -->

    <!-- ****** Single Portfolio Area Start ****** -->
    <div class="fplus-single-portfolio-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="fplus-portfolio-share">
                        <a href="#">Share</a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-portfolio-content-area">
            <div class="single-portfolio-text">
                <p>Producto</p>
                @foreach ($producto as  $pro)
                <h2>{{ $pro->nombre }}</h2>
                
                <div class="project-meta-data d-sm-flex">
                    <div class="project-client">
                        <p>Peso</p>
                        <p>{{ $pro->peso }}</p>
                    </div>
                    <div class="project-year">
                        <p>Tamaño</p>
                        <p>{{ $pro->tamano }}</p>
                    </div>
                    <div class="project-website">
                        <p>Color</p>
                        <p>{{ $pro->color }}</p>
                    </div>
                    <div class="project-website">
                            <p>Precio</p>
                            <p>{{ $pro->precio }}</p>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- ****** Single Portfolio Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="fplus-about-us-area bg-gray">
        <div class="container">
            <div class="about-us-content">
                <div class="row no-gutters align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="about-us-text">
                            @foreach ($producto as  $pro)
                            <h2 style="text-align:center">{{ $pro->nombre }}</h2>
                            <p>{!! $pro->descripcion !!}</p>
                            <hr>
                            <h5 style="text-align:right">Categoría: {{ $pro->category->nombre }}</h5>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="about-us-thumb">                         
                            <img src="{{ $pro->fotos[1]->url }}" alt="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Project Single Thumb ****** -->
    <div class="fplus-project-single-thumb bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        @foreach ($producto as  $pro)
                        <img src="{{ $pro->fotos[2]->url }}" alt="">
                        @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- ****** Gallery Area Start ****** -->
    <section class="fplus-projects-area bg-gray" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Productos - Relacionados</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters fplus-portfolio">
                <!-- Single gallery Item Start -->
                @foreach ($relacionadas as $rel )
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding">
                    <img src="{{ $rel->fotos->first()->url }}" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="#"><img src="{{ $rel->fotos->first()->url }}" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="../detalle/{{ $rel->id }}">{{ $rel->nombre }}</a>
                            <h3>{!! $rel->descripcion !!}</h3>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Single gallery Item Start -->
                {{-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding">
                    <img src="{{ asset('front/img/portfolio-img/p-2.jpg') }}" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="#"><img src="{{ asset('front/img/icons/plus.png') }}" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">branding</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div> --}}

                <!-- Single gallery Item Start -->
                {{-- <div class="col-12 col-sm-6 col-md-4 single_gallery_item design">
                    <img src="{{ asset('front/img/portfolio-img/p-3.jpg') }}" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="#"><img src="{{ asset('front/img/icons/plus.png') }}" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">design</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="fplus-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="about-us-widget">
                        <img src="img/core-img/logo.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <li><a href="/">Inicio</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Team</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <li><a href="#">Clients</a></li>
                                <li><a href="#">Method</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="subscribe-widget">
                        <p>Subscribe</p>
                        <form action="#">
                            <input type="email" name="s-email" id="subscribeEmail" placeholder="Enter your email">
                            <button type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="footer-social-widget">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12 text-center text-white"><small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></div>
            </div>
        </div>
    </footer>
    <!-- Jquery-2.2.4 js -->
    <script src="{{ asset('front/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('front/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{ asset('front/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('front/js/others/plugins.js') }}"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
    <script src="{{ asset('front/js/google-map/map-active.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('front/js/active.js') }}"></script>

    <script src="{{ asset('front/js/master.js') }}"></script>
</body>