@extends('layouts.app')
@section('title', 'Book | Elantris')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">Elantris - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_fantasia') }}">Fantasía</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Elantris</li>
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
                                Elantris de Brandon Sanderson
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://i.pinimg.com/originals/45/a2/0e/45a20e42b1ba821f6675d130b09e6cc1.jpg" alt="Portada del libro Elantris de Brandon Sanderson">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Brandon Sanderson</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Fantasía</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2005</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Elantris</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La historia se desarrolla en el mundo de Arelon, donde la ciudad de Elantris alguna vez fue un lugar glorioso y mágico habitado por seres conocidos como Elantrianos. Estos seres eran inmortales y poseían una magia conocida como AonDor que les otorgaba habilidades sobrenaturales. Sin embargo, todo cambió hace una década cuando una misteriosa catástrofe conocida como el "Cambio" transformó a los Elantrianos en criaturas deformes y desterró su ciudad en un estado de decadencia y sufrimiento.</p>
                                    <p class="text-muted">La trama se centra en tres personajes principales:</p>
                                    <ul>
                                        <ol><strong>Raoden:</strong> Príncipe heredero de Arelon, Raoden es afectado por el Cambio y se convierte en un Elantriano. A pesar de su transformación, mantiene su determinación y busca restaurar Elantris a su antigua gloria mientras desafía las creencias religiosas y políticas de su reino.</ol>
                                        <ol><strong>Sarene:</strong> Una joven princesa de la nación de Teod que llega a Arelon para casarse con Raoden, pero descubre que él ha sido declarado muerto debido al Cambio. Sarene es una mujer inteligente y valiente, y en lugar de regresar a Teod, decide quedarse en Arelon y utilizar su astucia política y conocimientos sobre la diplomacia para ayudar a su nuevo hogar.</ol>
                                        <ol><strong>Hrathen:</strong> Un sacerdote del Dios Shu-Dereth, Hrathen es enviado a Arelon para convertir a sus habitantes a la fe de Shu-Korath antes de que un ejército invasor ataque. Es un personaje complejo que se debate entre su fe y su humanidad mientras lidia con Sarene y Raoden, quienes representan desafíos inesperados para sus planes.</ol>
                                    </ul>
                                    <p class="text-muted">La trama se desarrolla a medida que estos personajes y sus agendas entran en conflicto y colisión en medio del telón de fondo de la ciudad maldita de Elantris. Sanderson teje una intrincada red de política, religión y magia mientras los personajes exploran los secretos de AonDor, intentan restaurar la ciudad y enfrentan desafíos existenciales.</p>
                                    <p class="text-muted">La novela también profundiza en temas como la esperanza, la fe, la redención y la lucha contra las adversidades. A medida que los personajes se enfrentan a obstáculos aparentemente insuperables, la narrativa evoluciona hacia un clímax emocionante lleno de revelaciones sorprendentes y decisiones cruciales que determinarán el destino de Elantris y sus habitantes.</p>
                                    <p class="text-muted">"Elantris" es una obra maestra de la literatura de fantasía que muestra el talento de Brandon Sanderson para crear mundos ricos y complejos y personajes que se quedan en la memoria del lector mucho después de haber terminado el libro. Con su prosa cautivadora y su capacidad para mezclar elementos de magia, intriga política y exploración de la naturaleza humana, Sanderson nos brinda una historia que es tanto épica como conmovedora.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Elantris" de Brandon Sanderson es una obra maestra de la fantasía que nos lleva a un mundo deslumbrante y decadente, donde la magia y la política colisionan en una trama intrincada y emocionante. A través de personajes entrañables como Raoden, Sarene y Hrathen, la novela teje una historia de esperanza, fe y redención en medio de las ruinas de la ciudad de Elantris. Con una prosa magistral y una narrativa que te atrapa desde la primera página, Sanderson demuestra su habilidad para crear mundos complejos y personajes inolvidables en esta obra que cautiva tanto a los amantes de la fantasía como a quienes buscan una narración apasionante.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Brandon Sanderson es un destacado autor estadounidense de literatura de fantasía y ciencia ficción que ha dejado una huella significativa en el género. Nacido el 19 de diciembre de 1975 en Nebraska, su prolífica carrera literaria se caracteriza por la creación de mundos ricos en detalles y sistemas de magia complejos que han cautivado a lectores de todo el mundo. Sanderson es conocido por completar la serie "La Rueda del Tiempo" de Robert Jordan tras su fallecimiento, así como por sus propias series de novelas, que incluyen "El Archivo de las Tormentas" y "Nacidos de la Bruma". Su capacidad para tejer tramas elaboradas y personajes memorables lo ha convertido en una figura influyente en la literatura contemporánea, y su compromiso con la escritura y la enseñanza lo convierte en un autor admirado tanto por su creatividad como por su dedicación a la comunidad literaria.
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Viaja al fascinante mundo de "Las Crónicas de Narnia" de C.S. Lewis! 🌟📚 Descubre aventuras, seres mágicos y valiosas lecciones de moralidad mientras sigues a los personajes en sus emocionantes travesías.'])
    </div>
@endsection
