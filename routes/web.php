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
    $data = [
        'title' => 'HOME - TOPAP'
    ];
    return view('template/header', $data) . view('template/navbar') . view('pages/home') . view('template/footer');
});
Route::get('/games', function () {
    $data = [
        'title' => 'GAMES - TOPAP'
    ];
    return view('template/header', $data) . view('template/navbar') . view('pages/games') . view('template/footer');
});
Route::get('/pulsa', function () {
    $data = [
        'title' => 'PULSA - TOPAP'
    ];
    return view('template/header', $data) . view('template/navbar') . view('pages/pulsa') . view('template/footer');
});
Route::get('/voucher', function () {
    $data = [
        'title' => 'VOUCHER - TOPAP'
    ];
    return view('template/header', $data) . view('template/navbar') . view('pages/voucher') . view('template/footer');
});
Route::get('/joki', function () {
    $data = [
        'title' => 'JOKI - TOPAP'
    ];
    return view('template/header', $data) . view('template/navbar') . view('pages/joki') . view('template/footer');
});
Route::get('/pricelist', function () {
    $data = [
        'title' => 'PRICE LIST - TOPAP'
    ];
    return view('template/header', $data) . view('template/navbar') . view('pages/pricelist') . view('template/footer');
});
Route::get('/backdoor-admin', function () {
    $data = [
        'title' => 'DASHBOARD ADMIN - TOPAP'
    ];
    return view('template/header', $data) . view('admin/backdoor-admin') . view('template/footer');
});
