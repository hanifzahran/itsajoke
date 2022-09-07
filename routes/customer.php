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
    
    $done = intval(request()->done);
    if($done == 0){
        $done = 1;
    }


    $getClassPesanan = function($val) use ($done){
        if($done >= $val){
            return "pesanan-done";
        }else if($done + 1 == $val){
            return "pesanan-progress";
        }else{
            return "pesanan-pending";
        }
    };

    $data['getClassPesanan'] = $getClassPesanan;


    return view('customer.product.progress_pemesanan',$data);
});

Route::get('/product/progress-pemesanan-2', function () {
    
    return view('customer.product.progress_pemesanan_2');
});

Route::get('/product/konfirmasi-perawatan', function () {
    
    return view('customer.product.konfirmasi_perawatan');
});

Route::get('/product/data-pengembalian', function () {
    
    return view('customer.product.data_pengembalian');
});