<!doctype html>
<html lang="es">
<head>
        
        
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Libros PDF" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon-32x32.png') }}">

        <!-- Choise Css -->
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/choices.min.css') }}">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/swiper-bundle.min.css') }}">
        
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="{{ Vite::asset('resources/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet">
        
        <!-- App Css-->
        <link href="{{ Vite::asset('resources/css/app.min.css') }}" id="app-style" rel="stylesheet" />
        <!--Custom Css-->

        <link rel="stylesheet" href="{{ Vite::asset('resources/css/fontawesome.css') }}">

    </head>

    <body >
         <!--start page Loader -->
         <div id="preloader">
            <div id="status">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
            </div>
        </div>
        <!--end page Loader -->

        <!-- Begin page -->
        <div>

            <!--Navbar Start-->
            <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
                <div class="container-fluid custom-container">
                    <a class="navbar-brand text-dark fw-bold me-auto" href="index.html">
                        <img src="{{ Vite::asset('resources/img/logo.png') }}" height="70" alt="" class="logo-dark" />
                        <img src="{{ Vite::asset('resources/img/logo.png') }}" height="70" alt="" class="logo-light" />
                    </a>
                    <div>
                        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="Toggle navigation">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mx-auto navbar-center">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                              <a href="{{ route('categoria') }}" class="nav-link">Categorias</a>
                            </li>
                            <li class="nav-item">
                              <a href="biografias.html" class="nav-link">Biografias</a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover">
                                <a class="nav-link" href="javascript:void(0)" id="productdropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Blog 
                                    <i class="fa-solid fa-circle-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-center" aria-labelledby="productdropdown">
                                    <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                    <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                                    <li><a class="dropdown-item" href="blog-modern.html">Blog Modern</a></li>
                                    <li><a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
                                    <li><a class="dropdown-item" href="blog-details.html">Blog details</a></li>
                                    <li><a class="dropdown-item" href="blog-author.html">Blog Author</a></li>
                                </ul>
                            </li><!--end dropdown-->
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">Contacto</a>
                            </li>
                        </ul><!--end navbar-nav-->
                    </div>
                    <!--end navabar-collapse-->
                </div>
                <!--end container-->
            </nav>
            <!-- Navbar End -->

            <div class="main-content">

                @yield('content')
                <!-- End Page-content -->

                <!-- START FOOTER -->
                <section class="bg-footer">
                    <div class="container">
                      <div class="row">
                  
                        <div class="col-lg-4">
                          <div class="footer-item mt-4 mt-lg-0 me-lg-5">
                            <h4 class="text-white mb-4">Ebook Paradise</h4>
                            <p class="text-white-50">Encuentra miles de libros electrónicos gratuitos para descargar sin registro. La mejor biblioteca de ebooks en español.</p>
                            
                            <p class="text-white mt-3">Síguenos en:</p>
                            
                            <ul class="footer-social-menu list-inline mb-0">
                              <li class="list-inline-item">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              </li>
                              <li class="list-inline-item">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-2 col-6">
                          <div class="footer-item mt-4 mt-lg-0">
                            <p class="fs-16 text-white mb-4">Categorías</p>
                            <ul class="list-unstyled footer-list mb-0">
                              <li><a href="/ficcion"><i class="mdi mdi-chevron-right"></i>Ficción</a></li>
                              <li><a href="/literatura"><i class="mdi mdi-chevron-right"></i>Literatura</a></li>
                              <li><a href="/romance"><i class="mdi mdi-chevron-right"></i>Romance</a></li>
                              <li><a href="/thriller"><i class="mdi mdi-chevron-right"></i>Thriller</a></li>
                            </ul>
                          </div>
                        </div><!--end col-->
                  
                        <div class="col-lg-3 col-6">
                          <div class="footer-item mt-4 mt-lg-0">
                            <p class="fs-16 text-white mb-4">Acerca de</p>
                            <ul class="list-unstyled footer-list mb-0">
                              <li><a href="/nosotros"><i class="mdi mdi-chevron-right"></i> Sobre Nosotros</a></li>
                              <li><a href="/terminos"><i class="mdi mdi-chevron-right"></i> Términos de Uso</a></li>
                              <li><a href="/contacto"><i class="mdi mdi-chevron-right"></i>Contáctanos</a></li>
                            </ul>
                          </div>
                        </div><!--end col-->
                        
                        <div class="col-lg-3 col-6">
                          <div class="footer-item mt-4 mt-lg-0">
                            <p class="fs-16 text-white mb-4">Soporte</p>
                            <ul class="list-unstyled footer-list mb-0">
                              <li><a href="/faqs"><i class="mdi mdi-chevron-right"></i>Preguntas Frecuentes</a></li>
                              <li><a href="/policy"><i class="mdi mdi-chevron-right"></i>Política de Privacidad</a></li>
                            </ul>
                          </div>
                        </div><!--end col-->
                        
                      </div><!--end row-->
                    </div><!--end container-->
                  </section>
                <!-- END FOOTER -->

                <!-- START FOOTER-ALT -->
                <div class="footer-alt">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <p class="text-white-50 text-center mb-0">
                            <script>document.write(new Date().getFullYear())</script> © Ebook PDF Paradise - Tu biblioteca de libros electrónicos gratis. 
                            
                          </p>
                        </div><!--end col-->
                        
                        <div class="col-lg-12">
                          <p class="text-white-50 text-center mb-0">
                            Diseñado con ♥ por Sinche
                          </p>  
                        </div><!--end col-->
                        
                      </div><!--end row-->
                    </div><!--end container-->
                  </div>
                <!-- END FOOTER -->
                
                <!-- Style switcher -->
                <div id="style-switcher" onclick="toggleSwitcher()" style="left: -165px;">
                    <div>
                        <h6>Select your color</h6>
                        <ul class="pattern list-unstyled mb-0">
                            <li>
                                <a class="color-list color1" href="javascript: void(0);" onclick="setColorGreen()"></a>
                            </li>
                            <li>
                                <a class="color-list color2" href="javascript: void(0);" onclick="setColor('blue')"></a>
                            </li>
                            <li>
                                <a class="color-list color3" href="javascript: void(0);" onclick="setColor('green')"></a>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <h6>Light/dark Layout</h6>
                            <div class="text-center mt-3">
                                <!-- light-dark mode -->
                                <a href="javascript: void(0);" id="mode" class="mode-btn text-white rounded-3">
                                    <i class="uil uil-brightness mode-dark mx-auto"></i>
                                    <i class="uil uil-moon mode-light"></i>
                                </a>
                                <!-- END light-dark Mode -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end switcher-->

                <!--start back-to-top-->
                <button onclick="topFunction()" id="back-to-top">
                    <i class="fa-solid fa-arrow-up"></i>
                </button>
                <!--end back-to-top-->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src=""{{ Vite::asset('resources/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ Vite::asset('resources/js/bundle.js') }}"></script>

        <!-- Choice Js -->
        
        <!-- Swiper Js -->
        <script src="{{ Vite::asset('resources/js/swiper-bundle.min.js') }}"></script>

        <!-- Job-list Init Js -->

        <!-- Switcher Js -->
        <script src="{{ Vite::asset('resources/js/switcher.init.js') }}"></script>

        <script src="{{ Vite::asset('resources/js/index.init.js') }}"></script>
        
        <script src="{{ Vite::asset('resources/js/app-t.js') }}"></script>

    </body>
    @yield('scripts')
</html>
