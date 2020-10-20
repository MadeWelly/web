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
    return view('home.index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
});
Route::post('register', function () {
    return "Maaf program register kami sedang mempersiapkannya";
})->name("register");

Route::get('blog', function () {
    return view('blog/index');
});


// Courses
Route::get('coding/laravel', function () {
    return view('courses.laravel.index');
});
Route::get('coding/javascript', function () {
    return view('courses.javascript.index');
});
Route::get('coding/git', function () {
    return view('courses.git.index');
});

//read more
Route::get('laravel/konsep-dasar-laravel', function () {
    return view('courses.laravel.modul.konsep_dasar_laravel');
});
Route::get('javascript/fungsi-input-dan-output', function () {
    return view('courses.javascript.modul.fungsi_input_output');
});
Route::get('git/repositori-git-dalam-proyek', function () {
    return view('courses.git.modul.repositori_git_dalam_proyek');
});
