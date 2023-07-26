<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('tareas', App\Http\Controllers\TareaController::class)->middleware('auth');
Route::resource('proyectos', App\Http\Controllers\ProyectoController::class)->middleware('auth');
Route::resource('comentarios', App\Http\Controllers\ComentarioController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
