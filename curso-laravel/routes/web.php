<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/home', function () {
//     return view('welcome');
// });

// Route::view('/jogos', 'jogos');

// Route::get('/jogos', function () {
//     return 'Curso Laravel';
// });

/*Parametros estáticos*/
// Route::view('/jogos', 'jogos', ['name'=>'GTA']);

/*Parametros dinamicos*/
// Route::get('/jogos/{name?}', function($name = null) {
//     return view('jogos', ['nomeJogo'=> $name]);
// })-> where('name', '[A-Za-z]+'); //Recebe apenas um ou mais texto.
// Route::get('/jogos/{id?}', function($id = null) {
//     return view('jogos', ['idJogo'=> $id]);
// })-> where('id', '[0-9]+'); //Recebe apenas um ou mais numeros.
// Route::get('jogos/{id?}/{name?}', function($id = null, $name = null) {
//     return view('jogos', ['idJogo' => $id,'nomeJogo' => $name]);
// })-> where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']); //Recebe apenas um ou mais numeros e letras.

// Route::get('/jogos', function () {
//     return view('jogos');
// });

// Route::get('/home', function () {
//     return view('welcome');
// })->name('home-index');

Route::fallback(function() { //Retorna erro caso n encontre a rota.
    return 'Erro a localizar a rota!';
});

//------Chamando Rotas com Controllers------
// Route::get('/jogos',[JogosController::class, 'index']); //Chamando a função da calsse controller.

///--------Grupo de rotas--------////
Route::prefix('jogos')->group(function() {
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});