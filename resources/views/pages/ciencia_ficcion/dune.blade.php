@extends('layouts.app')
@section('title', 'Book | Dune')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">Dune - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_ciencia_ficcion') }}">Ciencia Ficción</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dune</li>
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


        <!-- START CANDIDATE-DETAILS -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card ms-lg-4 mt-4 mt-lg-0">
                            <div class="alert alert-secondary text-center text-white" role="alert">
                                Dune de Frank Herbert 
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://www.crisol.com.pe/media/catalog/product/cache/cf84e6047db2ba7f2d5c381080c69ffe/9/7/9789877254112_ui5w14p1nwjvwuq8.jpg" alt="Portada del libro Dune de Frank Herbert">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td> Frank Herbert</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Ciencia ficción</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1965</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Dune</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"Dune" nos transporta al planeta desértico de Arrakis, también conocido como Dune, el único lugar en el universo donde se encuentra la especia melange, una sustancia altamente codiciada que otorga habilidades mentales extraordinarias a quienes la consumen. La especia melange es esencial para la navegación interestelar, lo que la convierte en el recurso más valioso de la galaxia y en el epicentro de una compleja trama política.</p>
                                    <p class="text-muted">La historia comienza con la Casa Atreides, una noble familia encabezada por el Duque Leto Atreides, siendo asignada por el Padishah Emperador a gobernar Arrakis. Esta decisión provoca una serie de eventos que desencadenan una lucha por el poder en el planeta.</p>
                                    <p class="text-muted">El joven Paul Atreides, el hijo del Duque Leto, se convierte en el protagonista central de la novela. Paul posee habilidades especiales debido a su entrenamiento y linaje, incluyendo la habilidad de ver el futuro a través de visiones. A medida que la trama avanza, Paul se convierte en un líder carismático y espiritual para los habitantes nativos de Arrakis, los Fremen, quienes veneran la especia melange como una parte esencial de su cultura y religión.</p>
                                    <p class="text-muted">La novela también presenta a otros personajes memorables, como Lady Jessica, la madre de Paul y una poderosa figura dentro de la orden de las Bene Gesserit; Stilgar, un líder Fremen; y el maestro espía Thufir Hawat, entre otros. Cada uno de estos personajes desempeña un papel fundamental en la trama intrincada.</p>
                                    <p class="text-muted">El conflicto central de la novela gira en torno a la rivalidad entre la Casa Atreides y la Casa Harkonnen, quienes antes gobernaban Arrakis. La Casa Harkonnen, dirigida por el malévolo Barón Vladimir Harkonnen, está decidida a recuperar el control de la especia melange a cualquier costo.</p>
                                    <p class="text-muted">A medida que la trama se desarrolla, se exploran temas profundos como la política, la religión, la ecología y la evolución de la humanidad en un entorno hostil. La historia de "Dune" es una reflexión sobre el poder, la ambición, la diversidad cultural y la adaptación a un mundo desafiante.</p>
                                    <p class="text-muted">La prosa de Frank Herbert es rica en detalles y profundidad, creando un universo completamente convincente. La novela es conocida por su intrincada construcción de mundos y sistemas de creencias, así como por su enfoque en la psicología de los personajes.</p>
                                    <p class="text-muted">"Dune" es una obra que ha influido en la ciencia ficción y la literatura en general de manera significativa. Ha sido adaptada a múltiples medios, incluyendo cine y televisión, y continúa siendo una lectura obligada para los amantes del género. La historia de Paul Atreides en este mundo desértico sigue siendo un viaje épico que fascina a los lectores con su profundidad y complejidad.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Dune" de Frank Herbert es una obra de ciencia ficción monumental que transporta a los lectores a un mundo desértico y complejo donde la política, la religión y la ecología se entrelazan en una trama épica. La historia de Paul Atreides, un joven noble con habilidades excepcionales, es una odisea fascinante llena de intriga y desafíos. Herbert crea un universo rico en detalles y profundidad, explorando temas profundos mientras te sumerge en un mundo donde la especia melange es la clave de todo. "Dune" es una obra maestra que ha dejado una huella imborrable en la ciencia ficción y continúa siendo una lectura esencial para quienes buscan una narrativa épica y reflexiva en un entorno alienígena.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Frank Herbert (1920-1986) fue un prolífico escritor de ciencia ficción estadounidense conocido por su capacidad para crear mundos complejos y explorar temas profundos a través de sus obras. Nacido en Tacoma, Washington, Herbert sirvió en la Segunda Guerra Mundial antes de embarcarse en una carrera literaria. Su obra más icónica, "Dune", se convirtió en un hito del género de la ciencia ficción, explorando la política, la religión, la ecología y la evolución humana en un universo imaginario. Herbert dejó un legado duradero en la literatura de ciencia ficción y continúa siendo una figura influyente en el género, recordado por su habilidad para crear mundos ricos en detalle y profundidad filosófica.
                                    </p>
                                </div>
                                <div>
                                    <div class="alert alert-secondary text-center text-white" role="alert">
                                        Paginas relacionadas
                                    </div>
                                    @include('pages.ciencia_ficcion.recomendar')
                                    <hr>
                                    @include('layouts.nota')
                                </div>
                            </div><!-- card body end -->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- END CANDIDATE-DETAILS -->
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Embárcate en un viaje épico a través del desierto de Arrakis con el resumen de "Dune"! 🌌📚 ¡No te pierdas esta emocionante aventura de ciencia ficción! 📖✨'])       
    </div>
@endsection
