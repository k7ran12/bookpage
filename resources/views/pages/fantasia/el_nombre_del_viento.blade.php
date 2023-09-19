@extends('layouts.app')
@section('title', 'Book | El nombre del viento')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">El nombre del viento - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_fantasia') }}">Fantasía</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">El nombre del viento</li>
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
                                El nombre del viento de Patrick Rothfuss
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://images.cdn3.buscalibre.com/fit-in/360x360/04/f8/04f8efa67ba5f8a337cdcf201a12d875.jpg" alt="Portada del libro El nombre del viento de Patrick Rothfuss">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Patrick Rothfuss</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Fantasía</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2007</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>The Name of the Wind</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La historia comienza en una posada tranquila llamada El Marco Roto, donde un posadero llamado Kote lleva una vida tranquila. Pero bajo la superficie, Kote es en realidad Kvothe, un personaje legendario en el mundo conocido por sus proezas mágicas y sus hazañas asombrosas. Cuando un cronista llamado Devan Lochees llega a la posada y reconoce a Kvothe, el posadero accede a contar su historia.</p>
                                    <p class="text-muted">Así, nos sumergimos en el pasado de Kvothe, quien creció como un niño prodigio en una compañía de artistas itinerantes conocida como los Edena Ruh. A una edad temprana, Kvothe demuestra un talento innato para la música y la magia, y es aceptado en la Universidad Arcana, donde espera aprender las artes arcanas y desentrañar los misterios de los Chandrian, un grupo de seres malignos que asesinaron a su familia.</p>
                                    <p class="text-muted">En la Universidad, Kvothe se enfrenta a desafíos académicos y personales. Destaca en sus estudios, pero también se ve envuelto en intrigas, rivalidades y romances. A lo largo de su tiempo en la Universidad, busca conocimiento sobre la leyenda de los Chandrian y su conexión con su familia asesinada. También se cruza con Denna, una misteriosa joven por la que siente una atracción profunda pero complicada.</p>
                                    <p class="text-muted">Kvothe viaja por varios lugares, incluyendo la ciudad de Tarbean, donde vive una vida desgarradora como un mendigo antes de escapar y regresar a la Universidad. A medida que Kvothe avanza en su búsqueda de conocimiento y venganza, se enfrenta a criaturas míticas, lucha contra bandidos y descubre pistas sobre los Chandrian.</p>
                                    <p class="text-muted">La narrativa se desarrolla en dos líneas de tiempo: la vida presente de Kote en la posada y su pasado como Kvothe, el prodigioso estudiante y aventurero. El contraste entre estos momentos permite explorar la evolución del personaje y el misterio que rodea su retiro y su búsqueda de respuestas.</p>
                                    <p class="text-muted">"El Nombre del Viento" es una novela que combina magistralmente la narración detallada con la exploración de temas profundos como la música, la magia, el amor y la búsqueda del conocimiento. Patrick Rothfuss crea un mundo complejo y lleno de matices que cautiva a los lectores, y la historia de Kvothe es una epopeya que deja a los lectores ansiosos por descubrir más en las siguientes entregas de la serie. La obra ha sido aclamada tanto por su narración vívida como por su profundidad emocional, lo que la convierte en un pilar de la literatura de fantasía contemporánea.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "El Nombre del Viento" de Patrick Rothfuss es un viaje literario inolvidable que sumerge a los lectores en un mundo repleto de maravillas y misterios. La historia de Kvothe, un prodigioso músico y mago en busca de respuestas y venganza, se teje con una maestría narrativa impresionante. Rothfuss nos lleva desde la tranquilidad de una posada solitaria hasta la magia de la Universidad Arcana, explorando temas profundos como la pasión, la perseverancia y el precio del conocimiento. Con una prosa elegante y personajes complejos, esta novela no solo es un triunfo de la literatura de fantasía, sino también una experiencia literaria que captura la imaginación y el corazón del lector desde la primera página hasta la última.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Patrick Rothfuss es un autor estadounidense aclamado en el mundo de la literatura de fantasía. Nacido el 6 de junio de 1973, Rothfuss ha dejado una huella perdurable con su obra maestra "El Nombre del Viento" y la serie "Crónica del Asesino de Reyes". Su estilo de escritura meticulosa y rica en detalles, combinado con personajes complejos y tramas profundas, lo ha convertido en uno de los autores más respetados en el género. Además de su habilidad como narrador, Rothfuss también es conocido por su compromiso con causas benéficas y su participación activa en proyectos de caridad, lo que lo convierte en un escritor admirado tanto por su creatividad literaria como por su altruismo.
                                    </p>
                                </div>
                                <div>
                                    <div class="alert alert-secondary text-center text-white" role="alert">
                                        Paginas relacionadas
                                    </div>
                                    @include('pages.fantasia.recomendar')
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Acompáñame en un viaje a través de la fascinante historia de "El Nombre del Viento" de Patrick Rothfuss! 🪄📚 Sumérgete en el mundo de Kvothe, un prodigioso músico y mago cuya vida está llena de misterio y maravilla.'])
    </div>
@endsection
