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
                            <h3 class="mb-4">Eleanor y Park - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('novela_romantica') }}">Novela
                                                Romática</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Eleanor y Park
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
                                Eleanor y Park de Rainbow Rowell
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn2.buscalibre.com/fit-in/360x360/93/08/9308bb4e842d2962d0915cdef008d746.jpg"
                                            alt="Eleanor y Park de Rainbow Rowell">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Rainbow Rowell</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>novela juvenil contemporánea</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2013
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Eleanor & Park</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">
                                        "Eleanor y Park" de Rainbow Rowell es una cautivadora novela juvenil que te
                                        transporta a la década de 1980 y te sumerge en una historia de amor entre dos
                                        adolescentes que es conmovedora, auténtica y evoca una profunda sensación de
                                        nostalgia
                                    </p>
                                    <p class="text-muted">La trama se desarrolla en Omaha, Nebraska, donde conocemos a
                                        Eleanor Douglas, una joven de dieciséis años con una vida difícil. Ella vive en una
                                        casa caótica y disfuncional con su madre, su padrastro abusivo y sus numerosos
                                        hermanos y hermanas. Después de un año de separación forzada, Eleanor regresa a casa
                                        y enfrenta la hostilidad de su padrastro, Richie. Su vida escolar tampoco es fácil,
                                        ya que su apariencia peculiar y su ropa estrafalaria la convierten en un objetivo
                                        para las burlas y el acoso de sus compañeros.</p>
                                    <p class="text-muted">Por otro lado, conocemos a Park Sheridan, un chico de dieciséis
                                        años de origen coreano que vive una vida más cómoda con su familia. Aunque Park no
                                        es popular en la escuela, ha encontrado su nicho en la vida al leer cómics y
                                        escuchar música en sus viajes diarios en el autobús escolar.</p>
                                    <p class="text-muted">La vida de Eleanor cambia cuando se ve obligada a compartir el
                                        asiento del autobús con Park debido a la falta de espacio. Aunque su relación
                                        comienza de manera incómoda y silenciosa, gradualmente comienzan a compartir cómics
                                        y conversaciones. A través de estos pequeños gestos, nace una conexión especial
                                        entre ellos.</p>
                                    <p class="text-muted">La historia se centra en el crecimiento de la relación entre
                                        Eleanor y Park a medida que se vuelven amigos y, finalmente, se enamoran. Rowell
                                        explora de manera sincera la experiencia del primer amor adolescente y cómo dos
                                        personas pueden encontrar refugio y comprensión mutua en medio de las dificultades
                                        de la vida.</p>
                                    <p class="text-muted">A lo largo de la novela, los personajes enfrentan desafíos tanto
                                        internos como externos. Eleanor lucha contra su entorno familiar abusivo y su baja
                                        autoestima, mientras que Park debe encontrar la confianza para defender su relación
                                        y enfrentar las expectativas de su padre. Rowell maneja estas luchas de manera
                                        realista y sensible, creando personajes complejos y auténticos.</p>
                                    <p class="text-muted">La narrativa también se beneficia de la ambientación en la década
                                        de 1980, que se siente auténtica y evoca una sensación de nostalgia para aquellos
                                        que vivieron esa época. La música y los cómics juegan un papel importante en la
                                        historia y en la conexión entre Eleanor y Park, añadiendo capas de profundidad a la
                                        trama.</p>
                                    <p class="text-muted">A medida que su amor se desarrolla, Eleanor y Park se vuelven
                                        inseparables, enfrentando el mundo juntos y creciendo en el proceso. Sin embargo,
                                        las dificultades de la vida y las presiones externas amenazan su relación, y deben
                                        luchar para mantener viva su conexión.</p>
                                    <p class="text-muted">En última instancia, "Eleanor y Park" es una novela que toca los
                                        corazones de los lectores con su exploración de temas como el primer amor, la
                                        amistad, la familia disfuncional y la lucha por la identidad. Rainbow Rowell crea
                                        una historia con personajes memorables y una narrativa honesta que resuena con la
                                        autenticidad de la adolescencia y la belleza de encontrar el amor en lugares
                                        inesperados.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Eleanor y Park" de Rainbow Rowell es una conmovedora novela juvenil que nos lleva a
                                        la década de 1980 y nos sumerge en una historia de amor auténtica y nostálgica. A
                                        través de la relación entre los inadaptados adolescentes Eleanor y Park, la autora
                                        teje una trama llena de emociones y complicidad. La novela aborda temas como el
                                        primer amor, la familia disfuncional y la búsqueda de la identidad con una
                                        sinceridad que resuena en el corazón de los lectores. La conexión entre los
                                        personajes es palpable, y su viaje juntos, aunque no exento de obstáculos, es una
                                        hermosa exploración de la adolescencia y la importancia de encontrar el amor en los
                                        lugares más inesperados. "Eleanor y Park" es una obra cautivadora que te transporta
                                        a la época de los casetes y los cómics y te hace recordar la intensidad del primer
                                        amor.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Rainbow Rowell es la talentosa autora detrás de la novela "Eleanor y Park". Nacida
                                        en 1973 en Nebraska, Estados Unidos, Rowell es conocida por su habilidad para
                                        capturar la esencia de la juventud y las complejidades de las relaciones a través de
                                        su escritura. Ha ganado reconocimiento en el género de la literatura juvenil
                                        contemporánea gracias a obras como "Fangirl" y "Eleanor y Park", esta última
                                        destacando por su enfoque auténtico en el primer amor adolescente. Rowell es
                                        admirada por su capacidad para crear personajes realistas y tramas emotivas que
                                        resuenan profundamente con los lectores jóvenes y adultos por igual. Su narrativa
                                        sincera y sensible le ha valido el elogio de la crítica y un lugar destacado en el
                                        mundo de la literatura contemporánea.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Rainbow Rowell es una autora estadounidense nacida el 24 de febrero de 1973 en
                                        Omaha, Nebraska. Después de obtener su licenciatura en Periodismo de la Universidad
                                        de Nebraska-Lincoln, trabajó como periodista y editora en diversas publicaciones,
                                        incluyendo el periódico "Omaha World-Herald."
                                    </p>
                                    <p class="text-muted">
                                        Sin embargo, su verdadera pasión era la escritura de ficción, y a lo largo de su
                                        carrera como periodista, continuó escribiendo historias en su tiempo libre. En 2011,
                                        dio el salto a la literatura con su primera novela, "Attachments", que fue bien
                                        recibida.
                                    </p>
                                    <p class="text-muted">
                                        Rowell se destacó en el género de la literatura juvenil contemporánea con obras como
                                        "Eleanor y Park", publicada en 2013. Esta novela en particular recibió elogios de la
                                        crítica y se convirtió en un éxito entre los lectores jóvenes por su enfoque
                                        auténtico en el primer amor adolescente y su narrativa emotiva.
                                    </p>
                                    <p class="text-muted">
                                        A lo largo de su carrera, Rainbow Rowell ha continuado escribiendo novelas
                                        populares, incluyendo "Fangirl" (2013), "Landline" (2014), "Carry On" (2015) y
                                        "Wayward Son" (2019). Sus obras suelen explorar temas relacionados con la juventud,
                                        las relaciones y la identidad de una manera que resuena con una amplia audiencia.
                                    </p>
                                    <p class="text-muted">
                                        Su narrativa sincera y su capacidad para crear personajes realistas han sido
                                        elogiados, y Rowell se ha ganado un lugar destacado en el mundo de la literatura
                                        contemporánea, especialmente en el género de la literatura juvenil. Su estilo de
                                        escritura emotivo y auténtico ha atraído tanto a lectores jóvenes como a adultos, y
                                        su obra continúa siendo apreciada y celebrada en la comunidad literaria.
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "Eleanor y Park" de Rainbow Rowell! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
