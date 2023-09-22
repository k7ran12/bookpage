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
                            <h3 class="mb-4">El Exorcista - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('terror_sobrenatural') }}">Terror y
                                                sobrenatural</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">El Exorcista
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
                                El Exorcista de William Peter Blatty
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn1.buscalibre.com/fit-in/360x360/32/83/328303b50f844c5a46dd3427a614f2f1.jpg"
                                            alt="El Exorcista de William Peter Blatty">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>William Peter Blatty</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>terror sobrenatural</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1971
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>The Exorcist</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"El Exorcista" de William Peter Blatty es una novela que ha dejado
                                        una marca imborrable en la literatura de terror y en la cultura popular desde su
                                        publicación en 1971. Esta escalofriante historia, inspirada en eventos reales, es un
                                        relato de posesión demoníaca que explora los límites del bien y el mal.
                                    </p>
                                    <p class="text-muted">La trama se desarrolla en Georgetown, un tranquilo vecindario de
                                        Washington D.C. Allí, conocemos a la actriz Chris MacNeil y su hija de doce años,
                                        Regan. La vida de esta familia se ve sumida en la oscuridad cuando Regan,
                                        aparentemente una niña normal y saludable, comienza a mostrar signos alarmantes de
                                        un comportamiento errático y violento. Regan también experimenta convulsiones, habla
                                        en lenguas desconocidas y demuestra una fuerza sobrenatural.</p>
                                    <p class="text-muted">El Dr. Chris MacNeil, preocupada por la salud mental de su hija,
                                        busca ayuda médica y psiquiátrica para Regan. Sin embargo, ninguna explicación
                                        médica parece adecuada para los síntomas extremos que exhibe la niña. Finalmente, la
                                        madre recurre al padre Damien Karras, un sacerdote y psiquiatra, en busca de
                                        respuestas.</p>
                                    <p class="text-muted">A medida que Karras profundiza en el caso de Regan, se da cuenta
                                        de que no se trata de un problema médico o psicológico convencional. Sospecha que
                                        Regan podría estar poseída por una entidad demoníaca. A pesar de sus dudas y
                                        conflictos personales, el padre Karras se une al experimentado exorcista padre
                                        Lankester Merrin para realizar un exorcismo y liberar a Regan de la influencia
                                        maligna que la consume.</p>
                                    <p class="text-muted">La historia se vuelve cada vez más intensa y aterradora a medida
                                        que los sacerdotes enfrentan el poder del demonio que habita en Regan. La batalla
                                        entre el bien y el mal se desarrolla en las páginas de la novela con una brutalidad
                                        psicológica que desafía las creencias religiosas y la cordura de los personajes
                                        involucrados.</p>
                                    <p class="text-muted">Blatty utiliza un estilo narrativo tenso y claustrofóbico para
                                        sumergir al lector en el horror que enfrentan los personajes. La novela explora
                                        temas profundos, como la fe, la duda, el sacrificio y la lucha contra el mal
                                        absoluto. Además, presenta una visión aterradora de lo desconocido y lo
                                        sobrenatural, que deja una impresión duradera en la mente de quienes la leen.
                                    </p>
                                    <p class="text-muted">"El Exorcista" no es solo una obra maestra del terror, sino
                                        también un estudio de personajes complejos que deben enfrentar lo inexplicable y lo
                                        aterrador. La novela ha sido adaptada a una famosa película de terror en 1973,
                                        dirigida por William Friedkin, que también se convirtió en un clásico del cine.</p>
                                    <p class="text-muted">En resumen, "El Exorcista" es una obra literaria que ha dejado una
                                        profunda huella en la cultura popular y continúa siendo una referencia importante en
                                        el género del terror. La narrativa perturbadora y la exploración de temas
                                        existenciales hacen que esta novela sea una experiencia inolvidable para los amantes
                                        del terror.
                                    </p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "El Exorcista" de William Peter Blatty es un clásico del terror que sigue siendo una
                                        pesadilla viviente en la literatura. La historia de una niña poseída por una entidad
                                        demoníaca y los desesperados esfuerzos de dos sacerdotes por liberarla desafía los
                                        límites del miedo y la fe. Blatty crea una narrativa intensamente aterradora y
                                        psicológicamente perturbadora que te arrastra a la oscuridad del alma humana y los
                                        horrores sobrenaturales. Esta obra maestra del terror, inspirada en eventos reales,
                                        ha dejado una huella imborrable en el género y sigue siendo un referente en la
                                        literatura de terror, desafiando a los lectores a enfrentar sus peores pesadillas.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        William Peter Blatty, el autor de "El Exorcista," nació el 7 de enero de 1928 en
                                        Nueva York, Estados Unidos, y falleció el 12 de enero de 2017. Fue un escritor y
                                        guionista reconocido por su contribución al género del terror. Además de su obra más
                                        famosa, "El Exorcista," Blatty escribió varias novelas y guiones de películas a lo
                                        largo de su carrera. Su obra maestra, "El Exorcista," se basó en eventos reales y se
                                        convirtió en un fenómeno cultural, tanto en la literatura como en el cine, dejando
                                        una marca perdurable en el género del terror. La habilidad de Blatty para crear una
                                        atmósfera intensamente aterradora y su exploración de temas de fe y posesión
                                        demoníaca lo convirtieron en un autor icónico en el mundo del terror literario y
                                        cinematográfico.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        William Peter Blatty, el autor de la icónica novela "El Exorcista," nació el 7 de
                                        enero de 1928 en Nueva York, Estados Unidos, y falleció el 12 de enero de 2017.
                                        Blatty tuvo una carrera versátil que abarcó la escritura, la dirección
                                        cinematográfica y la producción.
                                    </p>
                                    <p class="text-muted">
                                        Después de servir en la Fuerza Aérea de los Estados Unidos durante la Guerra de
                                        Corea, Blatty asistió a la Universidad de Georgetown, donde se graduó en inglés.
                                        Luego, estudió en la Escuela de Graduados de la Universidad de George Washington,
                                        donde obtuvo un título de maestría en inglés.
                                    </p>
                                    <p class="text-muted">
                                        A lo largo de su carrera, Blatty escribió numerosas obras, incluyendo novelas,
                                        guiones y ensayos. Sin embargo, es más conocido por "El Exorcista," publicada en
                                        1971. La novela se basó en un caso de posesión demoníaca que Blatty había
                                        investigado previamente, y se convirtió en un éxito instantáneo y un clásico del
                                        género de terror. Fue adaptada a una exitosa película dirigida por William Friedkin
                                        en 1973, que también se convirtió en un fenómeno cultural.
                                    </p>
                                    <p class="text-muted">
                                        La habilidad de Blatty para crear una narrativa aterradora y explorar temas de fe y
                                        posesión demoníaca dejó una marca perdurable en la literatura y el cine de terror.
                                        Además de su trabajo en "El Exorcista," Blatty escribió otras novelas notables como
                                        "Legion" (1983) y "Dimiter" (2010).
                                    </p>
                                    <p class="text-muted">
                                        Además de su carrera literaria, Blatty también incursionó en la dirección
                                        cinematográfica. Dirigió la secuela de "El Exorcista" titulada "El Exorcista III" en
                                        1990, que se basó en su propia novela "Legion."
                                    </p>
                                    <p class="text-muted">
                                        William Peter Blatty es recordado como un autor influyente y versátil que contribuyó
                                        significativamente al género del terror. Su legado perdura a través de su obra
                                        maestra, "El Exorcista," que continúa siendo una referencia fundamental en la
                                        literatura y el cine de terror.
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "El Exorcista" de William Peter Blatty! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
