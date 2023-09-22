@extends('layouts.app')
@section('title', 'Book | 1984')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">1984 - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_ciencia_ficcion') }}">Ciencia Ficción</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">1984</li>
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
                                1984 de George Orwell
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://librosdelzorrorojo.pe/cdn/shop/products/BOOVI-30071_9788412270518_7228e551-ae88-4c07-b662-33834b3a5bab.jpg" alt="Portada del libro 1984 de George Orwell">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>George Orwell</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Novela distópica | Ciencia ficción</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1949</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>1984</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"1984" es una obra maestra literaria que presenta una visión aterradora de un futuro distópico en el que la libertad individual y la verdad han sido suprimidas en favor de un régimen totalitario. La historia está ambientada en un mundo en constante vigilancia, donde el gobierno, liderado por el Partido y su líder omnipresente, Big Brother, controla todos los aspectos de la vida de los ciudadanos.</p>
                                    <p class="text-muted">A medida que la relación de Winston y Julia se desarrolla en secreto, también lo hace su resistencia contra el régimen. Ambos buscan momentos de intimidad y libertad en un mundo donde la privacidad es inexistente y el pensamiento disidente está prohibido. Juntos, intentan desafiar al Partido y descubrir la verdad detrás de su mundo distópico.</p>
                                    <p class="text-muted">Uno de los aspectos más impactantes de "1984" es la manipulación del lenguaje por parte del Partido. El término "doblepensar" se utiliza para describir la capacidad de mantener dos ideas contradictorias en la mente al mismo tiempo, lo que es esencial para el control del Partido sobre la población. La notoria consigna del Partido es "La guerra es la paz, la libertad es esclavitud, la ignorancia es fuerza", ejemplificando cómo el Partido utiliza el lenguaje para invertir el significado de las palabras y controlar el pensamiento de las personas.</p>
                                    <p class="text-muted">La novela también introduce conceptos como la habitación 101, un lugar de tortura psicológica donde cada individuo enfrenta sus peores miedos y traumas. Winston finalmente es capturado y llevado a la habitación 101, donde enfrenta su propia degradación y traición a sus creencias.</p>
                                    <p class="text-muted">La omnipresencia de Big Brother es un elemento aterrador de la historia, ya que representa la vigilancia constante y el control del gobierno sobre la población. Los ciudadanos son monitoreados a través de pantallas de televisor en sus propias casas y espacios públicos, lo que crea una atmósfera de paranoia y conformidad forzada.</p>
                                    <p class="text-muted">La novela culmina en un acto de traición y desesperación por parte de Winston y Julia, quienes, bajo tortura, traicionan sus creencias y se someten al Partido. Winston finalmente ama a Big Brother, lo que marca la completa destrucción de su identidad y su capacidad de resistir al régimen totalitario.</p>
                                    <p class="text-muted">"1984" es una poderosa crítica a la tiranía, la manipulación del lenguaje y la pérdida de la libertad individual en un mundo gobernado por un estado totalitario. La novela ha influido en la política, la filosofía y la cultura popular a lo largo de los años y sigue siendo relevante en la discusión sobre la privacidad, la vigilancia y el poder del gobierno en la sociedad contemporánea. A través de su escritura impactante y sus personajes memorables, George Orwell nos recuerda la importancia de la verdad, la libertad y la resistencia frente a la opresión.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "1984" de George Orwell es una obra literaria fundamental que ofrece una visión oscura y perturbadora de un mundo distópico gobernado por un régimen totalitario. A través de la vida del protagonista, Winston Smith, la novela explora temas de represión, manipulación del lenguaje, vigilancia y la lucha desesperada por la libertad individual en un entorno opresivo. Orwell pinta un retrato inquietante de una sociedad donde la verdad es maleable, la privacidad es una ilusión y la lealtad al Partido suprime incluso los deseos y creencias más íntimos. "1984" es una crítica implacable al poder absoluto y un recordatorio atemporal de la importancia de la verdad y la resistencia ante la opresión.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        George Orwell, seudónimo de Eric Arthur Blair, fue un escritor británico cuya obra literaria y ensayos políticos han dejado una huella indeleble en la literatura y el pensamiento crítico del siglo XX. Sus obras, como "1984" y "Rebelión en la granja," exploran temas de totalitarismo, represión y manipulación del lenguaje, y continúan siendo relevantes como poderosas advertencias sobre los peligros de la opresión y la pérdida de la libertad individual en la sociedad. La claridad de su estilo y su compromiso inquebrantable con la verdad lo convierten en un autor fundamental para comprender los desafíos políticos y sociales de su tiempo y de la actualidad.
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Acompáñame en un viaje aterrador a través de la distopía de "1984"! 🌆📚 Sumérgete en este mundo oscuro y totalitario de George Orwell. 📖🌟'])       
    </div>
@endsection
