<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/contacto', function () {
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

Route::post('/enviar-correo', [FormController::class, 'enviarCorreo'])->name('enviar.correo');