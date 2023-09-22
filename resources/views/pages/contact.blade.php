@extends('layouts.app')
@section('title', 'Book | Contacto')
@section('content')
<div class="page-content">

    <!-- Start home -->
    <section class="page-title-box">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h3 class="mb-4">Contacto</h3>
                        <div class="page-next">
                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li><i style="margin-top: 2.5px;margin-left: 8px;" class="fa-solid fa-caret-right"></i>
                                    <li class="breadcrumb-item active" aria-current="page"> Contacto</li>
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
                    d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
                </path>
            </svg>
        </div>
    </div>
    <!-- END SHAPE -->
    @if(session('success'))
        <div class="container">
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        </div>
    @endif

    <!-- START CONTACT-PAGE -->
    <section class="section">
        <div class="container">
      
          <div class="row align-items-center mt-5">
      
            <div class="col-lg-6">
              <div class="section-title mt-4 mt-lg-0">
                
                <h3 class="title">Contáctanos</h3>
                
                <p class="text-muted">Comienza a trabajar con nosotros para encontrar todo lo que necesitas y generar reconocimiento.</p>
      
                <form method="post" action="{{ route('enviar.correo') }}" name="formulario" id="formulario">
                  @csrf
      
                  <div class="row">
      
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa tu nombre">
                      </div>
                    </div>
      
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label">Email</label>  
                        <input type="email" name="email" id="email" class="form-control" placeholder="Ingresa tu email">
                      </div>
                    </div>
      
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label">Asunto</label>
                        <input type="text" name="asunto" id="asunto" class="form-control" placeholder="Ingresa un asunto"> 
                      </div>
                    </div>
      
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Ingresa tu mensaje"></textarea>
                      </div>
                    </div>
      
                  </div>
      
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>  
                  </div>
      
                </form>
      
              </div>
            </div>
      
            <div class="col-lg-5 ms-auto order-first order-lg-last">
              <div class="text-center">
                <img src="{{ asset('resources/img/contact.png') }}" class="img-fluid" alt="imagen contacto">
              </div>
      
              <div class="mt-4 pt-3">
                
                <div class="d-flex text-muted align-items-center mt-2">
                  <div class="flex-shrink-0 fs-22 text-primary">
                    <i class="uil uil-map-marker"></i>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <p class="mb-0">Av. Arequipa 320, Lince, Lima</p> 
                  </div>
                </div>
                
                <div class="d-flex text-muted align-items-center mt-2">
                  <div class="flex-shrink-0 fs-22 text-primary">
                    <i class="uil uil-envelope"></i>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <p class="mb-0">contacto@librosxyz.com</p>
                  </div>
                </div>
                
                <div class="d-flex text-muted align-items-center mt-2">
                  <div class="flex-shrink-0 fs-22 text-primary">
                    <i class="uil uil-phone-alt"></i>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <p class="mb-0">(01) 452 1245</p>
                  </div>
                </div>
                
              </div>
              
            </div>
      
          </div>
      
        </div>
    </section>
    <!-- START CONTACT-PAGE -->

    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.6533490872066!2d-77.03732!3d-12.067355300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8ebbc1732ad%3A0x911de275638cf57!2sAv.%20Arequipa%20320%2C%20Lima%2015046!5e0!3m2!1ses-419!2spe!4v1694917808687!5m2!1ses-419!2spe"
            height="350" style="border:0;width: 100%;" allowfullscreen="" loading="lazy"></iframe>
    </div>

</div>
@endsection
