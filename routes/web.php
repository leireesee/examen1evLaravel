<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManzanaController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

/////////////////////////////////////////////

//RUTAS CREADAS POR MI

//VER
//ver manzanas
Route::get('/dashboard', [ManzanaController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//INSERTAR
//ver form insertar manzana
Route::get('/formInsertar', [ManzanaController::class, 'create'])->middleware(['auth', 'verified'])->name('formInsertar');

//insertar manzana
Route::post('/formInsertar', [ManzanaController::class, 'store'])->middleware(['before', 'after'])->name('formInsertar.store');

//MODIFICAR
//ver form relleno para modificar una manzana
Route::get('/formModificar/{manzana}', [ManzanaController::class, 'edit'])->middleware(['auth', 'verified'])->name('formModificar');

//modificar la manzana
Route::post('/formModificar', [ManzanaController::class, 'update'])->middleware(['auth', 'verified'])->name('formModificar.update');

//ELIMINAR
Route::post('/dashboard/{manzana}', [ManzanaController::class, 'destroy'])->middleware(['eliminar'])->name('dashboard.eliminar');

/////////////////////////////////////////////

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
