<?php

use App\Http\Controllers\ContenidoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('detallesCategoria/{id}', [ContenidoController::class,'detallesCategoria'])->name('detallesCategoria');

Route::get('detallesCategoria/{id}', [ContenidoController::class, 'detallesCategoria'])->name('detallesCategoria');

Auth::routes([
    'register' => false,
    'reset' => false,
    'email' => false
]);

// Redirigir manualmente a la página de login si alguien accede a /register
Route::get('/register', function () {
    return redirect()->route('login'); 
});

Route::get('/password/reset', function () {
    return redirect()->route('login'); 
});

Route::get('/password/email', function () {
    return redirect()->route('login'); 
});

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function()
{

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Contenidos

    Route::get('admin/contenidosIndex', [ContenidoController::class,'contenidosIndex'] )->name('contenidosIndex');

    Route::get('admin/contenidosCreate', [ContenidoController::class,'contenidosCreate'])->name('contenidosCreate');

    Route::post('admin/contenidosStore', [ContenidoController::class,'contenidosStore'] )->name('contenidosStore');

});


