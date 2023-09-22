<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/categories-book', function () {
    return view('pages.categoria');
})->name('categoria');

Route::post('/searchbook', [BookController::class, 'search']);

Route::prefix('/accion-aventura')->group(function () {
    Route::get('/lista', function () {
        return view('pages.accion_aventura.lista');
    })->name('lista_accion_aventura');

    Route::get('/jurassic-park', function () {
        return view('pages.accion_aventura.jurassic_park');
    })->name('jurassic_park');

    Route::get('/el-hobbit', function () {
        return view('pages.accion_aventura.el_hobbit');
    })->name('el_hobbit');

    Route::get('/los-juegos-del-hambre', function () {
        return view('pages.accion_aventura.los_juegos_del_hambre');
    })->name('los_juegos_del_hambre');

    Route::get('/el-codigo-da-vinci', function () {
        return view('pages.accion_aventura.el_codigo_da_vinci');
    })->name('el_codigo_da_vinci');
});

Route::prefix('/ciencia-ficcion')->group(function () {
    Route::get('/lista', function () {
        return view('pages.ciencia_ficcion.lista');
    })->name('lista_ciencia_ficcion');

    Route::get('/dune', function () {
        return view('pages.ciencia_ficcion.dune');
    })->name('dune');

    Route::get('/1984', function () {
        return view('pages.ciencia_ficcion.1984');
    })->name('1984');

    Route::get('/neuromante', function () {
        return view('pages.ciencia_ficcion.neuromante');
    })->name('neuromante');

    Route::get('/fundacion', function () {
        return view('pages.ciencia_ficcion.fundacion');
    })->name('fundacion');
});

Route::prefix('/fantasia')->group(function () {
    Route::get('/lista', function () {
        return view('pages.fantasia.lista');
    })->name('lista_fantasia');

    Route::get('/harry-potter', function () {
        return view('pages.fantasia.harry_potter');
    })->name('harry_potter');

    Route::get('/las-cronicas-de-narnia', function () {
        return view('pages.fantasia.las_cronicas_de_narnia');
    })->name('las_cronicas_de_narnia');

    Route::get('/el-nombre-del-viento', function () {
        return view('pages.fantasia.el_nombre_del_viento');
    })->name('el_nombre_del_viento');

    Route::get('/elantris', function () {
        return view('pages.fantasia.elantris');
    })->name('elantris');
});

Route::prefix('/novela-negra-o-policiaca')->group(function () {
    Route::get('/lista', function () {
        return view('pages.novela_negra_o_policiaca.lista');
    })->name('novela_negra_o_policiaca');

    Route::get('/el-silencio-de-los-corderos', function () {
        return view('pages.novela_negra_o_policiaca.el_silencio_de_los_corderos');
    })->name('el_silencio_de_los_corderos');

    Route::get('/hombres-que-no-amaban-a-las-mujeres', function () {
        return view('pages.novela_negra_o_policiaca.hombres_que_no_amaban_a_las_mujeres');
    })->name('hombres_que_no_amaban_a_las_mujeres');

    Route::get('/el-cuervo', function () {
        return view('pages.novela_negra_o_policiaca.el_cuervo');
    })->name('el_cuervo');

    Route::get('/la-chica-del-tren', function () {
        return view('pages.novela_negra_o_policiaca.la_chica_del_tren');
    })->name('la_chica_del_tren');
});

Route::prefix('/Novela-Romantica')->group(function () {
    Route::get('/lista', function () {
        return view('pages.novela_romantica.lista');
    })->name('novela_romantica');

    Route::get('/orgullo-y-prejuicio', function () {
        return view('pages.novela_romantica.orgullo_y_prejuicio');
    })->name('orgullo_y_prejuicio');

    Route::get('/cincuenta-sombras-de-grey', function () {
        return view('pages.novela_romantica.cincuenta_sombras_de_grey');
    })->name('cincuenta_sombras_de_grey');

    Route::get('/bajo-el-sol-de-medianoche', function () {
        return view('pages.novela_romantica.bajo_el_sol_de_medianoche');
    })->name('bajo_el_sol_de_medianoche');

    Route::get('/eleanor_y_park', function () {
        return view('pages.novela_romantica.eleanor_y_park');
    })->name('eleanor_y_park');
});

Route::prefix('/Terror-sobrenatural')->group(function () {
    Route::get('/lista', function () {
        return view('pages.terror_sobrenatural.lista');
    })->name('terror_sobrenatural');

    Route::get('/el-resplandor', function () {
        return view('pages.terror_sobrenatural.el_resplandor');
    })->name('el_resplandor');

    Route::get('/el-exorcista', function () {
        return view('pages.terror_sobrenatural.el_exorcista');
    })->name('el_exorcista');

    Route::get('/coraline', function () {
        return view('pages.terror_sobrenatural.coraline');
    })->name('coraline');

    Route::get('/el-hogar-de-miss-peregrine-para-ninos-peculiares', function () {
        return view('pages.terror_sobrenatural.el_hogar_de_miss_peregrine_para_ninos_peculiares');
    })->name('el_hogar_de_miss_peregrine_para_ninos_peculiares');
});
