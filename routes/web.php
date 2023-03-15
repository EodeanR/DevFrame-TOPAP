<?php

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
    return view('template/header') . view('template/navbar') . view('pages/home') . view('template/footer');
});
Route::get('/games', function () {
    return view('template/header') . view('template/navbar') . view('pages/games') . view('template/footer');
});
