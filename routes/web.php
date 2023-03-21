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
// login
Route::get('ml3b3t', [UserController::class, 'login'])->name('login');
Route::post('ml3b3t_regis', [UserController::class, 'regis_action'])->name('regis_action');
Route::post('ml3b3t_login', [UserController::class, 'login_action'])->name('login_action');
Route::get('4dm1n', [UserController::class, 'after_auth'])->name('after_auth');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
// admin pages
Route::get('/4dm1n/u53r5', function(){
    return view('pages.users');
})->name('admin-users');