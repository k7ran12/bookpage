@extends('layouts.app')
@section('title', 'Book | Lista - Ciencia ficción')
@section('content')
<div class="page-content">

    <!-- Start home -->
    <section class="page-title-box">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h3 class="mb-4">Ciencia ficción</h3>
                        <div class="page-next">
                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('categoria') }}">Categorias</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Ciencia ficción</li>
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
                        <p class="badge bg-success fs-14 mb-2">Descubre</p>
                        <h4>Ciencia Ficción</h4>
                        <p class="text-muted">Embárcate en emocionantes travesías a través de futuros distópicos, viajes en el tiempo y encuentros con seres extraterrestres con nuestros resúmenes de libros de ciencia ficción. Desde conceptos innovadores de tecnología hasta exploraciones de la condición humana en mundos futuristas, encuentra historias que te desafiarán y te llevarán a lugares inexplorados.</p>
                    </div>                                                           
                  </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card job-Categories-box bg-light border-0">
                        <div class="card-body p-4">
                            <ul class="list-unstyled job-Categories-list mb-0 text-center">
                                <li>
                                    <a href="{{ route('dune') }}" class="primary-link"><strong>Dune</strong> - Frank Herbert</a>
                                </li>
                                <li>
                                    <a href="{{ route('1984') }}" class="primary-link"><strong>1984</strong> - George Orwell</a>
                                </li>
                                <li>
                                    <a href="{{ route('neuromante') }}" class="primary-link"><strong>Neuromante</strong> - William Gibson</a>
                                </li>
                                <li>
                                    <a href="{{ route('fundacion') }}" class="primary-link"><strong>Fundación</strong> - Isaac Asimov</a>
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
    @include('layouts.section_resumenes')
    <!-- END CTA -->

</div>
@endsection