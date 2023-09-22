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
                            <h3 class="mb-4">El Cuervo - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('novela_negra_o_policiaca') }}">Novela
                                                negra o
                                                policiaca</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">El Cuervo
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
                                El Cuervo de Jo Nesbø
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://imagessl2.casadellibro.com/a/l/s5/32/9788466342032.webp"
                                            alt="El Cuervo de Jo Nesbø">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Jo Nesbø</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Novela de crimen y suspense</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td> "El Cuervo" fue publicado en 2015 en Noruega y en 2016 en otros países.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Noruego</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>"Tørst" (que se traduce como "Sed" en español)</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">La trama de "El Cuervo" se desarrolla en torno a una serie de
                                        asesinatos brutales que conmocionan a la ciudad. Los cadáveres de mujeres jóvenes
                                        aparecen en diferentes lugares, y todas las víctimas tienen en común el hecho de que
                                        fueron ahogadas en su propia sangre. Este patrón macabro lleva a la prensa a apodar
                                        al asesino en serie "El Cuervo", debido a la crueldad con la que actúa.</p>
                                    <p class="text-muted">El detective Harry Hole, que había dejado la policía y se había
                                        retirado del mundo del crimen, es llamado de nuevo para liderar la investigación. A
                                        pesar de su lucha contra el alcoholismo y sus propios demonios personales, Hole es
                                        un investigador brillante y obsesionado por resolver los casos que se le presentan.
                                        La presión aumenta cuando se da cuenta de que el asesino está jugando con él,
                                        dejando pistas y mensajes en las escenas del crimen que parecen estar dirigidos
                                        directamente a Hole.</p>
                                    <p class="text-muted">A medida que Hole profundiza en la investigación, descubre que los
                                        asesinatos podrían estar relacionados con un oscuro y siniestro pasado que involucra
                                        a un grupo secreto de hombres que comparten un terrible secreto. El detective se
                                        adentra en un mundo de corrupción, abuso de poder y venganza, mientras lucha contra
                                        sus propios demonios y adicciones.</p>
                                    <p class="text-muted">La narrativa de Jo Nesbø es tensa y llena de giros inesperados, lo
                                        que mantiene a los lectores en vilo a medida que intentan descubrir la identidad del
                                        asesino y las motivaciones detrás de los crímenes. Nesbø crea una atmósfera oscura y
                                        opresiva que refleja la desesperación y la obsesión de Hole por resolver el caso.
                                        Además, el autor aborda temas profundos, como la redención, la culpa y la fragilidad
                                        de la condición humana a través de la complejidad de su personaje principal.</p>
                                    <p class="text-muted">A medida que la trama avanza, Hole se enfrenta a peligros cada vez
                                        mayores, y su vida personal se mezcla peligrosamente con la investigación. La novela
                                        explora las consecuencias devastadoras de la sed de venganza y cómo los eventos del
                                        pasado pueden perseguir a las personas en el presente.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">

                                        "El Cuervo" de Jo Nesbø es un fascinante thriller que sumerge a los lectores en una
                                        oscura y retorcida trama de asesinatos en la vibrante ciudad de Oslo. El detective
                                        Harry Hole se enfrenta a un desafío escalofriante mientras persigue a un astuto
                                        asesino en serie. La narrativa intrincada y los giros impredecibles mantienen a los
                                        amantes del género cautivados de principio a fin, mientras exploran los rincones más
                                        oscuros de la mente humana y siguen los pasos del incansable detective Hole en su
                                        búsqueda de la verdad. Una elección sólida para aquellos que buscan una dosis de
                                        suspense y misterio bien elaborados.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Jo Nesbø, autor de "El Cuervo," es un destacado escritor noruego nacido el 29 de
                                        marzo de 1960 en Oslo. Antes de su exitosa carrera como novelista, Nesbø también se
                                        destacó como cantante y compositor en una banda de rock. Sin embargo, es ampliamente
                                        reconocido por su contribución al género de la novela negra y el thriller. Su serie
                                        de novelas protagonizadas por el detective Harry Hole lo catapultó a la fama
                                        internacional. Nesbø es conocido por su habilidad para tejer tramas oscuras y llenas
                                        de giros inesperados, así como por su capacidad para crear personajes complejos y
                                        memorables. Ha recibido numerosos premios literarios y es considerado uno de los
                                        escritores contemporáneos más influyentes en el género del suspense, con una base de
                                        lectores globalmente apasionada. Su estilo distintivo y su narrativa envolvente lo
                                        convierten en una elección sólida para los amantes del género del thriller.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Jo Nesbø, autor de "El Cuervo," es un renombrado escritor noruego nacido el 29 de
                                        marzo de 1960 en Oslo, Noruega. Antes de convertirse en escritor, Nesbø tuvo una
                                        carrera multifacética. Estudió Economía y se destacó como cantante y compositor en
                                        una banda de rock llamada Di Derre. Sin embargo, su verdadera fama llegó con su
                                        incursión en la escritura.
                                    </p>
                                    <p class="text-muted">
                                        Nesbø es ampliamente conocido por su serie de novelas protagonizadas por el
                                        detective Harry Hole, que le ha valido reconocimiento internacional y un lugar
                                        destacado en el género del thriller. La serie ha sido traducida a más de 50 idiomas
                                        y ha vendido millones de copias en todo el mundo. Sus novelas se caracterizan por
                                        tramas complejas, personajes intrigantes y giros argumentales inesperados, lo que
                                        las convierte en una elección popular entre los amantes del suspense.
                                    </p>
                                    <p class="text-muted">
                                        Además de su serie de Harry Hole, Jo Nesbø ha escrito novelas independientes y ha
                                        incursionado en otros géneros literarios. También ha recibido numerosos premios
                                        literarios a lo largo de su carrera, destacando su impacto en la literatura
                                        contemporánea de Noruega y más allá.
                                    </p>
                                    <p class="text-muted">
                                        Nesbø es considerado uno de los autores más influyentes en el género del thriller y
                                        su capacidad para crear historias absorbentes y llenas de suspenso lo ha convertido
                                        en un referente en la literatura de crimen y misterio. Su estilo distintivo y su
                                        habilidad para explorar la psicología de sus personajes lo mantienen en la
                                        vanguardia de la escena literaria internacional.
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "El Cuervo" de Jo Nesbø! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
