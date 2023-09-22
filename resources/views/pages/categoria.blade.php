@extends('layouts.app')
@section('title', 'Book | Categoria')
@section('content')
<div class="page-content">

    <!-- Start home -->
    <section class="page-title-box">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h3 class="mb-4">Categorias de Libros PDF</h3>
                        <div class="page-next">
                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Categorias </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- end home -->

    <!-- START SHAPE -->
    <div class="position-relative" style="z-index: 1">
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                <path fill="" fill-opacity="1"
                    d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>
        </div>
    </div>
    <!-- END SHAPE -->


    <!-- START CATEGORIES -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                    
                      <p class="badge bg-warning fs-14 mb-2">Nuevos Libros</p>
                      
                      <h4>Explora por categorías</h4>
                      
                      <p class="text-muted">Encuentra tu próxima lectura navegando por categorías. Descarga gratis los libros que más te interesen.</p>
                  
                    </div>
                  </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card job-Categories-box bg-light border-0">
                        <div class="card-body p-4">
                            <ul class="list-unstyled job-Categories-list mb-0">
                                <li>
                                    <a href="{{ route('lista_accion_aventura') }}" class="primary-link">Acción y aventura <span class="badge bg-info-subtle text-info float-end">4</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('lista_ciencia_ficcion') }}" class="primary-link">Ciencia ficción <span class="badge bg-info-subtle text-info float-end">4</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('lista_fantasia') }}" class="primary-link">Fantasía <span class="badge bg-info-subtle text-info float-end">4</span></a>
                                </li>
                                <li>
                                    <a href="#" class="primary-link">Novela negra o policiaca <span class="badge bg-info-subtle text-info float-end">0</span></a>
                                </li>
                                <li>
                                    <a href="#" class="primary-link">Novela romántica <span class="badge bg-info-subtle text-info float-end">0</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-6">
                    <div class="card job-Categories-box bg-light border-0">
                        <div class="card-body p-4">
                            <ul class="list-unstyled job-Categories-list mb-0">
                                <li>
                                    <a href="#" class="primary-link">Terror y sobrenatural <span class="badge bg-info-subtle text-info float-end">0</span></a>
                                </li>
                                <li>
                                    <a href="#" class="primary-link">Acción y aventura <span class="badge bg-info-subtle text-info float-end">0</span></a>
                                </li>
                                <li>
                                    <a href="#" class="primary-link">Literatura clásica <span class="badge bg-info-subtle text-info float-end">0</span></a>
                                </li>
                                <li>
                                    <a href="#" class="primary-link">Cuentos <span class="badge bg-info-subtle text-info float-end">0</span></a>
                                </li>
                                <li>
                                    <a href="#" class="primary-link">Poesía <span class="badge bg-info-subtle text-info float-end">0</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><!--end container-->
    </section>
    <!-- END CATEGORIES -->
    
    <!-- START CTA -->
    <section class="section">
        <div class="container">
      
          <div class="row justify-content-center">
            <div class="section-title text-center">
      
              <h3 class="title mb-4 pb-2">Descubre miles de libros electrónicos gratis para leer sin límites</h3>
      
              <p class="para-desc text-muted mx-auto">Encuentra títulos en todas las categorías y autores. Descarga los ebooks que quieras sin necesidad de registro.</p>
      
              <div class="mt-4">
                
                <a href="/" class="btn btn-primary btn-hover mt-2">
                  <i class="uil uil-book"></i> Buscar Libros PDF
                </a>
      
              </div>
      
            </div>
          </div><!--end row-->
      
        </div><!--end container-->
      </section>
    <!-- END CTA -->

</div>
@endsection