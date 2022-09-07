<?php
use Illuminate\Http\Request;
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/admin/login', function () {
    return view('auth.login_admin');
});
Route::get('/register', function () {
    return view('auth.register');
});