@extends('layouts.app')
@section('title', 'Book | Harry Potter')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">Bajo el sol de medianoche - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('novela_romantica') }}">Novela
                                                Romática</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Bajo el sol de medianoche
                                        </li>
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
                                Bajo el sol de medianoche - Stephenie Meyer
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn3.buscalibre.com/fit-in/360x360/8a/42/8a429c2c6743c852b5f79f8af36f3719.jpg"
                                            alt="Bajo el sol de medianoche - Stephenie Meyer">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Stephenie Meyer</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>fantasía y el romance</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2020
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Midnight Sun</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"Bajo el sol de medianoche" de Stephenie Meyer es una adición a la
                                        exitosa saga "Crepúsculo" que se ha ganado el corazón de innumerables lectores en
                                        todo el mundo. Esta novela, publicada en 2020, ofrece una perspectiva única y
                                        profunda de la historia de amor entre Bella Swan y Edward Cullen, al narrar los
                                        acontecimientos desde el punto de vista de Edward. A través de sus palabras, somos
                                        testigos de sus pensamientos más íntimos, sus luchas internas y su profundo amor por
                                        Bella, así como de los eventos que dieron forma a su relación.
                                    </p>
                                    <p class="text-muted">La trama se desarrolla en Forks, Washington, donde Edward Cullen,
                                        un vampiro de 104 años atrapado en el cuerpo de un joven de diecisiete, se encuentra
                                        con Bella Swan, una joven humana que se ha mudado recientemente a la ciudad. Desde
                                        el momento en que Edward la ve por primera vez en la cafetería de la escuela, su
                                        vida da un giro inesperado. Bella emana un aroma irresistible para él, lo que
                                        despierta su sed de sangre, pero también un profundo interés y atracción hacia ella.
                                    </p>
                                    <p class="text-muted">A medida que Edward lucha por mantenerse alejado de Bella y
                                        protegerla de la verdad sobre su naturaleza vampírica, su curiosidad y su amor por
                                        ella lo impulsan a acercarse. Finalmente, le revela su secreto, que es un vampiro, y
                                        le advierte sobre los peligros que implica estar cerca de él. Sin embargo, su amor
                                        es más fuerte que el miedo, y Bella decide seguir adelante con la relación a pesar
                                        de las complicaciones.</p>
                                    <p class="text-muted">La novela explora en detalle la lucha interna de Edward mientras
                                        lucha contra sus instintos vampíricos y sus deseos de proteger y amar a Bella. A lo
                                        largo de la historia, enfrenta desafíos emocionales y morales que lo obligan a
                                        cuestionar su propia existencia y la de su familia de vampiros. La narración también
                                        destaca la dinámica entre los miembros de la familia Cullen, cada uno con sus
                                        propias personalidades y desafíos únicos.</p>
                                    <p class="text-muted">La relación entre Edward y Bella florece y se profundiza a medida
                                        que comparten momentos de amor y complicidad, así como enfrentan amenazas externas
                                        que ponen en peligro su seguridad. La tensión aumenta a medida que una banda de
                                        vampiros cazadores humanos llega a Forks y pone a Bella en peligro mortal.</p>
                                    <p class="text-muted">Una de las partes más impactantes de la novela es la revelación de
                                        los acontecimientos pasados que han moldeado la existencia de Edward, incluyendo su
                                        transformación en vampiro y la historia de su familia. Estos momentos de
                                        retrospección ofrecen una visión más profunda de su personaje y de las razones
                                        detrás de su constante lucha por hacer lo correcto.</p>
                                    <p class="text-muted">"Bajo el sol de medianoche" es una historia de amor apasionada y
                                        eterna que trasciende las barreras entre lo humano y lo sobrenatural. También es un
                                        relato de sacrificio, moralidad y la búsqueda de la redención. A través de la voz de
                                        Edward, los lectores obtienen una comprensión más completa de los personajes y
                                        eventos que han cautivado a tantos a lo largo de la saga "Crepúsculo."</p>
                                    <p class="text-muted">Esta novela de Stephenie Meyer ofrece una experiencia literaria
                                        cautivadora para los seguidores de la saga y una nueva perspectiva que agrega
                                        profundidad y complejidad a una historia de amor inmortal. Con su estilo
                                        característico y su capacidad para crear personajes memorables, Meyer sigue
                                        manteniendo el encanto de su mundo de vampiros y humanos mientras explora la
                                        eternidad y el sacrificio por amor.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Bajo el sol de medianoche" de Stephenie Meyer ofrece una perspectiva única de la
                                        saga "Crepúsculo" al narrar los eventos desde el punto de vista de Edward Cullen.
                                        Esta adición a la historia de amor entre Edward y Bella proporciona una profundidad
                                        inigualable a los personajes y sus emociones, explorando la lucha interna de Edward
                                        mientras se debate entre su naturaleza vampírica y su amor por Bella. La narración
                                        cautivadora y emocional revela los momentos cruciales y los desafíos que enfrentan,
                                        agregando capas de complejidad a su relación. Esta novela es una oportunidad para
                                        los fanáticos de la saga de sumergirse aún más en el mundo de los vampiros y
                                        experimentar la eternidad y el sacrificio por amor desde la perspectiva de un
                                        personaje icónico.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Stephenie Meyer es la autora de la novela "Bajo el sol de medianoche". Nacida el 24
                                        de diciembre de 1973 en Hartford, Connecticut, es una escritora estadounidense
                                        conocida por su inmenso éxito con la saga "Crepúsculo". Antes de su carrera como
                                        escritora, Meyer trabajó como ama de casa y como docente. Su debut literario con
                                        "Crepúsculo" en 2005 la catapultó a la fama internacional, convirtiéndola en una de
                                        las autoras más reconocidas en el género de la literatura juvenil y de fantasía. La
                                        saga "Crepúsculo" se convirtió en un fenómeno cultural, con adaptaciones
                                        cinematográficas que también fueron muy populares. "Bajo el sol de medianoche" es
                                        una adición a esta saga que ofrece una perspectiva única al narrar los eventos desde
                                        el punto de vista de Edward Cullen, uno de los personajes más emblemáticos de la
                                        historia. La obra muestra la habilidad de Meyer para crear mundos fascinantes y
                                        personajes que han cautivado a una amplia audiencia en todo el mundo.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Stephenie Meyer, autora de la novela "Bajo el sol de medianoche," es una escritora
                                        estadounidense nacida el 24 de diciembre de 1973 en Hartford, Connecticut. Antes de
                                        dedicarse a la escritura, Meyer trabajó como ama de casa y como docente. Su carrera
                                        literaria comenzó de manera fulgurante con la publicación de la saga "Crepúsculo" en
                                        2005, la cual la catapultó a la fama internacional.
                                    </p>
                                    <p class="text-muted">
                                        La saga "Crepúsculo" consta de cuatro libros principales: "Crepúsculo," "Luna
                                        Nueva," "Eclipse" y "Amanecer," que cuentan la historia de amor entre la humana
                                        Bella Swan y el vampiro Edward Cullen. Esta serie se convirtió en un fenómeno
                                        cultural, atrayendo a una amplia audiencia, especialmente a lectores jóvenes y
                                        fanáticos del género de fantasía y romance. Las adaptaciones cinematográficas de los
                                        libros también fueron extremadamente populares.
                                    </p>
                                    <p class="text-muted">
                                        "Bajo el sol de medianoche" es una extensión de la saga "Crepúsculo" que ofrece una
                                        nueva perspectiva al narrar los eventos desde el punto de vista de Edward Cullen,
                                        uno de los personajes más icónicos de la historia. La obra se publicó en 2020 y fue
                                        recibida con entusiasmo por los fanáticos de la serie que deseaban conocer más sobre
                                        los pensamientos y emociones de Edward.
                                    </p>
                                    <p class="text-muted">
                                        La influencia de Stephenie Meyer en la literatura contemporánea es innegable. Su
                                        capacidad para crear mundos fascinantes y personajes memorables la ha convertido en
                                        una de las autoras más reconocidas en el género de la literatura juvenil y de
                                        fantasía. A pesar del tiempo transcurrido desde la publicación de la saga
                                        "Crepúsculo," su impacto perdura, y su obra sigue siendo leída y apreciada por
                                        lectores de todas las edades en todo el mundo.
                                    </p>
                                </div>
                                <div>
                                    <div class="alert alert-secondary text-center text-white" role="alert">
                                        Paginas relacionadas
                                    </div>
                                    @include('pages.novela_romantica.recomendar')
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
        @include('layouts.compartir', [
            'url' => url()->current(),
            'texto' =>
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "Bajo el sol de medianoche" de Stephenie Meyer! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
