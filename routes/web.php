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


// --- USER --- //



Route::get('/', function () {
    $data = [
        'title' => 'HOME',
    ];
    return view('_partials/header', $data) . view('_partials/navbar') . view('pages/home') . view('_partials/footer');
});
Route::get('/games', function () {
    $data = [
        'title' => 'GAMES'
    ];
    return view('_partials/header', $data) . view('_partials/navbar') . view('pages/games') . view('_partials/footer');
});
Route::get('/pulsa', function () {
    $data = [
        'title' => 'PULSA'
    ];
    return view('_partials/header', $data) . view('_partials/navbar') . view('pages/pulsa') . view('_partials/footer');
});
Route::get('/voucher', function () {
    $data = [
        'title' => 'VOUCHER'
    ];
    return view('_partials/header', $data) . view('_partials/navbar') . view('pages/voucher') . view('_partials/footer');
});
Route::get('/joki', function () {
    $data = [
        'title' => 'JOKI'
    ];
    return view('_partials/header', $data) . view('_partials/navbar') . view('pages/joki') . view('_partials/footer');
});
Route::get('/pricelist', function () {
    $data = [
        'title' => 'PRICE LIST'
    ];
    return view('_partials/header', $data) . view('_partials/navbar') . view('pages/pricelist') . view('_partials/footer');
});
Route::get('/about-us', function () {
    $data = [
        'title' => 'TENTANG KAMI'
    ];
    return view('_partials/header', $data) . view('_partials/navbar') . view('pages/about-us') . view('_partials/footer');
});


// --- ADMINISTRATOR --- //
Route::get('/backdoor-admin/login', function () {
    $data = [
        'title' => 'LOGIN ADMIN'
    ];
    return view('_partials/header', $data) . view('backdoor-admin/login') . view('_partials/footer');
});
Route::get('/backdoor-admin/dashboard', function () {
    $data = [
        'title' => 'DASHBOARD ADMIN'
    ];
    return view('_partials/header', $data) . view('backdoor-admin/dashboard') . view('_partials/footer');
});
