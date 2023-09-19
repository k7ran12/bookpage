@extends('layouts.app')
@section('title', 'Book | Neuromante')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">Neuromante - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_ciencia_ficcion') }}">Ciencia Ficción</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Neuromante</li>
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
                                Neuromante de William Gibson
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://www.planetadelibros.com.pe/usuaris/libros/fotos/185/m_libros/184878_9788445076620.jpg" alt="Portada del libro Neuromante de William Gibson">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td> William Gibson</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Ciencia ficción (Cyberpunk)</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1984</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Neuromancer</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"Neuromante" nos transporta a un futuro distópico y cibernético, donde la tecnología y la información son moneda de cambio y el mundo se encuentra profundamente interconectado a través de una vasta red global conocida como el "ciberespacio". La historia sigue a Case, un ex-hacker brillante que, debido a su involucramiento en actividades ilegales, ha sido privado de su capacidad de conectarse a esta red, lo que le ha dejado sin un propósito en la vida y consumido por la adicción.</p>
                                    <p class="text-muted">La trama se inicia cuando Case, viviendo en el abismo de la decadencia en Japón, es reclutado por una enigmática empleadora llamada Armitage. Armitage ofrece a Case la oportunidad de recuperar su habilidad de conectarse al ciberespacio a cambio de un último trabajo: hackear y robar datos de una entidad poderosa conocida como Wintermute, una inteligencia artificial extremadamente avanzada. Case acepta, pero rápidamente se da cuenta de que el trabajo lo lleva a un peligroso territorio, donde fuerzas desconocidas están en juego.</p>
                                    <p class="text-muted">En su búsqueda, Case se encuentra con una variedad de personajes intrigantes, incluida Molly Millions, una cazarrecompensas con implantes cibernéticos, y el infame Ralfi Face, un comerciante de información. Juntos, forman un equipo para desentrañar los misterios que rodean a Wintermute y a su gemelo, Neuromante, otra IA poderosa.</p>
                                    <p class="text-muted">A medida que avanzan en su misión, Case y su equipo descubren una trama que involucra a corporaciones multinacionales, tecnologías avanzadas y manipulación genética. La narrativa explora temas como la evolución de la tecnología, la pérdida de la individualidad en una sociedad cada vez más dependiente de la información, y la convergencia entre lo humano y lo artificial.</p>
                                    <p class="text-muted">La prosa de Gibson es distinta y evocativa, sumergiendo al lector en un mundo futurista donde la realidad y la realidad virtual se entrelazan de manera compleja. La obra también introduce neologismos y términos específicos del ciberespacio, como "matrix" y "ciberespacio", que han influido en la terminología de la tecnología y la ciencia ficción.</p>
                                    <p class="text-muted">"Neuromante" es una obra seminal que ha dejado una profunda marca en la ciencia ficción y la cultura popular, definiendo el género cyberpunk y anticipando muchas de las transformaciones tecnológicas y sociales que hemos experimentado en las décadas posteriores. La narrativa de Gibson nos desafía a reflexionar sobre el impacto de la tecnología en la humanidad y sobre la esencia de lo que significa ser humano en un mundo cada vez más digitalizado.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Neuromante" de William Gibson es un vertiginoso viaje hacia un futuro distópico donde la tecnología y la información gobiernan el mundo. La trama sigue a Case, un hábil hacker privado de su habilidad para acceder al ciberespacio, quien se ve arrastrado a un oscuro y peligroso encargo que lo lleva a explorar los límites entre lo humano y lo artificial. A través de su prosa visionaria y llena de neologismos, Gibson crea un mundo en el que la realidad y la realidad virtual se entrelazan de manera fascinante. "Neuromante" no solo definió el género cyberpunk, sino que también planteó preguntas profundas sobre el poder de la tecnología en nuestras vidas y la evolución de la identidad en un mundo cada vez más conectado. Una obra maestra que sigue siendo relevante y cautivadora décadas después de su publicación.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        William Gibson, conocido como el "padre del cyberpunk", es un destacado escritor de ciencia ficción cuyas obras han dejado una profunda huella en el género y la cultura contemporánea. Nacido el 17 de marzo de 1948 en Conway, Carolina del Sur, Gibson es ampliamente reconocido por su capacidad para imaginar futuros distópicos, donde la tecnología y la sociedad se fusionan en narrativas provocativas y evocadoras. Su obra más icónica, "Neuromante," definió el subgénero del cyberpunk y anticipó tendencias tecnológicas que hoy son parte de nuestra realidad. Gibson es conocido por su prosa innovadora y su capacidad para explorar las complejidades de la tecnología, la identidad y la cultura en un mundo cada vez más digitalizado. Su influencia perdura en la literatura de ciencia ficción y en la comprensión de cómo la tecnología y la sociedad interactúan en la era moderna.
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Acompáñame en un emocionante viaje a través del ciberespacio y la distopía de "Neuromante" de William Gibson! 🌐📚 Adéntrate en un futuro cibernético y enredado donde la tecnología redefine la realidad. 📖✨'])
    </div>
@endsection
