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
Route::get('/dashboard', function () {
    return view('admin.layoutadmin');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/register', function () {
    return view('admin.register');
});