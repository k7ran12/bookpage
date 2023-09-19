@extends('layouts.app')
@section('title', 'Book | Las Crónicas de Narnia')
@section('content')
    <div class="page-content">

        <!-- Start home -->
        <section class="page-title-box">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center text-white">
                            <h3 class="mb-4">Las Crónicas de Narnia - Sinopsis</h3>
                            <div class="page-next">
                                <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('lista_fantasia') }}">Fantasía</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Las Crónicas de Narnia</li>
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
                                Las Crónicas de Narnia de C.S. Lewis
                            </div>
                            <div class="card-body p-4">
                                <div class="row mb-3">
                                     <div class="col-md-4">
                                        <img style="width: 100%;height: 100%;" src="data:image/jpeg;base64,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" alt="Portada del libro Las Crónicas de Narnia de C.S. Lewis">
                                     </div>
                                     <div class="col-md-8">
                                        <table class="table">
                                            <tr>
                                                <td><strong>Autor</strong>:</td>
                                                <td>C.S. Lewis</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Género</strong>:</td>
                                                <td>Fantasía</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Año de publicación</strong>:</td>
                                                <td>1950</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Idioma</strong>:</td>
                                                <td>Inglés</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Título Original</strong>:</td>
                                                <td>The Lion, the Witch and the Wardrobe</td>
                                            </tr>
                                        </table>
                                     </div>
                                </div>

                                <div class="mb-5">
                                    <h6 class="fs-17 fw-medium mb-4 text-center">Sinopsis</h6>
                                    <p class="text-muted"><strong>"El Sobrino del Mago" (1955)</strong>: La saga comienza con la historia de Digory Kirke y su amiga Polly Plummer. Juntos descubren un mundo mágico llamado Narnia al explorar los bosques de la casa de Digory. Allí, se encuentran con criaturas asombrosas y descubren los orígenes de este mundo encantado. Esta novela establece las bases para las aventuras futuras en Narnia.</p>
                                    <p class="text-muted"><strong>"El León, la Bruja y el Ropero" (1950)</strong>: En esta segunda entrega, cuatro hermanos, Peter, Susan, Edmund y Lucy Pevensie, son evacuados de Londres durante la Segunda Guerra Mundial y encuentran refugio en la misteriosa mansión del profesor Kirke. A través de un antiguo ropero, los niños descubren Narnia, ahora bajo el yugo de la malvada Bruja Blanca. Con la ayuda del león Aslan, se unen para liberar a Narnia del invierno eterno.</p>
                                    <p class="text-muted"><strong>"El Caballo y su Niño" (1954)</strong>: Esta novela sigue a Shasta, un joven que huye de su vida de esclavitud junto a un misterioso caballo llamado Bree. Juntos, parten en un viaje a Narnia y se unen a una búsqueda para prevenir una invasión. La historia explora temas de libertad y destino.</p>
                                    <p class="text-muted"><strong>"El Príncipe Caspian" (1951)</strong>: La trama se centra en el regreso de los hermanos Pevensie a Narnia, donde descubren que han pasado siglos desde su última visita. Ayudan al joven príncipe Caspian a reclamar su trono y liberar Narnia de la opresión de los telmarinos.</p>
                                    <p class="text-muted"><strong>"La Travesía del Viajero del Alba" (1952)</strong>: Lucy, Edmund y su primo Eustace se embarcan en un viaje a bordo del barco El Viajero del Alba para buscar a los siete señores exiliados de Narnia. En su travesía, encuentran islas misteriosas y seres mitológicos, y descubren la importancia de la valentía y la amistad.</p>
                                    <p class="text-muted"><strong>"La Silla de Plata" (1953)</strong>: En esta entrega, Eustace y su amiga Jill Pole son transportados a Narnia para rescatar al príncipe Rilian, quien ha desaparecido misteriosamente. Su búsqueda los lleva a tierras desconocidas y criaturas extrañas.</p>
                                    <p class="text-muted"><strong>"La Última Batalla" (1956)</strong>: La saga llega a su conclusión épica cuando Narnia se enfrenta a su batalla final. Los hermanos Pevensie, Eustace y Jill, junto con otros personajes queridos, luchan por la supervivencia de Narnia y su destino final.</p>
                                </div>
                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Reseña
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        "Las Crónicas de Narnia" de C.S. Lewis es una obra literaria que despierta la imaginación y el asombro en cada página. A través de siete libros repletos de aventuras, personajes memorables y una rica mitología, Lewis nos transporta a Narnia, un mundo mágico donde la magia, la moralidad y la fe se entrelazan en una narrativa inolvidable. Desde el misterio de un ropero mágico hasta las batallas épicas por la libertad, cada libro ofrece una experiencia única mientras explora temas profundos. Esta serie atemporal no solo es un regalo para la literatura de fantasía, sino también una invitación a reflexionar sobre los valores que nos definen como seres humanos.
                                    </p>
                                </div>

                                <div class="alert alert-secondary text-center text-white" role="alert">
                                    Acerca del autor
                                </div>
                                <div class="mb-5">
                                    <p class="text-muted">
                                        Clive Staples Lewis, conocido como C.S. Lewis, fue un destacado escritor, pensador y académico británico del siglo XX. Nacido en Belfast, Irlanda, en 1898, Lewis es ampliamente reconocido por su impactante contribución a la literatura y la teología. Además de su aclamada serie "Las Crónicas de Narnia", Lewis escribió numerosos ensayos y libros sobre temas religiosos, siendo uno de los apologistas cristianos más influyentes de su tiempo. Su habilidad para entrelazar narrativa y filosofía ha dejado una huella duradera en la literatura y la espiritualidad, y su legado continúa inspirando a lectores de todas las edades en todo el mundo.
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
        @include('layouts.compartir', ['url' => url()->current(), 'texto' => '¡Embárcate en un viaje a través del asombroso mundo de "Las Crónicas de Narnia" de C.S. Lewis! 🌟📚 Sumérgete en un universo mágico lleno de aventuras, criaturas extraordinarias y lecciones sobre moralidad y fe mientras sigues a los protagonistas en sus travesías a través de un mundo encantado. 📖✨'])
    </div>
@endsection
