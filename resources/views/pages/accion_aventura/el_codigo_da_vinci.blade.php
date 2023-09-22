@extends('layouts.app')
@section('title', 'Book | Jurassic Park')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">El Código Da Vinci - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_accion_aventura') }}">Acción y Aventura</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">El Código Da Vinci</li>
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
                                El Código Da Vinci por Dan Brown
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://images.cdn2.buscalibre.com/fit-in/360x360/76/2c/762c4dac084a85a81a0d7062bc00fad7.jpg" alt="Portada del libro El Código Da Vinci de Dan Brown">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Dan Brown</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Thriller, Misterio, Suspense</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2003</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>The Da Vinci Code</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"El Código Da Vinci" es un thriller de misterio escrito por Dan Brown, publicado en 2003, que combina elementos de historia, arte, religión y conspiración en una trama intrigante que ha cautivado a lectores de todo el mundo. La novela comienza con el asesinato de un destacado curador del Museo del Louvre en París, Jacques Sauniere, quien antes de morir, deja una serie de pistas en forma de símbolos y códigos misteriosos. A partir de este punto, el profesor de simbología Robert Langdon y la criptógrafa Sophie Neveu se embarcan en una frenética búsqueda para descifrar estos enigmas y descubrir una verdad que ha sido ocultada durante siglos.</p>
                                    <p class="text-muted">La narrativa se desarrolla en torno a la teoría de que Jesús de Nazaret no solo fue un líder religioso, sino también un ser humano casado con María Magdalena y que tuvo descendencia. Esta teoría es conocida como la hipótesis del "Santo Grial", que sostiene que la línea de sangre de Jesús ha sido preservada en secreto a lo largo de los siglos.</p>
                                    <p class="text-muted">A medida que Langdon y Neveu avanzan en su investigación, se ven atrapados en una trama que involucra a una sociedad secreta llamada el Priorato de Sión, cuyos miembros incluyen a figuras históricas como Leonardo da Vinci y Sir Isaac Newton. También descubren que la Iglesia Católica está desesperada por ocultar la verdad y que están dispuestos a cualquier cosa para proteger su versión de la historia.</p>
                                    <p class="text-muted">Uno de los aspectos más destacados de la novela es su capacidad para mezclar hechos históricos y arte con una trama de suspenso convincente. A medida que los personajes descifran códigos y pistas en pinturas famosas como "La última cena" de Leonardo da Vinci, el lector es llevado a un emocionante viaje a través de la historia del arte y la cultura europea.</p>
                                    <p class="text-muted">La relación entre Langdon y Neveu también agrega profundidad a la historia. Ambos personajes tienen antecedentes complejos y sus propios secretos que se desvelan gradualmente a lo largo de la trama, lo que les hace más cercanos al lector.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "El Código Da Vinci" es una novela que cuestiona las creencias tradicionales y desafía las estructuras establecidas, lo que la convierte en una obra controvertida pero fascinante. Su éxito radica en su capacidad para mantener a los lectores pegados a sus páginas mientras exploran los misterios del arte, la religión y la historia. Es una obra que ha dejado una marca duradera en la literatura contemporánea y que sigue siendo objeto de discusión y debate en todo el mundo. Si buscas una lectura que te haga reflexionar y te mantenga en vilo hasta la última página, "El Código Da Vinci" es una elección excepcional.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Dan Brown es un autor estadounidense renombrado por sus novelas de intriga y misterio que exploran temas históricos y religiosos. Su obra más destacada, "El Código Da Vinci", se convirtió en un fenómeno literario mundial y lo catapultó a la fama. Con su estilo ágil y tramas llenas de suspense, Brown ha entretenido a millones de lectores en todo el mundo, convirtiéndose en una figura influyente en la literatura contemporánea.
                                    </p>
                                </div>
                                <div>
                                    <div class="alert alert-secondary text-center text-white" role="alert">
                                        Paginas relacionadas
                                    </div>
                                    <div class="job-box bookmark-post card mt-4">
                                        <div class="p-4">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="mt-3 mt-lg-0">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><strong>Jurassic Park</strong> por
                                                                </p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i
                                                                        class="mdi mdi-map-marker"></i>Michael Crichton</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                    <div class="job-box bookmark-post card mt-4">
                                        <div class="p-4">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="mt-3 mt-lg-0">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><strong>El Hobbit</strong> por
                                                                </p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i
                                                                        class="mdi mdi-map-marker"></i>J.R.R. Tolkien</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!--end row-->
                                        </div>
                                    </div>
                                    <div class="job-box bookmark-post card mt-4">
                                        <div class="p-4">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="mt-3 mt-lg-0">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><strong>Los Juegos del Hambre</strong> por
                                                                </p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i
                                                                        class="mdi mdi-map-marker"></i>Suzanne Collins</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!--end row-->
                                        </div>
                                    </div>
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Adéntrate en el intrigante mundo de la historia y la conspiración en el resumen de "El Código Da Vinci"! 📖🔍 ¡No te pierdas esta fascinante lectura! ✨🔎'])
    </div>
@endsection
