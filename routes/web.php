<?php

use App\http\Controllers\ProfilleController;
use App\http\Controllers\MahasiswaController;
use App\http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});






Route::get('/test', function () {
    echo 'ini hanyalah percobaan';
});

Route::get('/mahasiswa/{nama}', function($nama){
    return "nama mahasiswa : $nama";
});

Route::get('/dar-view', function(){
    return view('home');
});

Route::view('master', 'template/master');


Route::get('/profile', [ProfilleController::class, 'index']);


// route untuk mahasiswa
Route::get('data-mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('data-mahasiswa', 'MahasiswaController@index');
Route::get('add-mahasiswa', [MahasiswaController::class, 'create']);
Route::post('save-mahasiswa', [MahasiswaController::class, 'save']);
Route::delete('delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('delete-mahasiswa');

// route untuk blog
Route::get('data-blog', [BlogController::class, 'index']);
Route::get('add-blog', [BlogController::class, 'create']);
Route::post('input-blog', [BlogController::class, 'input']);
Route::delete('delete-blog/{id}', [BlogController::class, 'hapus'])->name('delete-blog');

Route::get('edit-blog/{id}', [BlogController::class, 'rubah'])->name('edit-blog');
Route::post('update-blog/{id}', [BlogController::class, 'barui'])->name('update-blog');


