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
    return view('pages/home', ['title' => 'MTs Unggulan PP Amanatul Ummah']);
})->name('home');

Route::get('/galeri', function () {
    return view('pages/galeri', ['title' => 'Galeri | MTs Unggulan PP Amanatul Ummah']);
})->name('galeri');

Route::get('/tentangKami', function () {
    return view('pages/tentang', ['title' => 'Tentang Kami | MTs Unggulan PP Amanatul Ummah']);
})->name('TentangKami');

Route::get('/laravel', function () {
    return view('welcome');
});