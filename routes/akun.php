<?php
use Illuminate\Http\Request;
Route::get('/akun/pengaturan-akun', function () {
    return view('customer.akun.pengaturan_akun');
});
Route::get('/akun/pemesanan', function () {
    return view('customer.akun.pemesanan');
});
