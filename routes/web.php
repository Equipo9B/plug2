<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PerfilController;
use App\http\Controllers\HobbieController;
use App\http\Controllers\UsuarioController;
use App\http\Controllers\FotoController;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/usuarios', [PerfilController::class, 'show']);

Route::resource('/hobbies', HobbieController::class);

Route::resource('usuarios', UsuarioController::class);

Route::resource('fotos', FotoController::class);

//Route::get('usuario','PerfilController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
