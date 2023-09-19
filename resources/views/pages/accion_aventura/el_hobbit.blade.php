@extends('layouts.app')
@section('title', 'Book | El hobbit')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">El Hobbit - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_accion_aventura') }}">Acción y Aventura</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">El Hobbit</li>
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
                                El Hobbit de J.R.R. Tolkien
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://images.cdn3.buscalibre.com/fit-in/360x360/c2/8b/c28b72f3a4cf1b32e1e65678c0048b60.jpg" alt="">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>J.R.R. Tolkien</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Novela de fantasía</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1937</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td> The Hobbit o There and Back Again </td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La historia comienza con la representación de la Comarca, un país próspero y tranquilo donde vive el protagonista de nuestra aventura: Bilbo Bolsón. Se trata de un hobbit, una criatura pequeña (del tamaño de un niño a los ojos de los hombres) que disfruta de la tranquilidad, la comida (comen varias veces al día, más de lo habitual para nosotros), las siestas y la buena vida. Lo último que desea es tener que vivir una aventura.</p>
                                    <p class="text-muted">Pero un día el gran mago Gandalf (muy poderoso y con secretos que Bilbo ni siquiera puede imaginar) irrumpe en la casa del hobbit. Poco después comienzan a aparecer en la puerta de la casa de Bilbo varios enanos, venidos de tierras lejanas, que parecen haber sido invitados sin su consentimiento. En total, trece enanos terminan en la casa del hobbit, liderados por Thorin Escudo de Roble. Gandalf también termina apareciendo en esta inesperada reunión, desvelando su meta: Thorin Escudo de Roble y sus doce acompañantes fueron una vez enanos importantes del reino de la conocida como Montaña Solitaria, que ahora habita el terrible dragón escupefuegos Smaug. La idea es regresar allí y hacerse con el control del gran tesoro que ahora el dragón considera como suyo.</p>
                                    <p class="text-muted">Para ello contarán con Bilbo Bolsón como saqueador, algo planteado por Gandalf y de lo que el Hobbit no está muy de acuerdo en un primer momento. Bilbo Bolsón, sin embargo, termina aceptando con muchas ganas de vivir su primera gran aventura lejos de la Comarca. En su viaje hasta la Montaña Solitaria se enfrentan a decenas de peligros, como unos trolls que desean comérselos pero que terminan convirtiéndose en piedra tras discutir hasta la venida del sol cómo cocinarlos a todos de la mejor manera. También se enfrentan a orcos y huargos e incluso son apresados por los elfos del Bosque Negro, no muy amigos de los enanos.</p>
                                    <p class="text-muted">En una de estas aventuras Bilbo Bolsón se hace con un Anillo muy especial, que le roba (y posteriormente le gana en un concurso de adivinanzas) a una extraña criatura llamada Gollum. Al ponérselo, Bilbo descubre que este extraño artefacto le hace invisible. No conoce todavía (y tardará muchos años en hacerlo) el verdadero peligro que conllevará la posesión de ese Anillo.</p>
                                    <p class="text-muted">Los trece enanos, Bilbo y Gandalf terminan llegando a la Montaña Solitaria, donde consiguen expulsar al dragón Smaug que termina muriendo.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        El Hobbit es una obra maestra de la literatura fantástica que ha cautivado a millones de lectores en todo el mundo. Su narrativa envolvente, personajes memorables y su rica ambientación hacen de esta novela una lectura imprescindible para los amantes del género
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        J.R.R. Tolkien fue un escritor, poeta, filólogo, lingüista y profesor universitario británico. Nació el 3 de enero de 1892 en Bloemfontein, Sudáfrica, y falleció el 2 de septiembre de 1973 en Bournemouth, Inglaterra. Es conocido por ser el autor de obras de alta fantasía como El Hobbit y El Señor de los Anillos.
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
                                    <div class="job-box bookmark-post card mt-4">
                                        <div class="p-4">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="mt-3 mt-lg-0">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><strong>El Código Da Vinci</strong> por
                                                                </p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <p class="text-muted fs-14 mb-0"><i
                                                                        class="mdi mdi-map-marker"></i>Dan Brown</p>
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Sumérgete en el mágico mundo de la Tierra Media con el resumen de "El Hobbit"! 🧙‍♂️📚 ¡No te pierdas esta emocionante lectura! 📖✨'])       
    </div>
@endsection
