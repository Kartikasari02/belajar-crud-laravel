<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

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

Route::get('/menu', function () {
    return view('menu');
});

// Route::get('/home', function () {
//     return view ('home');
// });

Route::get('/home', [HomeC::class, 'index']);

Route::get('/About', function () {
    return view ('about');
});

Route::get('/contact', function () {
    return view ('contact');
});

Route::get('/admin', function () {
    return view ('admin');
});



// Route::get('/guru', function () {
//     return view('guru');
// });

// Route::get('/siswa', function () {
//     return view('siswa');
// });

// Route::get('/kelas', function () {
//     return view('kelas');
// });
