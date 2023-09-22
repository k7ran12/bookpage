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
                            <h3 class="mb-4">Coraline - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('terror_sobrenatural') }}">Terror y
                                                sobrenatural</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Coraline
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
                                Coraline de Neil Gaiman
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn1.buscalibre.com/fit-in/360x360/0b/a9/0ba9cadc466f5329d6abf5a68d76cd1a.jpg"
                                            alt="Coraline de Neil Gaiman">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Neil Gaiman</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>fantasía oscura y el horror</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2002
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Coraline</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">""Coraline" de Neil Gaiman es una novela que teje una trama
                                        fascinante y oscura llena de imaginación y misterio. La historia sigue a la joven
                                        protagonista, Coraline Jones, quien se muda con sus padres a un antiguo edificio
                                        dividido en apartamentos. El lugar está rodeado de vecinos excéntricos y extrañas
                                        peculiaridades, incluyendo una puerta en el pasillo que inicialmente lleva a ninguna
                                        parte, pero que misteriosamente un día conduce a un mundo paralelo.
                                    </p>
                                    <p class="text-muted">Coraline, una niña curiosa e inteligente, explora este mundo
                                        alterno y descubre una versión mejorada de su propia vida. Sus padres alternos son
                                        más atentos y cariñosos, la comida es deliciosa y siempre hay actividades divertidas
                                        para hacer. Sin embargo, pronto se da cuenta de que este mundo tiene una oscuridad
                                        subyacente. Sus "otros padres" tienen botones en lugar de ojos y están decididos a
                                        mantener a Coraline a su lado para siempre.</p>
                                    <p class="text-muted">Cuando Coraline decide regresar a su propio mundo, descubre que
                                        sus padres reales han desaparecido misteriosamente, y ahora debe enfrentar una serie
                                        de desafíos para rescatarlos y liberar a los niños atrapados en el mundo alterno.
                                        Con la ayuda de un gato parlante y su ingenio, Coraline se embarca en una peligrosa
                                        aventura para enfrentar a la malévola figura conocida como "La Otra Madre."</p>
                                    <p class="text-muted">La narrativa de Neil Gaiman es rica en detalles y matices, lo que
                                        crea una atmósfera profundamente inmersiva. La prosa cautiva al lector y lo
                                        transporta a un mundo lleno de maravillas y horrores. Gaiman juega con la dualidad
                                        de los mundos paralelos y la idea de lo que es real y lo que es ilusorio.</p>
                                    <p class="text-muted">A medida que la trama avanza, el suspenso se intensifica, y
                                        Coraline se enfrenta a desafíos cada vez más aterradores y oscuros. La tensión se
                                        acumula hasta un emocionante clímax en el que Coraline debe usar su ingenio y
                                        valentía para enfrentar a La Otra Madre y restaurar el equilibrio en su mundo.</p>
                                    <p class="text-muted">"Coraline" es una obra maestra de la literatura infantil y juvenil
                                        que atrae a lectores de todas las edades. La historia aborda temas universales como
                                        la valentía, la independencia y la lucha contra el mal. Además, ofrece una visión
                                        única y aterradora de la imaginación infantil y la exploración de lo desconocido.
                                    </p>
                                    <p class="text-muted">La novela también ha sido adaptada con éxito a una película
                                        animada en 2009 dirigida por Henry Selick, lo que amplió su influencia en la cultura
                                        popular. En resumen, "Coraline" es una obra literaria que combina la fantasía oscura
                                        y el horror de manera magistral y continúa siendo una lectura cautivadora que invita
                                        a los lectores a explorar el mundo a través de los ojos de Coraline.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Coraline" de Neil Gaiman es un viaje literario aterrador y mágico que cautiva a
                                        lectores de todas las edades. La historia de la intrépida Coraline, quien se adentra
                                        en un mundo paralelo seductor pero oscuro, es una exploración de la valentía, la
                                        imaginación y el enfrentamiento con lo desconocido. A través de una prosa rica y
                                        detallada, Gaiman crea un ambiente inquietante y misterioso que atrapa al lector
                                        desde la primera página. La novela es un recordatorio de que la realidad puede ser
                                        más valiosa que las ilusiones, y que la verdadera fortaleza reside en el coraje de
                                        desafiar lo aterrador para proteger lo que amamos.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Neil Gaiman, el autor de "Coraline," es un renombrado escritor británico conocido
                                        por su versatilidad en géneros como la fantasía, el horror y la ciencia ficción.
                                        Nacido el 10 de noviembre de 1960 en Hampshire, Inglaterra, Gaiman ha dejado una
                                        profunda huella en la literatura contemporánea con su imaginación desbordante y su
                                        capacidad para crear mundos alternativos. Su obra literaria abarca desde novelas y
                                        cuentos hasta cómics y guiones de cine y televisión, y ha recibido numerosos premios
                                        y reconocimientos a lo largo de su carrera. "Coraline," una de sus obras más
                                        célebres, destaca por su combinación de fantasía oscura y horror, y es un ejemplo de
                                        su habilidad para cautivar a lectores de todas las edades con narrativas ricas y
                                        evocadoras. Gaiman es un autor influyente que continúa deslumbrando a audiencias en
                                        todo el mundo con su creatividad y originalidad.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Neil Gaiman, el autor de la novela "Coraline," es un escritor británico nacido el 10
                                        de noviembre de 1960 en Hampshire, Inglaterra. Su carrera literaria abarca una
                                        amplia variedad de géneros, incluyendo la fantasía, la ciencia ficción, el horror y
                                        la literatura infantil.
                                    </p>
                                    <p class="text-muted">
                                        Gaiman comenzó su carrera como escritor en la década de 1980, escribiendo cómics
                                        para editoriales como DC Comics y Marvel Comics. Su trabajo en cómics incluye
                                        títulos notables como "The Sandman," una serie que se convirtió en un fenómeno
                                        cultural y es ampliamente elogiada por su innovación y creatividad.
                                    </p>
                                    <p class="text-muted">
                                        Además de su trabajo en cómics, Gaiman ha escrito numerosas novelas y cuentos que
                                        han recibido elogios de la crítica y han ganado premios literarios importantes.
                                        "Coraline," publicada en 2002, es una de sus obras más conocidas y ha sido adaptada
                                        tanto al cine como al teatro.
                                    </p>
                                    <p class="text-muted">
                                        La versatilidad de Gaiman como escritor le ha permitido crear mundos literarios
                                        únicos y personajes memorables. Su narrativa a menudo combina elementos de lo
                                        fantástico con temas profundos y reflexiones sobre la condición humana. Su estilo de
                                        escritura es altamente imaginativo y evocador, lo que le ha valido una base de
                                        seguidores apasionados en todo el mundo.
                                    </p>
                                    <p class="text-muted">
                                        A lo largo de su carrera, Neil Gaiman ha recibido numerosos premios y honores,
                                        incluyendo el Premio Hugo, el Premio Bram Stoker y la Medalla Newbery. Su influencia
                                        en la literatura contemporánea es innegable, y su capacidad para cautivar a lectores
                                        de todas las edades lo ha convertido en uno de los autores más queridos y respetados
                                        en el ámbito de la literatura fantástica.
                                    </p>
                                    <p class="text-muted">
                                        Fuera de su carrera como escritor, Neil Gaiman es un defensor de la libertad de
                                        expresión y ha estado involucrado en causas benéficas. Su legado literario perdura a
                                        medida que sigue escribiendo y deleitando a audiencias con su imaginación
                                        desbordante y su habilidad para tejer historias que trascienden los límites de la
                                        realidad.
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "Coraline" de Neil Gaiman! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
