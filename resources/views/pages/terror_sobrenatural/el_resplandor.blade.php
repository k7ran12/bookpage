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
                            <h3 class="mb-4">El Resplandor - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('terror_sobrenatural') }}">Terror y
                                                sobrenatural</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">El Resplandor"
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
                                El Resplandor de Stephen King
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn3.buscalibre.com/fit-in/360x360/49/66/49661480fa1f78034b80bae7ed020841.jpg"
                                            alt="El Resplandor de Stephen King">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Stephen King</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>terror sobrenatural</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1977
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>The Shining</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"El Resplandor" de Stephen King es una novela emblemática del
                                        género de terror que te sumerge en una historia intensa y psicológicamente
                                        perturbadora.
                                    </p>
                                    <p class="text-muted">La trama sigue a Jack Torrance, un hombre con problemas de
                                        alcoholismo y violencia que acepta un trabajo como cuidador de invierno en el Hotel
                                        Overlook, un lugar aislado en las Montañas Rocosas de Colorado. Jack ve este trabajo
                                        como una oportunidad para comenzar de nuevo y mantenerse alejado de la bebida
                                        mientras pasa el invierno en compañía de su esposa, Wendy, y su hijo de cinco años,
                                        Danny, quien posee habilidades psíquicas especiales que los nativos americanos
                                        llaman "el resplandor."</p>
                                    <p class="text-muted">A medida que el invierno se instala y el hotel queda completamente
                                        aislado debido a la nieve, la atmósfera comienza a cargarse de una tensión
                                        siniestra. El hotel tiene un pasado oscuro y trágico, con innumerables eventos
                                        violentos que han ocurrido en sus pasillos y habitaciones a lo largo de los años.
                                        Las energías malévolas del lugar comienzan a afectar a Jack, quien se obsesiona con
                                        la escritura y se sumerge en un estado de locura cada vez más aterrador.</p>
                                    <p class="text-muted">Mientras tanto, Danny, el joven con el don del resplandor,
                                        comienza a experimentar visiones aterradoras y perturbadoras del pasado del hotel,
                                        incluyendo fantasmas y apariciones de eventos violentos. Su capacidad especial le
                                        permite comunicarse telepáticamente con el cocinero jefe del hotel, Dick Hallorann,
                                        quien también posee el don del resplandor y vive en Florida. A medida que las
                                        visiones de Danny se intensifican, Hallorann siente la necesidad de regresar al
                                        Hotel Overlook para proteger a Danny y su madre de la creciente amenaza que
                                        representa Jack.</p>
                                    <p class="text-muted">La novela se desarrolla en medio de una creciente sensación de
                                        claustrofobia y paranoia a medida que Jack se adentra en la locura y la violencia,
                                        amenazando a su propia familia. La relación entre Jack, Wendy y Danny se vuelve cada
                                        vez más tensa y peligrosa, y el Hotel Overlook se convierte en un escenario
                                        aterrador que cobra vida con fuerzas sobrenaturales.</p>
                                    <p class="text-muted">El enfrentamiento final entre Jack y su familia es aterrador y
                                        brutal, llevando la historia a un clímax aterrador y sangriento. Danny y Wendy deben
                                        unir sus fuerzas y aprovechar el poder del resplandor para enfrentar las fuerzas
                                        malignas que acechan en el hotel y en la mente de Jack.
                                    </p>
                                    <p class="text-muted">"El Resplandor" es una novela que explora temas como la locura, la
                                        violencia, el alcoholismo y las fuerzas sobrenaturales. Stephen King crea una
                                        atmósfera escalofriante y una narrativa psicológicamente intensa que mantiene a los
                                        lectores en vilo a medida que la historia se desarrolla.</p>
                                    <p class="text-muted">Esta obra maestra del terror ha dejado una huella indeleble en el
                                        género y ha sido adaptada al cine en una película dirigida por Stanley Kubrick en
                                        1980, que también se ha convertido en un clásico del cine de terror. "El Resplandor"
                                        de Stephen King es una experiencia literaria que te sumerge en la oscuridad y el
                                        miedo, haciendo que sus páginas sean difíciles de olvidar.
                                    </p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "El Resplandor" de Stephen King es una obra maestra del terror que te sumerge en una
                                        espiral de locura y pesadillas. La historia de Jack Torrance, un hombre atormentado
                                        por sus demonios personales, su esposa Wendy y su hijo Danny, cuyo don del
                                        "resplandor" los hace vulnerables a los horrores del Hotel Overlook, es una
                                        experiencia intensamente escalofriante. La narrativa hábilmente construida de King,
                                        llena de tensión y un sentido inquietante de claustrofobia, te arrastra a un mundo
                                        donde lo sobrenatural y lo humano chocan en una lucha aterradora por la
                                        supervivencia. Esta novela icónica es un viaje psicológico que explora las
                                        profundidades de la locura y el miedo, dejando una impresión duradera en los
                                        lectores y consolidando su lugar en el panteón del terror literario.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Stephen King, el renombrado autor de "El Resplandor," es un prolífico escritor
                                        estadounidense nacido el 21 de septiembre de 1947 en Portland, Maine. A lo largo de
                                        su carrera, King ha dejado una marca indeleble en el género del terror y la ficción.
                                        Sus obras han vendido más de 350 millones de copias en todo el mundo y han sido
                                        adaptadas a numerosas películas y series de televisión. Con una habilidad
                                        excepcional para crear mundos aterradores y personajes memorables, King se ha
                                        convertido en un ícono de la literatura de terror y suspenso. Su capacidad para
                                        explorar las profundidades de los temores humanos y los aspectos oscuros de la
                                        psicología humana lo ha convertido en uno de los autores más influyentes del siglo
                                        XX y XXI, y su legado perdura como un referente en el mundo de la literatura
                                        contemporánea.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Stephen King, el aclamado autor de "El Resplandor," es un escritor estadounidense
                                        nacido el 21 de septiembre de 1947 en Portland, Maine. King es uno de los autores
                                        más influyentes y prolíficos del género de terror y ficción de suspense en la
                                        literatura contemporánea.
                                    </p>
                                    <p class="text-muted">
                                        Su pasión por la escritura comenzó desde temprana edad, y mientras aún era un
                                        estudiante, vendió sus primeros cuentos a revistas literarias. Sin embargo, sus
                                        primeros años como escritor no fueron fáciles, y tuvo que enfrentar desafíos
                                        económicos y personales. Durante este tiempo, trabajó como profesor y escribió
                                        historias cortas en su tiempo libre.
                                    </p>
                                    <p class="text-muted">
                                        En 1974, King publicó su primera novela exitosa, "Carrie," que le brindó
                                        reconocimiento y éxito comercial. Desde entonces, ha producido una vasta
                                        bibliografía que incluye novelas, cuentos cortos y ensayos. Muchas de sus obras se
                                        han convertido en bestsellers y han sido adaptadas a películas y series de
                                        televisión.
                                    </p>
                                    <p class="text-muted">
                                        La obra de King abarca una amplia variedad de géneros, aunque es más conocido por
                                        sus historias de terror y suspenso. Sus personajes complejos y sus tramas
                                        absorbentes han atraído a una amplia audiencia y han dejado una huella duradera en
                                        la cultura popular.
                                    </p>
                                    <p class="text-muted">
                                        "El Resplandor" (1977) es una de las obras más icónicas de King y una de las más
                                        influyentes en el género de terror. La novela cuenta la historia de Jack Torrance,
                                        un hombre contratado como cuidador de un aislado hotel durante el invierno, cuya
                                        lucha contra la locura y los horrores sobrenaturales se convierten en el núcleo de
                                        la trama.
                                    </p>
                                    <p class="text-muted">
                                        El estilo de escritura de King se caracteriza por su narrativa directa y accesible,
                                        así como por su habilidad para crear mundos y personajes vívidos. Sus historias a
                                        menudo exploran los aspectos oscuros de la psicología humana y los miedos profundos
                                        que residen en el corazón de sus personajes.
                                    </p>
                                    <p class="text-muted">
                                        A lo largo de su carrera, Stephen King ha recibido numerosos premios y honores
                                        literarios, incluyendo el Premio Bram Stoker y el Premio World Fantasy. Su
                                        influencia en la literatura contemporánea es innegable, y su legado como uno de los
                                        maestros del terror perdura a medida que continúa escribiendo y cautivando a sus
                                        lectores en todo el mundo.
                                    </p>
                                </div>
                                <div>
                                    <div class="alert alert-secondary text-center text-white" role="alert">
                                        Paginas relacionadas
                                    </div>
                                    @include('pages.terror_sobrenatural.recomendar')
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "El Resplandor" de Stephen King! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
