<?php

use App\Http\Controllers\ContenidoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function()
{

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Contenidos

    Route::get('admin/contenidosIndex', [ContenidoController::class,'contenidosIndex'] )->name('contenidosIndex');

    Route::get('admin/contenidosCreate', [ContenidoController::class,'contenidosCreate'])->name('contenidosCreate');

    Route::post('admin/contenidosStore', [ContenidoController::class,'contenidosStore'] )->name('contenidosStore');

});


