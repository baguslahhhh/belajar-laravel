<?php

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

Route::get('/Belajar', function () {
	echo "belajar PHP. Tulisan ini ditampilan oken routes";
});

Route::get('/belajar1', function() {
	echo "belajar PHP buat test 001";
});

Route::get('/belajar2', function() {
	echo "belajar PHP buat test 002";
});

Route::get('/belajar3', function() {
	echo "belajar PHP buat test 003";
});

Route::get('/test', function () {
    return view('test');
});
