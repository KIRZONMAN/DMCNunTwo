<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { /*esta es la linea 16*/
    return view('welcome');
});

Route::get('/hola/{nombre}', function ($nombre) {
    return view('hola', ['nombre'=> $nombre]);
});

Route::get('/bienvenid@/{nombre}', function ($nombre) {
    return view('bienvenido');
});

Route::get('/contacto/{nombre}', function ($nombre) {
    return view('contacto');
});

use App\Http\Controllers\PersonaController;

Route::get('/personas', [PersonaController::class, 'mostrarPersonas']);

Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

use App\Http\Controllers\CategoriaController;

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/crear', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');

