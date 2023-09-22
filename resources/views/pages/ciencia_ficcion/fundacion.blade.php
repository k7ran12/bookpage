@extends('layouts.app')
@section('title', 'Book | Fundación')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">Fundación - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_ciencia_ficcion') }}">Ciencia Ficción</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Fundación</li>
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
                                Fundación de Isaac Asimov
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://www.crisol.com.pe/media/catalog/product/cache/cf84e6047db2ba7f2d5c381080c69ffe/9/7/9788499083209.jpg" alt="Portada del libro Fundación de Isaac Asimov">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Isaac Asimov</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Ciencia ficción</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1951</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Foundation</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La historia de "Fundación" se desarrolla en un futuro lejano, en un vasto imperio galáctico conocido como el Imperio Galáctico. La trama se centra en el personaje de Hari Seldon, un matemático y científico social que ha desarrollado una nueva rama de la matemática llamada "psicohistoria". Esta disciplina le permite predecir el futuro a gran escala, basándose en el comportamiento de las masas y los patrones históricos.</p>
                                    <p class="text-muted">Seldon ha descubierto que el Imperio Galáctico, que ha existido durante miles de años, está al borde de su caída inevitable y prolongada decadencia. Sus predicciones indican que la galaxia caerá en una era de barbarie y oscuridad que durará 30,000 años antes de que surja un nuevo imperio. Sin embargo, Seldon también propone una solución: crear una "Fundación" compuesta por científicos y sabios que trabajen juntos para reducir la duración de ese período de caos a solo 1,000 años.</p>
                                    <p class="text-muted">La trama se desplaza hacia el futuro, siguiendo los esfuerzos de la Fundación en su ubicación remota en el planeta Terminus, en las fronteras exteriores del imperio. Allí, el joven científico Hari Seldon y su discípulo, Gaal Dornick, se enfrentan a los desafíos de establecer la Fundación y protegerla de los intentos de conquista por parte de las naciones vecinas.</p>
                                    <p class="text-muted">A medida que avanza la narrativa, vemos a la Fundación enfrentar una serie de crisis y desafíos, algunos de los cuales están previstos por Seldon y otros no. La inteligencia de la psicohistoria, sin embargo, les permite adaptarse y sobrevivir, acortando significativamente el período de barbarie previsto. El legado de Hari Seldon y su visión de la psicohistoria perdura a lo largo de las generaciones, guiando a la Fundación en su lucha por preservar el conocimiento y la civilización en un universo en constante cambio.</p>
                                    <p class="text-muted">"Fundación" es una exploración magistral de temas como el declive de los imperios, la predicción del futuro, la gestión del conocimiento y la supervivencia en tiempos de crisis. Asimov teje una trama apasionante con personajes carismáticos y diálogos perspicaces. A través de la Fundación y sus desafíos, el autor examina las tensiones entre la planificación científica y la imprevisibilidad de la historia humana. La obra también plantea preguntas sobre el poder y la responsabilidad de aquellos que tienen el conocimiento para dar forma al destino de la humanidad.</p>
                                    <p class="text-muted">"Fundación" es un pilar de la ciencia ficción que ha resistido el paso del tiempo, y su influencia en la literatura y el pensamiento futurista es innegable.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Fundación" de Isaac Asimov es una obra maestra de la ciencia ficción que nos sumerge en un vasto imperio galáctico al borde de la decadencia. La historia sigue a Hari Seldon, un matemático visionario que desarrolla la psicohistoria, una ciencia capaz de prever el futuro a gran escala. Ante la inevitable caída del Imperio Galáctico, Seldon crea la Fundación para preservar el conocimiento humano y acortar el período de barbarie previsto. A lo largo de las generaciones, la Fundación se enfrenta a desafíos imprevistos mientras lucha por cumplir la visión de Seldon y forjar un nuevo camino para la humanidad en un universo en constante cambio.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Isaac Asimov, uno de los escritores de ciencia ficción más influyentes del siglo XX, nació el 2 de enero de 1920 en Rusia y emigró a Estados Unidos a una edad temprana. Además de ser un prolífico autor de ciencia ficción, también fue bioquímico y profesor, lo que se refleja en su habilidad para combinar la ciencia y la narrativa en sus obras. Asimov es conocido por su enfoque riguroso en la ciencia y la lógica en sus historias, así como por su capacidad para explorar conceptos complejos de manera accesible para el lector promedio. Su vasta obra incluye obras icónicas como la serie de la Fundación y las novelas de robots, que han dejado una marca indeleble en la literatura y la cultura popular, abordando temas desde la inteligencia artificial hasta la ética científica. El legado de Asimov como escritor y divulgador científico sigue siendo influyente y perdura en la literatura de ciencia ficción y en la comprensión pública de la ciencia.
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Acompáñame en un emocionante viaje a través de las vastas galaxias y la epopeya de "Fundación" de Isaac Asimov! 🌌📚 Sumérgete en un universo de ciencia ficción donde la decadencia de un imperio galáctico da paso a un futuro incierto. 📖✨'])
    </div>
@endsection
