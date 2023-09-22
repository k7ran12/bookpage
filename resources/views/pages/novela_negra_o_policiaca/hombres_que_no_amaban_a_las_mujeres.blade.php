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
                            <h3 class="mb-4">Hombres Que No amaban a las Mujeres - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('novela_negra_o_policiaca') }}">Novela
                                                negra o
                                                policiaca</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Hombres Que No amaban a las
                                            Mujeres
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
                                Hombres Que No amaban a las Mujeres de Stieg Larsson
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://planetadelibrospe3.cdnstatics.com/usuaris/libros/fotos/69/m_libros/portada_los-hombres-que-no-amaban-a-las-mujeres-serie-millennium-1_stieg-larsson_202008051644.jpg"
                                            alt="Hombres Que No amaban a las Mujeres de Stieg Larsson">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Stieg Larsson</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Thriller y la novela negra</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2005</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Sueco</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Män som hatar kvinnor</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La historia comienza con la contratación del periodista Mikael
                                        Blomkvist por parte de Henrik Vanger, un poderoso empresario retirado, para
                                        investigar la desaparición de su sobrina, Harriet Vanger, ocurrida hace cuarenta
                                        años. La joven Harriet desapareció en circunstancias misteriosas durante una reunión
                                        familiar en la isla de Hedeby, propiedad de los Vanger en la costa de Suecia. Aunque
                                        la policía investigó en su momento, no se encontraron pistas que llevaran a su
                                        paradero y el caso quedó sin resolver.</p>
                                    <p class="text-muted">Mikael, que recientemente ha enfrentado problemas legales debido a
                                        una investigación periodística sobre un empresario corrupto, acepta el trabajo como
                                        una oportunidad para recuperar su reputación. Comienza a investigar el caso de
                                        Harriet, y para ello se sumerge en el oscuro pasado de la familia Vanger. A medida
                                        que se adentra en el enigma, Mikael se da cuenta de que enfrenta una red de secretos
                                        y mentiras que se extiende por generaciones.</p>
                                    <p class="text-muted">La narrativa alterna entre la perspectiva de Mikael Blomkvist y la
                                        de Lisbeth Salander, una joven hacker con un pasado turbulento y un talento
                                        excepcional para la investigación. A medida que Mikael se acerca a descubrir la
                                        verdad detrás de la desaparición de Harriet, Lisbeth también se involucra en el caso
                                        después de que el antiguo abogado de Mikael la contrate para investigar al
                                        periodista. La historia de Lisbeth se entrelaza con la trama principal, ya que lucha
                                        contra su propio pasado traumático y enfrenta situaciones de abuso y discriminación
                                        de género.</p>
                                    <p class="text-muted">A lo largo de la novela, se revela que la familia Vanger está
                                        llena de personajes oscuros y problemáticos, cada uno con sus propios secretos y
                                        motivaciones ocultas. Los temas de violencia sexual, abuso y misoginia se exploran
                                        de manera cruda y provocativa a medida que la trama avanza.</p>
                                    <p class="text-muted">La relación entre Mikael y Lisbeth se convierte en un elemento
                                        central de la historia. A pesar de sus diferencias y los desafíos que enfrentan,
                                        forman una alianza inusual pero efectiva para resolver el misterio de la
                                        desaparición de Harriet Vanger. Lisbeth, con su inteligencia, destreza tecnológica y
                                        valentía, se convierte en un recurso invaluable para Mikael en su búsqueda de
                                        respuestas.</p>
                                    <p class="text-muted">A medida que la investigación avanza, Mikael y Lisbeth descubren
                                        una serie de fotografías que Harriet había tomado antes de desaparecer. Estas
                                        imágenes revelan pistas crípticas que los llevan más cerca de la verdad y los ponen
                                        en peligro a medida que se acercan a desentrañar el misterio. La tensión aumenta a
                                        medida que se enfrentan a obstáculos y amenazas de aquellos que desean mantener los
                                        secretos de la familia Vanger enterrados.</p>
                                    <p class="text-muted">La resolución del caso de Harriet Vanger y la revelación de la
                                        verdad detrás de su desaparición desencadenan una serie de consecuencias impactantes
                                        que afectan no solo a los personajes principales, sino también a la familia Vanger
                                        en su conjunto. La novela culmina en un emocionante enfrentamiento final que pone en
                                        juego la vida de Mikael y Lisbeth.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Los Hombres Que No Amaban a las Mujeres" de Stieg Larsson es un thriller cautivador
                                        que marca el inicio de la serie Millennium. La trama sigue al intrépido periodista
                                        Mikael Blomkvist y a la enigmática hacker Lisbeth Salander mientras se sumergen en
                                        la oscura desaparición de una joven de una influyente familia sueca. Larsson teje
                                        una narrativa intrigante y lúgubre, explorando temas de violencia de género y
                                        corrupción mientras los personajes desentrañan secretos oscuros. Con su estilo
                                        absorbente y personajes memorables, la novela se convierte en un adictivo
                                        rompecabezas de misterio y suspense que mantendrá a los lectores pegados a sus
                                        páginas hasta el inesperado y emocionante desenlace.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Stieg Larsson, autor de "Los Hombres Que No Amaban a las Mujeres", fue un periodista
                                        y escritor sueco de renombre. Nacido en 1954, Larsson trabajó en el periodismo
                                        investigativo y se destacó en la denuncia de la extrema derecha y el extremismo
                                        político en Suecia. Su obra literaria, especialmente la serie Millennium, le valió
                                        reconocimiento póstumo a nivel internacional. Larsson combinó su experiencia en
                                        periodismo con una narrativa cautivadora, creando una historia compleja y llena de
                                        intriga que aborda temas sociales y políticos mientras sigue a los inolvidables
                                        personajes de Blomkvist y Salander en su lucha por la justicia. Su legado literario
                                        perdura como un hito en el género del thriller y la novela negra contemporánea.
                                    </p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Stieg Larsson, autor de "Los Hombres Que No Amaban a las Mujeres," nació el 15 de
                                        agosto de 1954 en Skelleftehamn, Suecia, y falleció el 9 de noviembre de 2004 en
                                        Estocolmo, Suecia. Larsson tuvo una destacada carrera como periodista y escritor en
                                        su país natal. Trabajó en diversas publicaciones, incluyendo revistas y periódicos,
                                        y se destacó por su compromiso con el periodismo de investigación y su lucha contra
                                        el extremismo político y la extrema derecha en Suecia.
                                    </p>
                                    <p class="text-muted">
                                        Larsson también fue un defensor apasionado de los derechos humanos y la igualdad de
                                        género, lo que influyó en gran medida en su obra literaria. Su serie Millennium, que
                                        incluye "Los Hombres Que No Amaban a las Mujeres," aborda temas como la violencia de
                                        género, la corrupción y la injusticia social.
                                    </p>
                                    <p class="text-muted">
                                        Trágicamente, Stieg Larsson falleció de un ataque al corazón a la edad de 50 años,
                                        antes de que pudiera presenciar el éxito internacional de su serie de novelas. La
                                        trilogía Millennium, que también incluye "La Chica que Soñaba con una Cerilla y un
                                        Bidón de Gasolina" y "La Reina en el Palacio de las Corrientes de Aire," se
                                        convirtió en un fenómeno literario mundial después de su muerte y ha vendido
                                        millones de copias en todo el mundo. Su legado literario perdura como un testimonio
                                        de su compromiso con la justicia social y su habilidad para tejer narrativas
                                        emocionantes y provocativas.
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "Hombres Que No amaban a las Mujeres" de Stieg Larsson! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
