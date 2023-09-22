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
                            <h3 class="mb-4">Harry Potter - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_fantasia') }}">Fantasía</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Harry Potter</li>
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
                                Harry Potter (Serie) de J.K. Rowling
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="https://http2.mlstatic.com/D_NQ_NP_730622-MPE31254905859_062019-O.webp" alt="Portada del libro Harry Potter (Serie) de J.K. Rowling">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>J.K. Rowling</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Fantasía</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1997</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>"Harry Potter and the Philosopher's Stone" (en el Reino Unido) / "Harry Potter and the Sorcerer's Stone" (en Estados Unidos)</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted"><strong>Libro 1</strong>: "Harry Potter y la Piedra Filosofal" (1997): La historia comienza con un huérfano llamado Harry Potter que vive con sus crueles tios y primo. Pero, cuando cumple once años, Harry descubre que es un mago y que ha sido aceptado en Hogwarts, una escuela de magia. Allí, hace amigos como Ron Weasley y Hermione Granger, y descubre la verdad sobre sus padres y su conexión con el temido mago oscuro, Lord Voldemort. La trama se centra en la búsqueda de la Piedra Filosofal, un objeto que otorga la inmortalidad.</p>
                                    <p class="text-muted"><strong>Libro 2</strong>: "Harry Potter y la Cámara Secreta" (1998): El segundo año de Harry en Hogwarts trae la aparición de una misteriosa cámara secreta y el resurgimiento de fuerzas oscuras. Harry y sus amigos investigan el misterio detrás de la cámara y su relación con un ser legendario llamado el Basilisco. En este libro, la historia profundiza en el pasado de Voldemort y su conexión con Hogwarts.</p>
                                    <p class="text-muted"><strong>Libro 3</strong>: "Harry Potter y el Prisionero de Azkaban" (1999): En su tercer año en Hogwarts, Harry descubre que Sirius Black, un preso peligroso que supuestamente traicionó a sus padres, ha escapado de la prisión de Azkaban. La historia sigue a Harry mientras se enfrenta a nuevos peligros y secretos familiares, y también introduce a los Dementores, criaturas que se alimentan de la felicidad.</p>
                                    <p class="text-muted"><strong>Libro 4</strong>: "Harry Potter y el Cáliz de Fuego" (2000): En su cuarto año, Harry se encuentra inesperadamente en el Torneo de los Tres Magos, una competición peligrosa entre escuelas de magia. A medida que los desafíos se vuelven más mortales, Harry descubre una conspiración que amenaza su vida y revela más sobre el regreso de Voldemort.</p>
                                    <p class="text-muted"><strong>Libro 5</strong>: "Harry Potter y la Orden del Fénix" (2003): Harry regresa a Hogwarts para su quinto año en medio de la creciente amenaza de Voldemort. Forma parte de la Orden del Fénix, un grupo que lucha contra el Señor Tenebroso. En este libro, Harry se enfrenta a sus propios demonios internos mientras lidera a sus amigos en la lucha contra las fuerzas del mal y la negación de la comunidad mágica sobre el regreso de Voldemort.</p>
                                    <p class="text-muted"><strong>Libro 6</strong>: "Harry Potter y el Misterio del Príncipe" (2005): Harry aprende sobre el Horrocrux, un objeto que contiene un fragmento del alma de Voldemort, y se embarca en la búsqueda de estos Horrocruxes para debilitar al mago oscuro. El libro también explora la historia de Tom Riddle, el joven Voldemort, y su búsqueda de la inmortalidad.</p>
                                    <p class="text-muted"><strong>Libro 7</strong>: "Harry Potter y las Reliquias de la Muerte" (2007): La saga culmina con Harry, Ron y Hermione en una búsqueda desesperada por destruir los Horrocruxes y enfrentarse a Voldemort en la batalla final por el mundo mágico. La historia explora temas de sacrificio, amor y la lucha entre el bien y el mal.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        La serie "Harry Potter" de J.K. Rowling es un viaje mágico e inolvidable que ha encantado a lectores de todas las edades en todo el mundo. A través de siete libros, seguimos el crecimiento y las hazañas de Harry Potter mientras descubre su legado como mago y enfrenta desafíos que van desde la búsqueda de la Piedra Filosofal hasta la lucha final contra el tenebroso Lord Voldemort. Rowling teje un mundo mágico rico en detalles, poblado por personajes entrañables y lleno de lecciones sobre la amistad, el coraje y la importancia de hacer elecciones morales. Esta serie es una obra maestra que ha dejado una marca indeleble en la literatura y en la imaginación de millones de lectores.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        J.K. Rowling es una renombrada autora británica, nacida en 1965, ampliamente conocida por su obra más icónica, la serie de libros "Harry Potter". Su imaginación excepcional dio vida al mundo mágico de Hogwarts y al joven mago Harry Potter, cuyas aventuras y desafíos cautivaron a lectores de todas las edades en todo el mundo. La serie se convirtió en un fenómeno literario y cultural, vendiendo millones de copias y siendo adaptada exitosamente al cine. Más allá de "Harry Potter", Rowling también ha incursionado en la escritura de novelas para adultos y ha sido reconocida por su filantropía, lo que la convierte en una figura destacada en la literatura contemporánea.
                                    </p>
                                </div>
                                <div>
                                    <div class="alert alert-secondary text-center text-white" role="alert">
                                        Paginas relacionadas
                                    </div>
                                    @include('pages.fantasia.recomendar')
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Acompáñame en un emocionante viaje al mundo mágico y las aventuras de "Harry Potter" de J.K. Rowling! 🪄📚 Sumérgete en un universo de hechicería, criaturas mágicas y héroes inolvidables mientras Harry y sus amigos enfrentan desafíos y descubren un mundo de magia y amistad en la legendaria escuela de Hogwarts. 📖✨'])
    </div>
@endsection
