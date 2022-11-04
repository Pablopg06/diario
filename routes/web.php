<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiasController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowNoticias;

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

Route::get('/', HomeController::class)->name('home');

/*Route::resource('noticias', NoticiasController::class)->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'])->names('noticias');*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'])->get('noticias',ShowNoticias::class)->name('noticias.index');
