<?php
date_default_timezone_set("Asia/Jakarta");
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
require __DIR__.'/auth.php';
require __DIR__.'/customer.php';
require __DIR__.'/akun.php';
require __DIR__.'/admin.php';

Route::get('/tes', function () {
    return view('tes');
});
