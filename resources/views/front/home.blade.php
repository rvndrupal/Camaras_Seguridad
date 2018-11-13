<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>F-Seguridad.</title>

  

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

    <!-- Responsive CSS -->
    <link href="{{ asset('front/css/responsive/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="fplus-load"></div>
        <img src="{{ asset('front/img/core-img/h-logo.png') }}" alt="logo">
    </div>

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="logo_area">
                        <a class="d-flex align-items-center justify-content-center" href="index.html"><img src="{{ asset('front/img/core-img/h-logo.png') }}" alt="logo"></a>
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
                            <a class="nav-link" href="#home">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="fplusDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="fplusDropdown">
                                <a class="dropdown-item" href="index.html">Home</a>
                                <a class="dropdown-item" href="single-portfolio.html">Single Portfolio</a>
                                <a class="dropdown-item" href="static-page.html">Static Page</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#clients">Nuestros Clientes</a>
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

    <!-- ****** Welcome Area Start ****** -->
    <section class="fplus-hero-area" style="background-image: url({{ asset('front/img/bg-img/hero-1.jpg') }});" id="home">
        <div class="hero-content-area d-flex justify-content-end">
            <div class="hero-text">
                <h2>For More Agency</h2>
                <a href="#projects" class="view-portfolio-btn" id="scrollDown"><i class="fa fa-plus" aria-hidden="true"></i> View Portfolio</a>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="fplus-about-us-area bg-gray section-padding-120" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>About Us</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about-us-content wow fadeInLeftBig" data-wow-delay="0.5">
                <div class="row no-gutters align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="about-us-thumb wow fadeIn" data-wow-delay="1s">
                            <img src="front/img/bg-img/about-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="about-us-text wow fadeIn" data-wow-delay="1.5s">
                            <h4>Who We Are</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec, accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="1s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="front/img/icons/wallet.svg" alt="">
                            <h5>Reasonable pricing</h5>
                        </div>
                        <p>Ed consectetur dapibus venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae</p>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="1.5s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="front/img/icons/credit-card.svg" alt="">
                            <h5>eCommerce support</h5>
                        </div>
                        <p>Ed consectetur dapibus venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae</p>
                    </div>
                </div>
                <!-- Single Feature -->
                <div class="col-12 col-lg-4">
                    <div class="fplus-single-feature wow fadeInUp" data-wow-delay="2s">
                        <div class="feature-title d-flex align-items-center">
                            <img src="front/img/icons/switching-user.svg" alt="">
                            <h5>User-friendly admin</h5>
                        </div>
                        <p>Ed consectetur dapibus venenatis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Gallery Area Start ****** -->
    <section class="fplus-projects-area bg-gray section-padding-0-120" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Projects</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-projects-menu">
            <div class="text-center portfolio-menu">
                <button class="btn active" data-filter="*">All Fields</button>
                <button class="btn" data-filter=".branding">branding</button>
                <button class="btn" data-filter=".design">editorial design</button>
                <button class="btn" data-filter=".graphic">graphic design</button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters fplus-portfolio">
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding wow fadeInUp" data-wow-delay="0.2s">
                    <img src="front/img/portfolio-img/p-1.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="front/img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">branding</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item branding wow fadeInUp" data-wow-delay="0.4s">
                    <img src="front/img/portfolio-img/p-2.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="front/img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">branding</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item design wow fadeInUp" data-wow-delay="0.6s">
                    <img src="front/img/portfolio-img/p-3.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="front/img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">design</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item graphic wow fadeInUp" data-wow-delay="0.8s">
                    <img src="front/img/portfolio-img/p-4.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="front/img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">graphic</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item design wow fadeInUp" data-wow-delay="1s">
                    <img src="front/img/portfolio-img/p-5.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="front/img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">design</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
                <!-- Single gallery Item Start -->
                <div class="col-12 col-sm-6 col-md-4 single_gallery_item graphic wow fadeInUp" data-wow-delay="1.2s">
                    <img src="front/img/portfolio-img/p-6.jpg" alt="">
                    <div class="gallery-hover-overlay d-flex justify-content-between">
                        <div class="port-more-view">
                            <a href="single-portfolio.html"><img src="front/img/icons/plus.png" alt=""></a>
                        </div>
                        <div class="port-hover-text">
                            <a href="#">graphic</a>
                            <h3>One Branding Identity</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="#" class="load-more-btn text-center d-block mt-50"><i class="fa fa-plus" aria-hidden="true"></i> Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

    <!-- ****** Method Area Start ****** -->
    <div class="fplus-method-area bg-gray" id="method">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Methods</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-method-content bg-white text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="fplus-method-text">
                            <h4>How We Work</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="fplus-method-video wow fadeInUp" data-wow-delay="1s" style="background-image: url(front/img/bg-img/video.jpg);">
                            <div class="video-play-btn">
                                <a href="https://youtu.be/ZydsX1qjoBI" class="video--play--btn"><i class="pe-7s-play" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Method Area End ****** -->

    <!-- ****** Clients Area Start ****** -->
    <section class="fplus-clients-area bg-gray section-padding-120" id="clients">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Our clients</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="fplus-clients-logo d-flex">
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/1.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/2.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/3.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/4.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/5.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/2.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/4.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/5.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/2.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/1.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/4.png" alt=""></a>
                        </div>
                        <!-- Single clients -->
                        <div class="single-clients-logo">
                            <a href="#"><img src="front/img/clients-img/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Clients Area End ****** -->

    <!-- ****** Blog Area Start ****** -->
    <section class="fplus-blog-area bg-gray section-padding-0-120" id="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Recent News</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Blog Thumbnail -->
                        <img src="front/img/blog-img/blog-1.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="fplus-blog-content">
                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="front/img/blog-img/post-author.jpg" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>Lora Palmer</h6>
                                    <p>on <a href="#">Sep 29, 2017</a> at <a href="#">9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <!-- Blog Thumbnail -->
                        <img src="front/img/blog-img/blog-2.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="fplus-blog-content">
                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="front/img/blog-img/post-author.jpg" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>Lora Palmer</h6>
                                    <p>on <a href="#">Sep 29, 2017</a> at <a href="#">9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Post Area -->
                <div class="col-12 col-lg-4">
                    <div class="fplus-single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <!-- Blog Thumbnail -->
                        <img src="front/img/blog-img/blog-3.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="fplus-blog-content">
                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                            <div class="post-meta-data d-flex align-items-center">
                                <div class="post-author-img">
                                    <img src="front/img/blog-img/post-author.jpg" alt="">
                                </div>
                                <div class="post-author-name-date">
                                    <h6>Lora Palmer</h6>
                                    <p>on <a href="#">Sep 29, 2017</a> at <a href="#">9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->

    <!-- ****** Contact Area Start ****** -->
    <section class="fplus-contact-area bg-gray" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h4>Contact</h4>
                        <div class="section-heading-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fplus-contact-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="contact_from wow fadeInDown" data-wow-delay="1.5s">
                            <form action="mail.php" method="post" id="main_contact_form">
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="number" id="number" placeholder="Telephone" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Single Input Area Start -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Maps -->
        <div id="googleMap" class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s"></div>
    </section>
    <!-- ****** Contact Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="fplus-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="about-us-widget">
                        <img src="front/img/core-img/logo.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="footer-nav-widget">
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
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
    <!-- ****** Footer Area End ****** -->

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
</body>