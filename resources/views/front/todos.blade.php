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

    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/AdminLTE.min.css') }}">
  <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">



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
   @foreach ($header as  $hea)
   <div class="fplus-hero-area" style="background-image: url({{ $hea->fotos[0]->url }}); height:120px"></div>
   @endforeach
   
    <!-- ****** Hero Area End ****** -->

    <!-- ****** Single Portfolio Area Start ****** -->
    {{-- <div class="fplus-single-portfolio-area bg-gray section-padding-100">
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

        {{-- <div class="fplus-portfolio-content-area">
            <div class="single-portfolio-text">
                <p>Nuestros Productos</p>
               
                <h2>Lista de Todos Nuestros Productos</h2>
                
                <div class="project-meta-data d-sm-flex">
                    <div class="project-client">
                        <p>Peso</p>
                        <p>Servicio</p>
                    </div>
                    <div class="project-year">
                        <p>Tamaño</p>
                        <p>Garantia</p>
                    </div>
                    <div class="project-website">
                        <p>Color</p>
                        <p>Atención</p>
                    </div>
                    <div class="project-website">
                            <p>Precio</p>
                            <p>Compromiso</p>
                        </div>
                </div>
                
            </div>
        </div> --}}
    </div> 

    <div class="container">
        <div class="row ">
                <div class="col-12">
                        <div class="box-header">
                          <h3 class="box-title">Todos los Productos</h3>
                          Productos
                         
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                               
                          <table id="productos_table" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              
                              <th>NOMBRE</th>
                              <th>DESCRIPCIÓN</th>
                              <th>CATEGORÍA</th>
                              <th>TAMAÑO</th>
                              <th>PRECIO</th>
                              <th>IMÁGEN</th>                              
                              <th>VER</th>
                              
                             
                            </tr>
                            </thead>
                            <tbody>
                               
                                @foreach ($products as $producto )
                                <tr>
                                       
                                        <td>{{ $producto->nombre }}</td>
                                        <?php $des=str_limit($producto->descripcion,200); ?>                   
                                        <td>{!! $des !!}</td>
                                        <td>{!! $producto->category->nombre !!}</td>
                                        <td>{{ $producto->tamano }}</td>
                                        <td>{{ $producto->precio }}</td>
                                        <td><img style="width:100px" src="{{ $producto->fotos->first()->url }}" alt=""></td>                                        
                                        <td width="2px">
                                            <a href=" detalle/{{ $producto->id }} " class="btn btn-lg btn-default"><i class="fa fa-eye"></i></a>
                                        </td>
                    
                                    </tr>
                                @endforeach
                            
                           
                            
                            </tbody>
                            
                          </table>
                        </div>
                        <!-- /.box-body -->
                      </div>

        </div>
    </div>
    <hr>
    

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
                                <li><a href="{{ url('/') }}">Inicio</a></li>
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

    

<script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
</body>






<script>
        $(function () {
          $('#productos_table').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
          })
        })
</script>
