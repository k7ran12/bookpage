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
                            <h3 class="mb-4">Orgullo y prejuicio - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('novela_romantica') }}">Novela
                                                Romática</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Orgullo y prejuicio"
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
                                Orgullo y prejuicio de Jane Austen
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn3.buscalibre.com/fit-in/360x360/46/6b/466b0b47e932561b186c56358acbe55e.jpg"
                                            alt="Orgullo y prejuicio de Jane Austen">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Jane Austen</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>novela romántica</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1813
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Pride and Prejudice</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"Orgullo y Prejuicio" de Jane Austen es una de las obras más
                                        emblemáticas de la literatura inglesa y una novela que ha perdurado a lo largo de
                                        los siglos debido a su inteligencia, su sátira social y su cautivadora historia de
                                        amor. Publicada por primera vez en 1813, la novela está ambientada en la Inglaterra
                                        rural del siglo XIX y se centra en la vida de la familia Bennet y sus cinco hijas.
                                    </p>
                                    <p class="text-muted">La historia se inicia cuando el señor Charles Bingley, un hombre
                                        rico y soltero, se instala en Netherfield Park, una finca cercana al hogar de los
                                        Bennet. Esto causa un gran revuelo en la sociedad local, ya que se rumorea que
                                        Bingley está buscando esposa. La señora Bennet, madre de las cinco hijas, está
                                        ansiosa por casar a una de ellas con él. Sin embargo, el señor Bingley no es el
                                        único nuevo vecino que llega al pueblo; también lo hace el señor Fitzwilliam Darcy,
                                        un hombre rico y aparentemente orgulloso.</p>
                                    <p class="text-muted">La protagonista de la historia es Elizabeth Bennet, la segunda de
                                        las hijas Bennet. Elizabeth es una joven inteligente, perspicaz y vivaz que se
                                        destaca por su agudeza en la observación y su ingenio. Pronto, se encuentra en el
                                        centro de la trama cuando conoce al señor Darcy y al señor Bingley. El señor Darcy,
                                        a pesar de ser inicialmente percibido como arrogante por Elizabeth, despierta su
                                        curiosidad y desafío.</p>
                                    <p class="text-muted">A medida que la trama avanza, se desarrolla una compleja dinámica
                                        de relaciones y prejuicios sociales. Elizabeth se entera de que el señor Darcy ha
                                        desalentado la relación entre el señor Bingley y su hermana Jane, debido a su
                                        creencia de que Jane no es lo suficientemente adinerada ni de suficiente rango
                                        social para casarse con él. Esto genera un fuerte resentimiento hacia Darcy por
                                        parte de Elizabeth, y ella misma desarrolla un prejuicio contra él basado en sus
                                        acciones iniciales y en lo que ha oído de él.</p>
                                    <p class="text-muted">Mientras tanto, Elizabeth conoce a otros personajes interesantes,
                                        como el señor Collins, un primo que está destinado a heredar la propiedad de los
                                        Bennet y busca una esposa; el señor Wickham, un hombre encantador que alega haber
                                        sido maltratado por el señor Darcy; y el señor Bingley, quien se muestra como un
                                        caballero amable y agradable.</p>
                                    <p class="text-muted">A lo largo de la novela, Elizabeth se ve envuelta en una serie de
                                        eventos y situaciones que desafían sus prejuicios y la llevan a una introspección
                                        profunda. A medida que va conociendo mejor al señor Darcy y desentrañando los
                                        secretos detrás de algunas de las acciones de los personajes, comienza a cuestionar
                                        sus juicios iniciales y a darse cuenta de que las apariencias pueden ser engañosas.
                                    </p>
                                    <p class="text-muted">El clímax de la historia se produce en una serie de eventos que
                                        involucran a varios personajes y sus destinos amorosos. A medida que se resuelven
                                        los malentendidos y los obstáculos, las relaciones comienzan a tomar forma y los
                                        personajes deben enfrentar sus propios defectos y prejuicios.</p>
                                    <p class="text-muted">El estilo de escritura de Jane Austen es conocido por su agudeza y
                                        su habilidad para tejer diálogos ingeniosos y personajes realistas. A lo largo de la
                                        novela, Austen utiliza el humor y la ironía para comentar sobre la sociedad y las
                                        normas de la época, lo que añade un nivel adicional de profundidad a la narrativa.
                                    </p>
                                    <p class="text-muted">"Orgullo y Prejuicio" es una obra atemporal que ha cautivado a
                                        generaciones de lectores. Su impacto perdura debido a su brillantez literaria y su
                                        capacidad para tocar temas que siguen siendo relevantes en la actualidad. La
                                        historia de amor entre Elizabeth y Darcy, llena de obstáculos y desafíos, sigue
                                        siendo una de las más icónicas y queridas de la literatura, y la novela en su
                                        conjunto es un testimonio duradero del talento literario de Jane Austen.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Orgullo y Prejuicio" de Jane Austen es una obra cumbre de la literatura romántica
                                        que sumerge al lector en la sociedad inglesa del siglo XIX a través de la vida de la
                                        familia Bennet y su intrépida hija Elizabeth. La novela es una cautivadora
                                        exploración de las complejidades de las relaciones humanas, donde el orgullo y el
                                        prejuicio a menudo obstaculizan el camino hacia el amor verdadero. A través de
                                        diálogos ingeniosos y personajes memorables, Austen teje una trama que desafía las
                                        convenciones sociales de la época y destaca la importancia de la autenticidad y la
                                        introspección en la búsqueda de la felicidad. Esta obra maestra literaria sigue
                                        siendo relevante y querida por su agudeza, su sátira social y su atemporal mensaje
                                        sobre el poder transformador del amor y la superación de las barreras sociales.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Jane Austen, autora de "Orgullo y Prejuicio," fue una destacada novelista británica
                                        nacida el 16 de diciembre de 1775 en Steventon, Hampshire, Inglaterra, y fallecida
                                        el 18 de julio de 1817. Austen es ampliamente reconocida por su contribución a la
                                        literatura clásica inglesa y es una de las autoras más influyentes de la novela
                                        romántica y de la comedia de la época regencia. Sus obras, que incluyen "Sentido y
                                        Sensibilidad," "Emma," "Mansfield Park" y "Persuasión," entre otras, se caracterizan
                                        por su aguda observación de la sociedad y su habilidad para tejer narrativas llenas
                                        de humor y perspicacia. Austen abordó temas como el matrimonio, la clase social y la
                                        moralidad con una sutil crítica social y un estilo literario distintivo. Aunque
                                        vivió en una época en la que las mujeres escritoras rara vez recibían
                                        reconocimiento, su legado perdura gracias a su habilidad para crear personajes
                                        memorables y narrativas atemporales que continúan siendo leídas y apreciadas en todo
                                        el mundo.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Jane Austen nació el 16 de diciembre de 1775 en Steventon, Hampshire, Inglaterra, en
                                        una familia que pertenecía a la pequeña nobleza rural. Fue la séptima de ocho hijos
                                        y creció en un ambiente hogareño intelectual, donde tuvo acceso a una educación que
                                        no era común para las mujeres de su época. La lectura y la escritura fueron
                                        fomentadas en su familia, y Jane mostró un talento temprano para la escritura.
                                    </p>
                                    <p class="text-muted">
                                        A lo largo de su vida, Austen escribió varias novelas, aunque inicialmente las
                                        publicaba de manera anónima. Su estilo literario se caracterizó por su aguda
                                        observación de la sociedad, su sutil ironía y su habilidad para crear personajes
                                        realistas y complejos. Sus obras a menudo exploraban temas como el matrimonio, la
                                        clase social y las restricciones sociales que enfrentaban las mujeres de su época.
                                    </p>
                                    <p class="text-muted">
                                        La primera novela que escribió, aunque no la primera que se publicó, fue "Orgullo y
                                        Prejuicio," que se convirtió en una de sus obras más famosas y queridas. Fue
                                        publicada en 1813 bajo el seudónimo "By a Lady" (Por una Dama). La novela es una
                                        crónica de las relaciones y los prejuicios en la sociedad rural inglesa del siglo
                                        XIX y sigue siendo ampliamente leída y apreciada en todo el mundo.
                                    </p>
                                    <p class="text-muted">
                                        A pesar de su talento literario, Jane Austen no alcanzó la fama durante su vida, y
                                        sus obras no se atribuyeron a su nombre hasta después de su muerte. Falleció el 18
                                        de julio de 1817 en Winchester, Hampshire, a la edad de 41 años debido a una
                                        enfermedad que aún hoy en día se debate sobre su naturaleza exacta (se sugiere que
                                        podría haber sido enfermedad de Addison o linfoma).
                                    </p>
                                    <p class="text-muted">
                                        A pesar de su corta vida y la modesta fama que alcanzó en su época, Jane Austen dejó
                                        un legado literario perdurable. Sus novelas continúan siendo leídas y estudiadas por
                                        su agudeza social, su profundidad psicológica y su estilo literario distintivo.
                                        Austen es considerada una de las autoras más importantes de la literatura inglesa y
                                        su influencia perdura en la literatura y la cultura contemporáneas.
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "Orgullo y prejuicio" de Jane Austen! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
