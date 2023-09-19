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
                            <h3 class="mb-4">Jurassic Park - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_accion_aventura') }}">Acción y Aventura</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Jurassic Park</li>
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
                                Jurassic Park por Michael Crichton
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://images.cdn3.buscalibre.com/fit-in/360x360/53/11/5311c45fe695424da51b0cafd8767f30.jpg" alt="">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Michael Crichton</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Ciencia ficción y aventuras</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1990</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Jurassic Park</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted"> La novela de Michael Crichton, Jurassic Park, es una emocionante historia de ciencia ficción que se desarrolla en una isla remota en Costa Rica. El libro comienza con la presentación de John Hammond, un multimillonario que ha creado un parque temático lleno de dinosaurios clonados genéticamente. El parque es el hogar de una variedad de dinosaurios, incluyendo el temible Tyrannosaurus Rex y el sigiloso Velociraptor.</p>
                                    <p class="text-muted">Hammond invita a un grupo de científicos y expertos en seguridad a visitar el parque para evaluar su seguridad antes de su apertura al público. Sin embargo, las cosas no salen según lo planeado y los dinosaurios escapan de sus jaulas, lo que desencadena una serie de eventos peligrosos y emocionantes.</p>
                                    <p class="text-muted">El personaje principal del libro es el Dr. Alan Grant, un paleontólogo que es invitado a visitar el parque por Hammond. Grant es un personaje interesante y bien desarrollado que se convierte en uno de los héroes del libro. Otros personajes importantes incluyen a Ian Malcolm, un matemático teórico que es muy crítico con el parque, y a Ellie Sattler, una paleobotánica que trabaja con Grant.</p>
                                    <p class="text-muted">La novela explora temas interesantes como la ética científica, la ingeniería genética y la responsabilidad humana. También presenta algunos conceptos científicos interesantes relacionados con la clonación y la biología molecular.</p>
                                    <p class="text-muted">El libro es emocionante y lleno de acción, con muchos momentos tensos y emocionantes. La descripción detallada de los dinosaurios y su comportamiento es impresionante y te hace sentir como si estuvieras allí mismo en la isla con los personajes.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Jurassic Park es una novela emocionante y llena de acción que ha sido muy popular desde su publicación en 1990 . La trama es interesante y explora temas como la ingeniería genética y la responsabilidad humana. La descripción detallada de los dinosaurios y su comportamiento es impresionante y te hace sentir como si estuvieras allí mismo en la isla con los personajes.
                                    </p>
                                    <p class="text-muted">
                                        En general, Jurassic Park es una novela emocionante e interesante que combina ciencia ficción, aventura y suspenso en una historia convincente. Si te gustan las novelas de ciencia ficción o aventuras, definitivamente recomendaría leer Jurassic Park.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        John Michael Crichton (1942-2008) fue un escritor, guionista, director y productor de cine estadounidense. Crichton es conocido por sus trabajos en los géneros de la ciencia ficción, la intriga y la ficción médica. Algunas de sus obras más famosas incluyen “Parque Jurásico”, “El mundo perdido”, “Estado de miedo” y “Esfera”. Crichton también fue el creador de la serie televisiva “ER” (Urgencias). En total, sus libros han vendido más de 200 millones de copias en todo el mundo y más de una docena han sido adaptados al cine 12. Si estás interesado en leer algunas de sus obras, aquí te dejamos una lista con los 15 mejores libros de Michael Crichton
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => 'Descubre el emocionante mundo de los dinosaurios en el resumen de Jurassic Park! 🦖📚. ¡No te pierdas esta emocionante lectura! 📖✨'])       
    </div>
@endsection
