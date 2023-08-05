<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PerfilController;
use App\http\Controllers\HobbieController;
use App\http\Controllers\UsuarioController;
use App\http\Controllers\FotoController;
use App\http\Controllers\AuthManager;
use App\http\Controllers\CoincidenciaController;
use App\http\Controllers\MensajeController;

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
    return view('auth.login');
});

//Route::get('/usuarios', [PerfilController::class, 'show']);

Route::resource('/hobbies', HobbieController::class);

Route::resource('usuarios', UsuarioController::class);

Route::resource('fotos', FotoController::class);

Route::resource('coincidencias', CoincidenciaController::class);

Route::resource('mensajes', MensajeController::class);

//Route::get('usuario','PerfilController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth.login', [AuthManager::class, 'loginUs'])->name('loginUs')->middleware('AlreadyLoggedIn');

Route::get('/ingreso', [AuthManager::class, 'ingresoVista'])->name('ingresoVista')->middleware('AlreadyLoggedIn');
Route::post('/ingreso', [AuthManager::class, 'ingresoPost'])->name('ingresoPost');

Route::get('/registro', [AuthManager::class, 'registroVista'])->name('registroVista')->middleware('AlreadyLoggedIn');
Route::post('/registro', [AuthManager::class, 'registroPost'])->name('registroPost');

Route::get('/inicio', [AuthManager::class, 'inicio'])->name('inicio');

Route::get('/perfil', [AuthManager::class, 'perfil'])->name('perfil');

Route::get('/inicio2/{id}', [AuthManager::class, 'inicio2'])->name('inicio2');

Route::get('/salir', [AuthManager::class, 'salir'])->name('salir');

Route::get('/usuarioFoto', [FotoController::class, 'usuarioFoto'])->name('usuarioFoto');

Route::get('/store2', [CoincidenciaController::class, 'store2'])->name('store2');

Route::get('/chatify3/{idUsu}', [AuthManager::class, 'chatify3'])->name('chatify3');

