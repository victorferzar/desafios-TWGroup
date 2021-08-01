<?php

use App\Http\Controllers\Desafio1Controller;
use App\Http\Controllers\Desafio3Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/desafio2', function () {
    return view('desafio2');
});

Route::get('/desafio4', function () {
    return view('desafio4');
});

Route::get('/desafio1', Desafio1Controller::class)->name('index');
Route::get('/desafio1/{id}', Desafio1Controller::class)->name('total');
Route::get('/desafio3', [Desafio3Controller::class, 'index'])->name('desafio3');
Route::post('', [Desafio3Controller::class, 'insert'])->name('insertar');
