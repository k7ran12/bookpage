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
                            <h3 class="mb-4">El Hogar de Miss Peregrine para Niños Peculiares - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('terror_sobrenatural') }}">Terror y
                                                sobrenatural</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">El Hogar de Miss Peregrine
                                            para Niños Peculiares
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
                                El Hogar de Miss Peregrine para Niños Peculiares de Ransom Riggs
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;"
                                            src="https://images.cdn2.buscalibre.com/fit-in/360x360/b4/2c/b42c85ab458897b0d13157285085c46f.jpg"
                                            alt="El Hogar de Miss Peregrine para Niños Peculiares de Ransom Riggs">
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>Ransom Riggs</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>literatura fantástica con elementos de terror y misterio</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>2011
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>Miss Peregrine's Home for Peculiar Children</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted">"El Hogar de Miss Peregrine para Niños Peculiares" de Ransom Riggs
                                        es una novela que combina misterio, fantasía y un toque de terror en una historia
                                        que es a la vez inquietante y cautivadora. La trama sigue a Jacob Portman, un joven
                                        de dieciséis años que vive en Florida y trabaja en la cadena de tiendas de
                                        comestibles de su familia. Jacob lleva una vida ordinaria hasta que un trágico
                                        acontecimiento lo lleva a descubrir un mundo completamente extraordinario y
                                        misterioso.
                                    </p>
                                    <p class="text-muted">La historia comienza con la relación de Jacob con su abuelo,
                                        Abraham Portman, quien solía contarle cuentos sobre su infancia y un orfanato
                                        peculiar en la isla de Cairnholm, en Gales. Según su abuelo, este orfanato estaba
                                        lleno de niños con habilidades extraordinarias, como flotar en el aire, ser
                                        invisibles o tener fuerza sobrehumana. Jacob disfrutaba escuchando estas historias,
                                        pero a medida que crecía, comenzó a verlas como simples cuentos de hadas.</p>
                                    <p class="text-muted">Sin embargo, todo cambia cuando Jacob presencia la muerte violenta
                                        de su abuelo y cree ver a una criatura monstruosa que nadie más parece notar. Este
                                        evento lo sume en un estado de confusión y trauma. Como parte de su proceso de
                                        recuperación, su terapeuta sugiere que Jacob viaje a la isla de Cairnholm, donde su
                                        abuelo había vivido y donde se encontraba el orfanato peculiar.</p>
                                    <p class="text-muted">Acompañado de su padre, Jacob llega a la isla y comienza a
                                        explorar los restos del orfanato, que fue bombardeado durante la Segunda Guerra
                                        Mundial. Lo que encuentra en las ruinas es más allá de su imaginación: fotografías
                                        antiguas de niños con habilidades verdaderamente peculiares, incluyendo a su abuelo.
                                        Estas fotos parecen confirmar las historias de su abuelo, pero también plantean
                                        preguntas alarmantes sobre la realidad de su infancia.</p>
                                    <p class="text-muted">Mientras explora la isla, Jacob descubre un portal que lo lleva a
                                        1940, el período en el que vivieron los niños peculiares. Allí, conoce a Miss
                                        Peregrine, la directora del orfanato, que tiene la capacidad de transformarse en un
                                        ave y controlar el tiempo, lo que le permite crear un bucle temporal para proteger a
                                        los niños de los horrores de la guerra. Jacob se encuentra con los niños peculiares,
                                        quienes, a pesar de sus habilidades extraordinarias, enfrentan peligros y amenazas.
                                    </p>
                                    <p class="text-muted">A medida que la historia avanza, Jacob se involucra cada vez más
                                        en el mundo de los niños peculiares y descubre oscuros secretos relacionados con su
                                        familia, su abuelo y una organización siniestra conocida como los "huecos." Estos
                                        huecos son criaturas aterradoras que amenazan tanto a los niños como a Jacob.
                                    </p>
                                    <p class="text-muted">La narrativa de Ransom Riggs se enriquece con las fotografías
                                        vintage que se incluyen en la novela, y que añaden una dimensión visual única a la
                                        historia. A medida que Jacob desentraña los misterios de su abuelo y los niños
                                        peculiares, la trama se vuelve cada vez más emocionante y llena de suspense.</p>
                                    <p class="text-muted">"El Hogar de Miss Peregrine para Niños Peculiares" es una novela
                                        que explora temas de identidad, pertenencia y el poder de la imaginación. Ransom
                                        Riggs crea un mundo rico en detalles y personajes memorables que atraen a lectores
                                        de todas las edades. La mezcla de elementos de fantasía, aventura y misterio hace
                                        que esta obra sea una lectura fascinante y única que invita a los lectores a
                                        explorar lo extraordinario dentro de lo aparentemente común.
                                    </p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "El Hogar de Miss Peregrine para Niños Peculiares" de Ransom Riggs es una novela
                                        intrigante y misteriosa que te sumerge en un mundo donde la realidad se entrelaza
                                        con lo extraordinario. La historia de Jacob Portman, que descubre un orfanato
                                        peculiar lleno de niños con habilidades únicas, es un viaje emocionante lleno de
                                        aventuras, secretos y peligros. Riggs combina de manera brillante la narración con
                                        fotografías vintage que agregan un toque visual único a la trama. Esta obra es un
                                        testimonio del poder de la imaginación y la importancia de abrazar lo que nos hace
                                        diferentes. Una vez que entres en el mundo de Miss Peregrine, te costará salir de
                                        él, y te dejará ansioso por descubrir más sobre los niños peculiares y sus
                                        misteriosos dones.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Ransom Riggs, el autor de "El Hogar de Miss Peregrine para Niños Peculiares," es un
                                        escritor y cineasta estadounidense conocido por su capacidad para fusionar la
                                        narrativa literaria con elementos visuales únicos. Nacido el 3 de febrero de 1979 en
                                        Maryland, Riggs se graduó en la Universidad de Kenyon y más tarde estudió cine en la
                                        Escuela de Artes Cinematográficas de la Universidad del Sur de California. Su obra
                                        más destacada, "Miss Peregrine's Home for Peculiar Children," ha ganado elogios por
                                        su creatividad al combinar fotografías antiguas con una historia intrigante, creando
                                        un género literario propio. Riggs ha continuado la saga con más libros, ampliando el
                                        universo de los niños peculiares y demostrando su habilidad para cautivar a lectores
                                        de todas las edades con su imaginación desbordante y su narrativa única.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Biografia del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Ransom Riggs, el autor de "El Hogar de Miss Peregrine para Niños Peculiares," es un
                                        escritor y cineasta estadounidense conocido por su obra única y su capacidad para
                                        mezclar la narrativa literaria con elementos visuales evocadores.
                                    </p>
                                    <p class="text-muted">
                                        Ransom Riggs nació el 3 de febrero de 1979, en Maryland, Estados Unidos. Se graduó
                                        en la Universidad de Kenyon y posteriormente continuó sus estudios en la Escuela de
                                        Artes Cinematográficas de la Universidad del Sur de California, donde se especializó
                                        en cine y dirección. Su formación en cine influyó en su estilo narrativo y en su
                                        habilidad para combinar elementos visuales con la escritura.
                                    </p>
                                    <p class="text-muted">
                                        La obra más reconocida de Riggs, "El Hogar de Miss Peregrine para Niños Peculiares,"
                                        publicada en 2011, destaca por su uso único de fotografías vintage que se integran
                                        en la trama y añaden una dimensión visual a la historia. Estas imágenes enriquecen
                                        la narrativa y dan vida a los personajes y situaciones de la novela de una manera
                                        inusual.
                                    </p>
                                    <p class="text-muted">
                                        La novela se convirtió en un éxito editorial y generó una serie de secuelas,
                                        expandiendo el mundo de los niños peculiares y profundizando en sus misterios y
                                        aventuras. La creatividad de Riggs al crear este universo intrigante y su habilidad
                                        para mantener el interés de los lectores con una mezcla de misterio, fantasía y
                                        aventura lo convirtieron en un autor muy respetado en el género de la literatura
                                        juvenil y fantástica.
                                    </p>
                                    <p class="text-muted">
                                        Ransom Riggs también ha trabajado en proyectos cinematográficos y ha dirigido
                                        cortometrajes. Su experiencia en cine se refleja en su estilo narrativo visualmente
                                        evocador y en su capacidad para contar historias de manera cautivadora.
                                    </p>
                                    <p class="text-muted">
                                        En resumen, Ransom Riggs es un autor versátil y creativo que ha dejado una huella
                                        duradera en la literatura contemporánea con su obra única y su capacidad para
                                        combinar lo literario y lo visual de una manera que encanta a los lectores de todas
                                        las edades. Su contribución al género de la literatura juvenil y fantástica es
                                        ampliamente reconocida y apreciada.
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
                '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "El Hogar de Miss Peregrine para Niños Peculiares" de Ransom Riggs! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨',
        ])
    </div>
@endsection
