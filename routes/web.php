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
// routes/web.php for web routes
// routes/api.php for API routes


Route::get('/', function () {
    return view('user.index');
});
Route::get('/index.html', function () {
    return view('user.index');
});
Route::get('/menu.html', function () {
    return view('user.menu');
});
Route::get('/reservation.html', function () {
    return view('user.reservation');
});
Route::get('/about.html', function () {
    return view('user.about');
});
Route::get('/contact.html', function () {
    return view('user.contact');
});

