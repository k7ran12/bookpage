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
                            <h3 class="mb-4">El Silencio de los Corderos - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('novela_negra_o_policiaca') }}">Novela
                                                negra o
                                                policiaca</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">El Silencio de los Corderos
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
                                El Silencio de los Corderos de Thomas Harris
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn3.buscalibre.com/fit-in/360x360/46/6b/466b61298129d120cc99189338a50c18.jpg"
                                            alt="El Silencio de los Corderos de Thomas Harris">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Thomas Harris</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Novela negra y thriller psicológico</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1998</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>The Silence of the Lambs</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La trama se centra en Clarice Starling, una joven y ambiciosa
                                        agente del FBI en formación, que es asignada al caso de un asesino en serie apodado
                                        "Buffalo Bill". Bill es conocido por secuestrar, asesinar y desollar a mujeres
                                        jóvenes, lo que le ha valido un lugar en la lista de los criminales más peligrosos
                                        de Estados Unidos. El FBI está desesperado por atrapar a este asesino en serie antes
                                        de que pueda cobrar más víctimas.</p>
                                    <p class="text-muted">La oportunidad de Clarice llega cuando el jefe de la Unidad de
                                        Ciencias del Comportamiento del FBI, Jack Crawford, la elige para entrevistar a uno
                                        de los prisioneros más notorios del país, el Dr. Hannibal Lecter. Lecter es un
                                        brillante psiquiatra y caníbal convicto, conocido por su mente maestra y su
                                        capacidad para analizar la psicología de los criminales. Crawford espera que Lecter
                                        pueda proporcionar pistas sobre la mente de Buffalo Bill y ayudar en su captura.</p>
                                    <p class="text-muted">La relación entre Clarice y el Dr. Lecter se desarrolla como un
                                        juego psicológico tenso. Lecter acepta ayudar a Clarice, pero solo a cambio de
                                        detalles sobre su propia vida y la oportunidad de profundizar en la mente de la
                                        joven agente. A medida que Clarice se sumerge más en el mundo de los asesinos en
                                        serie y los oscuros recovecos de la mente humana, se da cuenta de que Lecter está
                                        manipulándola para obtener información personal.</p>
                                    <p class="text-muted">Mientras Clarice persigue pistas sobre la identidad de Buffalo
                                        Bill, descubre un vínculo entre el asesino y una ex paciente de Lecter, lo que la
                                        lleva a una carrera contrarreloj para salvar a la última víctima de Bill antes de
                                        que sea demasiado tarde. La tensión aumenta a medida que Clarice se acerca al
                                        desenlace y se enfrenta cara a cara con el peligroso asesino.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "El Silencio de los Corderos" de Thomas Harris es un clásico del género que presenta
                                        la intriga y el horror de manera magistral. La historia sigue a la agente del FBI
                                        Clarice Starling mientras se adentra en la mente retorcida de un peligroso asesino
                                        en serie con la inquietante asistencia del icónico Hannibal Lecter, creando un tenso
                                        y psicológico juego de gato y ratón que mantiene a los lectores al borde de sus
                                        asientos hasta la última página.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Thomas Harris, autor de "El Silencio de los Corderos", es un renombrado escritor
                                        estadounidense conocido por su maestría en el thriller psicológico. Nacido en 1940,
                                        Harris se destacó en el género del crimen y la suspense a lo largo de su carrera
                                        literaria. Su creación más icónica, el carismático y siniestro Hannibal Lecter, ha
                                        dejado una huella imborrable en la cultura popular. Harris es reconocido por su
                                        habilidad para tejer narrativas oscuras y perturbadoras, explorando la mente de
                                        criminales y la psicología humana de una manera única y envolvente. Su influencia en
                                        el género y su capacidad para mantener a los lectores en vilo lo convierten en uno
                                        de los autores más influyentes en el mundo del suspense contemporáneo.
                                    </p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Thomas Harris, autor de "El Silencio de los Corderos," es un escritor estadounidense
                                        nacido el 11 de abril de 1940 en Jackson, Tennessee. Harris es ampliamente
                                        reconocido por su contribución al género del thriller psicológico y sus creaciones
                                        icónicas, como el famoso personaje Hannibal Lecter.
                                    </p>
                                    <p class="text-muted">
                                        Antes de embarcarse en una exitosa carrera como escritor, Harris trabajó como
                                        periodista y reportero para varios periódicos en Estados Unidos, lo que le brindó
                                        una sólida base en la investigación y la narración de historias. Su debut literario
                                        fue con la novela "Black Sunday" en 1975, que también fue adaptada al cine.
                                    </p>
                                    <p class="text-muted">
                                        Sin embargo, fue con "El Silencio de los Corderos" en 1988 que Thomas Harris alcanzó
                                        la fama mundial. Esta novela introdujo al personaje de Hannibal Lecter, un brillante
                                        pero sádico psiquiatra y caníbal, y marcó un hito en el género del thriller. La obra
                                        ganó varios premios literarios y fue adaptada al cine, convirtiéndose en una
                                        película muy exitosa que consolidó la fama de Hannibal Lecter y la de Thomas Harris
                                        como autor de bestsellers.
                                    </p>
                                    <p class="text-muted">
                                        A lo largo de su carrera, Harris continuó escribiendo novelas que exploraban temas
                                        oscuros y la psicología de personajes complejos. Algunas de sus otras obras notables
                                        incluyen "El Dragón Rojo" y "Hannibal."
                                    </p>
                                    <p class="text-muted">
                                        A pesar de su influencia en el mundo de la literatura de suspenso, Thomas Harris es
                                        conocido por ser un escritor bastante reservado en cuanto a su vida personal, y ha
                                        mantenido un perfil bajo en los medios de comunicación a lo largo de los años. Su
                                        legado perdura gracias a su contribución al género del thriller y su creación
                                        perdurable en la figura de Hannibal Lecter.
                                    </p>
                                </div>
                                <div>
                                    <div class="alert alert-secondary text-center text-white" role="alert">
                                        Paginas relacionadas
                                    </div>
                                    @include('pages.novela_negra_o_policiaca.recomendar')
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "El Silencio de los Corderos" de Thomas Harris! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
