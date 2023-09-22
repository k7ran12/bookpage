@extends('layouts.app')
@section('title', 'Search Book')
@section('content')
    <div class="page-content">
        <!-- START HOME -->
        <section class="bg-home" id="home">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center text-white mb-5">
                            <h1 class="display-5 fw-semibold mb-3">Explore entre una vasta selección de <span
                                    class="text-warning fw-bold">10,000+</span>
                                    libros disponibles.</h1>
                            <p class="fs-17">Encuentre libros pdf facil y enriquezca su experiencia de lectura.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                
                    <div class="registration-form">
                        <div class="row g-0">
                            <div class="col-lg-9">
                                <div class="filter-search-form filter-border mt-3 mt-lg-0">
                                    <i class="uil uil-briefcase-alt"></i>
                                    <input type="search" id="book-title" class="form-control filter-input-box"
                                        placeholder="Nombre del libro">
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-3">
                                <div class="mt-3 mt-lg-0 h-100">
                                    <button class="btn btn-primary submit-btn w-100 h-100" type="button" id="search-book"><i
                                            class="uil uil-search me-1"></i> Buscar</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->

                <div class="row">
                    <div class="col-lg-12">
                        <ul class="treding-keywords list-inline mb-0 text-white-50 mt-4 mt-lg-3 text-center">
                            <li class="list-inline-item text-white"><i
                                    class="mdi mdi-tag-multiple-outline text-warning fs-18"></i> Palabras clave de tendencia:</li>
                            <li class="list-inline-item">Libros PDF gratis,</li>
                            <li class="list-inline-item">Descargar libros en PDF,</li>
                            <li class="list-inline-item">Biblioteca virtual PDF,</li>
                            <li class="list-inline-item">Resumen de libros</li>
                        </ul>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- End Home -->

        <!-- START SHAPE -->
        <div class="position-relative">
            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 220">
                    <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                        <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z" fill="rgba(255, 255, 255, 1)">
                        </path>
                    </g>
                    <defs>
                        <mask id="SvgjsMask1004">
                            <rect width="1440" height="250" fill="#ffffff"></rect>
                        </mask>
                    </defs>
                </svg>
            </div>
        </div>
        <!-- END SHAPE -->

        <!-- START CATEGORY -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center">
                            <h3 class="title">Las mejores categorias de libros </h3>
                            <p class="text-muted">Busca en esta plataforma para encontrar una amplia selección de categorías de libros y descubre tus lecturas favoritas en diferentes géneros y temas.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="javascript:void(0)" class="text-dark stretched-link">
                                    <h5 class="fs-18">Novelas románticas</h5>
                                </a>
                            </div>
                        </div><!--end popu-category-box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="job-categories.html" class="text-dark stretched-link">
                                    <h5 class="fs-18">Suspenso/thriller</h5>
                                </a>
                            </div>
                        </div><!--end popu-category-box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="job-categories.html" class="text-dark stretched-link">
                                    <h5 class="fs-18">Juvenil/Young</h5>
                                </a>
                            </div>
                        </div><!--end popu-category-box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="job-categories.html" class="text-dark stretched-link">
                                    <h5 class="fs-18">Fantasía</h5>
                                </a>
                            </div>
                        </div><!--end popu-category-box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="job-categories.html" class="text-dark stretched-link">
                                    <h5 class="fs-18">Ciencia ficción</h5>
                                </a>
                            </div>
                        </div><!--end popu-category-box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="job-categories.html" class="text-dark stretched-link">
                                    <h5 class="fs-18">Policiaco/crimen</h5>
                                </a>
                            </div>
                        </div><!--end popu-category-box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="job-categories.html" class="text-dark stretched-link">
                                    <h5 class="fs-18">Autoayuda</h5>
                                </a>
                            </div>
                        </div><!--end popu-category-box-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="popu-category-box rounded text-center">
                            <div class="popu-category-icon icons-md">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="popu-category-content mt-4">
                                <a href="job-categories.html" class="text-dark stretched-link">
                                    <h5 class="fs-18">Historia</h5>
                                </a>
                            </div>
                        </div><!--end popu-category-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-5 text-center">
                            <a href="{{ route('categoria') }}" class="btn btn-primary btn-hover">Explorar todas las categorías <i
                                    class="uil uil-arrow-right"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END CATEGORY -->

        <!-- START JOB-LIST -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title">Ultimos libros buscados</h4>
                            <p class="text-muted mb-1">Aquí encontrarás una lista de los libros buscados.
                            </p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <!--end row-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="recent-jobs" role="tabpanel"
                                aria-labelledby="recent-jobs-tab">
                                <div class="job-box card mt-4">
                                    <div class="bookmark-label text-center">
                                        <a href="javascript:void(0)" class="text-white align-middle"><i
                                                class="mdi mdi-star"></i></a>
                                    </div>
                                    <div class="p-4">
                                        <div class="row align-items-center">
                                            <div class="col-md-2">
                                                <div class="text-center mb-4 mb-md-0">
                                                    <a href="company-details.html"><img
                                                            src="" alt=""
                                                            class="img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-3">
                                                <div class="mb-2 mb-md-0">
                                                    <h5 class="fs-18 mb-1"><a href="job-details.html"
                                                            class="text-dark">La cuidad y los perros</a>
                                                    </h5>
                                                    <p class="text-muted fs-14 mb-0"></p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-3">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0">
                                                        <i class="mdi mdi-map-marker text-primary me-1"></i>
                                                    </div>
                                                    <p class="text-muted mb-0"></p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-2">
                                                <div>
                                                    <p class="text-muted mb-2"><span
                                                            class="text-primary"></span></p>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-2">
                                                <div>
                                                    <span class="badge bg-success-subtle text-success fs-13 mt-1">Descargar</span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                                <!--end job-box-->
                            </div>
                            <!--end recent-jobs-tab-->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!-- END JOB-LIST -->

        <!-- START PROCESS -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title me-5">
                            <h3 class="title">Como funciona</h3>
                            <p class="text-muted">Encuentra y descarga miles de libros PDF gratis sin necesidad de registrarte.</p>
                            <div class="process-menu nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                    href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">
                                    <div class="d-flex">
                                        <div class="number flex-shrink-0">
                                            1
                                        </div>
                                        <div class="flex-grow-1 text-start ms-3">
                                            <h5 class="fs-18">Busca por categoría</h5>
                                            <p class="text-muted mb-0">Navega nuestra amplia biblioteca organizada por géneros como ficción, romance, ciencia, etc.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">
                                    <div class="d-flex">
                                        <div class="number flex-shrink-0">
                                            2
                                        </div>
                                        <div class="flex-grow-1 text-start ms-3">
                                            <h5 class="fs-18">Encuentra tu libro</h5>
                                            <p class="text-muted mb-0">Utiliza la barra de búsqueda o explora las categorías para encontrar el libro que buscas.</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">
                                    <div class=" d-flex">
                                        <div class="number flex-shrink-0">
                                            3
                                        </div>
                                        <div class="flex-grow-1 text-start ms-3">
                                            <h5 class="fs-18">Descarga el PDF</h5>
                                            <p class="text-muted mb-0">Con un simple clic descarga el archivo PDF del libro sin tener que crear una cuenta.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <img src="{{ asset('resources/img/pexels-said-18246580.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <img src="{{ asset('resources/img/pexels-necip-duman-18247044.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <img src="{{ asset('resources/img/pexels-cottonbro-studio-5053847.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div> <!--end row-->
            </div><!--end container-->
        </section>
        <!-- END PROCESS -->

        <!--START CTA-->
        <section class="section bg-light">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-7">
                  <div class="text-center">
                    <h2 class="text-primary mb-4">Explore nuestra biblioteca con varios resumenes de libros seleccionados</h2>
                    
                    <p class="text-muted">Encuentra una amplia selección de libros en todas las categorías. Desde bestsellers, clásicos, ciencia ficción hasta textos académicos.</p>
                    
                    <div class="mt-4 pt-2">
                       <a href="{{ route('categoria') }}" class="btn btn-primary btn-hover">Explora los libros <i class="uil uil-book-open align-middle ms-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!--END CTA-->
    </div>
    <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="modalResultBooks" tabindex="-1" aria-labelledby="modalResultBooksLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalResultBooksLabel">Resultados de busqueda</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script src="{{ asset('resources/js/data.js') }}"></script>
@endsection
