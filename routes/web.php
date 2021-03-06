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
    return view('pages/home');
});

Route::get('/books', function () {
    return view('pages/books/books');
});

Route::get('/best-books', function () {
    return view('pages/books/best-books');
});

Route::get('/downloads', function () {
    return view('pages/books/downloads');
});
 
Route::get('/newsletters', function () {
    return view('pages/newsletters');
});

Route::get('/about', function () {
    return view('pages/about/about');
});

Route::get('/editorial-process', function () {
    return view('pages/about/editorial-process');
});

Route::get('/contact', function () {
    return view('pages/about/contact');
});
