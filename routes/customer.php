<?php
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('customer.product.product');
});

Route::get('/product/detail-tanaman', function () {
    
    return view('customer.product.detail_tanaman');
});

Route::get('/product/detail-layanan', function () {
    
    return view('customer.product.detail_layanan');
});
Route::get('/product/detail-item', function () {
    
    return view('customer.product.detail_item');
});
Route::get('/product/keranjang', function () {
    
    return view('customer.product.keranjang');
});
Route::get('/product/pembayaran', function () {
    
    return view('customer.product.pembayaran');
});
Route::get('/product/progress-pemesanan', function () {
    
    return view('customer.product.progress_pemesanan');
});

Route::get('/product/konfirmasi-perawatan', function () {
    
    return view('customer.product.konfirmasi_perawatan');
});

Route::get('/product/data-pengembalian', function () {
    
    return view('customer.product.data_pengembalian');
});