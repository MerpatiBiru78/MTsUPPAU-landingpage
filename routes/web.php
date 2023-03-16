<?php

use App\Http\Controllers\UserController;
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
    return view('pages/galeri', ['title' => 'Galeri Kami | MTs Unggulan PP Amanatul Ummah']);
})->name('galeri');

Route::get('/tentangKami', function () {
    return view('pages/tentang', ['title' => 'Tentang Kami | MTs Unggulan PP Amanatul Ummah']);
})->name('TentangKami');

Route::get('/guru', function () {
    return view('pages/guru', ['title' => 'Pengajar Kami | MTs Unggulan PP Amanatul Ummah']);
})->name('guru');

Route::get('/prestasi', function () {
    return view('pages/prestasi', ['title' => 'Prestasi Kami | MTs Unggulan PP Amanatul Ummah']);
})->name('prestasi');

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('ml3b3t', [UserController::class, 'login'])->name('login');
Route::post('ml3b3t', [UserController::class, 'regis_action'])->name('regis_action');
Route::get('4dm1n', function () {
    return view('pages.admin',['title'=>'selamat datang admin']);
})->name('after auth');
