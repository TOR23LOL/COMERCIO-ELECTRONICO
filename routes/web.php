<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionController;

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

//RUTAS CONTACTOS

//RUTAS INFORMACIÓN Y PANEL DE CONTROL
Route::get('/informacion', [InformacionController::class, 'Informacion']);
Route::get('/GuardarPC', [InformacionController::class, 'crearInfo']);
Route::get('/editInfo/{id}', [InformacionController::class, 'editInfo']);
Route::get('/updateInfo/{id}', [InformacionController::class, 'updateInfo']);

//RUTAS DEL LOGIN
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');