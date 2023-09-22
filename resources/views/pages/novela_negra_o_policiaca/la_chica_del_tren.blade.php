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
                            <h3 class="mb-4">La Chica del Tren - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('novela_negra_o_policiaca') }}">Novela
                                                negra o
                                                policiaca</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">La Chica del Tren
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
                                La Chica del Tren de Paula Hawkins
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn2.buscalibre.com/fit-in/360x360/a9/dd/a9dd9755bde59005eb4421bb1f061bcc.jpg"
                                            alt="La Chica del Tren de Paula Hawkins">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Paula Hawkins</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Suspense psicológico, novela negra</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2015
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>"The Girl on the Train"</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La protagonista principal de la novela es Rachel Watson, una mujer
                                        en sus treinta y tantos años que está pasando por un difícil proceso de divorcio.
                                        Rachel es desempleada y se ha sumido en la depresión y el alcoholismo a raíz de su
                                        separación. A pesar de esto, continúa tomando el tren hacia Londres todos los días
                                        como si estuviera yendo a trabajar, para que su compañera de piso no descubra su
                                        situación. Durante su viaje en tren, Rachel observa las casas junto a las vías y se
                                        obsesiona particularmente con una pareja a la que llama "Jess" y "Jason". Los
                                        imagina como el epítome de la felicidad, una vida perfecta que ella misma anhela.
                                    </p>
                                    <p class="text-muted">Sin embargo, la ilusión de felicidad de Rachel se quiebra cuando
                                        observa a "Jess" en una situación comprometedora con otro hombre. Esto la sume en
                                        una profunda tristeza y resentimiento. Pero lo peor está por venir: unos días
                                        después, Rachel se entera de que "Jess", cuyo verdadero nombre es Megan Hipwell, ha
                                        desaparecido misteriosamente. A medida que la noticia se propaga y la investigación
                                        policial se intensifica, Rachel se ve arrastrada a la vida de Megan de maneras que
                                        nunca habría imaginado.</p>
                                    <p class="text-muted">La narrativa se alterna entre las perspectivas de varias mujeres,
                                        incluyendo a Rachel, Megan y Anna, la esposa actual de Tom, el exmarido de Rachel. A
                                        medida que se desvelan sus voces, también se revelan sus secretos y sus luchas
                                        internas. Rachel, a pesar de su lucha contra el alcoholismo y su falta de
                                        credibilidad debido a sus antecedentes emocionales, se convierte en una figura
                                        central en la investigación, ya que cree haber visto algo relevante la noche de la
                                        desaparición de Megan. Sin embargo, su propia memoria nublada por el alcohol y la
                                        confusión la hace una testigo poco confiable.</p>
                                    <p class="text-muted">Conforme la trama avanza, se descubren secretos oscuros que
                                        conectan a los personajes de maneras inesperadas. Paula Hawkins juega magistralmente
                                        con las percepciones y los engaños, manteniendo al lector en vilo mientras se
                                        desentraña la verdad detrás de la desaparición de Megan y las complejas relaciones
                                        entre los personajes.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">

                                        "La Chica del Tren" de Paula Hawkins es un emocionante thriller psicológico que teje
                                        una trama intrigante y llena de misterio. A través de los ojos de la protagonista,
                                        Rachel, el lector es arrastrado a un mundo de observaciones obsesivas desde un tren,
                                        donde las vidas de los demás se convierten en su propia fantasía. Cuando una mujer
                                        desaparece, los secretos y engaños se desenredan en una narrativa magistral que
                                        explora la fragilidad de la memoria y la verdad oculta tras las apariencias. Con
                                        personajes complejos y giros sorprendentes, esta novela es un viaje emocionante y
                                        turbador que mantendrá a los lectores atrapados hasta su impactante conclusión.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Paula Hawkins, autora de "La Chica del Tren," es una escritora británica nacida el
                                        26 de agosto de 1972 en Zimbabwe. Antes de su éxito como novelista, Hawkins trabajó
                                        como periodista, escribiendo para publicaciones como The Times y The Guardian, lo
                                        que le proporcionó una base sólida en la escritura y la narración de historias. Su
                                        salto a la fama llegó con su novela debut, "La Chica del Tren," que se convirtió en
                                        un fenómeno literario internacional. La habilidad de Hawkins para crear una
                                        narrativa llena de suspenso, personajes complejos y giros inesperados la ha
                                        convertido en una destacada autora del género de thriller psicológico. Su éxito con
                                        "La Chica del Tren" la catapultó a la escena literaria, y desde entonces ha seguido
                                        escribiendo novelas populares que continúan explorando temas oscuros y la psicología
                                        humana. Con su estilo cautivador y su capacidad para mantener a los lectores
                                        intrigados, Paula Hawkins se ha convertido en una figura influyente en la literatura
                                        contemporánea de suspense.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Paula Hawkins, autora de "La Chica del Tren," es una escritora británica nacida el
                                        26 de agosto de 1972 en Harare, Zimbabue, aunque creció en Londres, Reino Unido.
                                        Antes de embarcarse en su exitosa carrera como novelista, Hawkins trabajó como
                                        periodista freelance y escribió para varias publicaciones, incluyendo The Times, The
                                        Independent y The Guardian. Durante esta etapa, se dedicó principalmente a la
                                        escritura de contenido económico y financiero.
                                    </p>
                                    <p class="text-muted">
                                        Fue con su novela "La Chica del Tren," publicada en 2015, que Paula Hawkins se
                                        convirtió en una sensación literaria mundial. La novela se mantuvo en la lista de
                                        bestsellers del New York Times durante numerosas semanas y se tradujo a más de 40
                                        idiomas. La historia, un emocionante thriller psicológico, atrajo a una amplia
                                        audiencia y le valió comparaciones con autores de renombre en el género del
                                        suspense.
                                    </p>
                                    <p class="text-muted">
                                        Desde el éxito de "La Chica del Tren," Paula Hawkins ha continuado escribiendo
                                        novelas exitosas, incluyendo "Escrito en el Agua" (2017) y "Donde Muere el Bosque"
                                        (2021). Sus obras suelen explorar temas oscuros, relaciones complejas y tramas
                                        llenas de misterio, lo que ha cimentado su posición como una destacada autora de
                                        thrillers psicológicos en la literatura contemporánea.
                                    </p>
                                    <p class="text-muted">
                                        A pesar de su éxito, Paula Hawkins ha mantenido un perfil relativamente bajo y ha
                                        continuado escribiendo obras que cautivan a los amantes del suspense y la intriga.
                                        Su capacidad para tejer narrativas envolventes y personajes memorables la ha
                                        convertido en una figura influyente en el mundo literario del suspense.
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "La Chica del Tren" de Paula Hawkins! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
