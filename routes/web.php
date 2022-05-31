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
    return view('index');
});
Route::get('/tokyo', function () {
    return view('tokyo');
});

Route::get('/kyoto', function () {
    return view('kyoto');
});

Route::get('/nagoya', function () {
    return view('nagoya');
});

Route::get('/osaka', function () {
    return view('osaka');
});

Route::get('/sapporo', function () {
    return view('sapporo');
});

Route::get('/yokohama', function () {
    return view('yokohama');
});


