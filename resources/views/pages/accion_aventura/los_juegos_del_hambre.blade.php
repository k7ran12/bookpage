@extends('layouts.app')
@section('title', 'Book | Los Juegos Del Hambre')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">Los Juegos del Hambre - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_accion_aventura') }}">Acción y Aventura</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Los Juegos del Hambre</li>
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
                                Los Juegos del Hambre por Suzanne Collins
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://tunovela.es/wp-content/uploads/71e4kjCsuAL.jpg" alt="Portada del libro Los Juegos del Hambre de Suzanne Collins">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Suzanne Collins</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Aventura y Ciencia</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2008</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>The Hunger Games</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La novela comienza con la presentación de los Juegos del Hambre, un evento anual realizado en Panem donde un chico y una chica, de cada distrito con edades comprendidas entre los doce y los dieciocho años, deberán luchar a muerte entre ellos mientras son observados por televisión nacional. Katniss se ofrece como voluntaria para participar en los Juegos del Hambre en lugar de su hermana menor Primrose, quien había sido seleccionada para representar al Distrito 12. Junto con Peeta Mellark, el otro tributo del Distrito 12, Katniss se dirige a la capital de Panem para participar en los Juegos.</p>
                                    <p class="text-muted">A lo largo de la novela, Katniss y Peeta deben luchar por sobrevivir en un ambiente hostil y peligroso mientras son perseguidos por otros tributos. A medida que avanza la historia, Katniss comienza a desarrollar sentimientos por Peeta y se da cuenta de que los Juegos del Hambre son solo una forma más en que el Capitolio oprime a los distritos.</p>
                                    <p class="text-muted">Los Juegos del Hambre es una novela emocionante y bien escrita que ha sido aclamada por la crítica y el público. La historia es una crítica social sobre la desigualdad económica y la opresión política, temas que son relevantes hoy en día. La novela ha sido adaptada al cine y ha sido un gran éxito comercial. Si te gustan las novelas de aventuras y ciencia ficción, Los Juegos del Hambre es una excelente opción.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Los Juegos del Hambre" de Suzanne Collins es una emocionante obra de ciencia ficción que sumerge a los lectores en un mundo postapocalíptico despiadado y opresivo. Narrada desde la perspectiva de Katniss Everdeen, una valiente joven que se convierte en el símbolo de la resistencia, la historia nos lleva a través de una lucha por la supervivencia en los despiadados Juegos del Hambre. Con personajes cautivadores, una trama llena de acción y temas sociales poderosos, esta novela es una lectura imperdible que no solo entretiene, sino que también provoca una reflexión profunda sobre la injusticia y la valentía.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Suzanne Collins es una escritora y guionista estadounidense conocida a nivel internacional por su saga Los juegos del hambre. Nació el 10 de agosto de 1962 en Hartford, Connecticut. Estudió Arte, Teatro y Comunicación en la Universidad de Indiana y completó su formación con un máster en Escritura Dramática1. Collins comenzó su carrera como guionista en la cadena Nickelodeon en 1991. En 2003, publicó su primera novela, Gregor: Las Tierras Bajas, que dio inicio a su primera saga, Las Crónicas de las Tierras Bajas. Sin embargo, fue con la publicación de Los juegos del hambre en 2008 que Collins saltó a la fama. La serie, formada también por En llamas y Sinsajo, fue adaptada al cine y marcó un antes y un después para el público juvenil
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
                                                                <p class="text-muted fs-14 mb-0"><strong>El mundo perdido</strong> por
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
                                                                <p class="text-muted fs-14 mb-0"><strong>Rescate en el tiempo (1999-1357)</strong> por
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
                                                                <p class="text-muted fs-14 mb-0"><strong>Presa</strong> por
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
                                                                <p class="text-muted fs-14 mb-0"><strong>Latitudes piratas</strong> por
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Adéntrate en el intrigante mundo distópico de Panem con el resumen de "Los Juegos del Hambre"! 🏹📚 ¡No te pierdas esta emocionante lectura! 📖✨'])       
    </div>
@endsection
