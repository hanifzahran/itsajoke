<?php
use Illuminate\Http\Request;

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.beranda.index');
    });
    Route::get('/detail-customer', function () {
        return view('admin.beranda.data_customer');
    });
    Route::get('/detail-transaksi', function () {
        return view('admin.beranda.data_transaksi');
    });

    Route::get('/ubah', function () {
        return view('admin.beranda.ubah');
    });

    Route::get('/ubah-tanaman', function () {
        return view('admin.beranda.ubah_tanaman');
    });

    Route::get('/ubah-layanan', function () {
        return view('admin.beranda.ubah_layanan');
    });
    
    Route::get('/ubah-item', function () {
        return view('admin.beranda.ubah_item');
    });

    Route::get('/tambah-tanaman', function () {
        return view('admin.beranda.tambah_tanaman');
    });

    Route::get('/tambah-layanan', function () {
        return view('admin.beranda.tambah_layanan');
    });

    Route::get('/tambah-item', function () {
        return view('admin.beranda.tambah_item');
    });


    Route::prefix('pemesanan')->group(function () {
        Route::get('/', function () {
            $data= [
                "products" => [
                   [
                    "nama_tanaman" => "monstera",
                    "nama_penyewa" => "Sutarman P",
                    "alamat_penyewa" => "Tanggerang banten",
                    "jumlah_tanaman" => "2",
                    "status" => "Lunas"
                   ],
                   [
                    "nama_tanaman" => "Homalomena",
                    "nama_penyewa" => "Alex Nurdin",
                    "jumlah_tanaman" => "1",
                    "alamat_penyewa" => "Jakarta no 1 banten",
                    "status" => "Pending"
                   ],
                   [
                    "nama_tanaman" => "Peperomia",
                    "nama_penyewa" => "Ahmad Buchori",
                    "jumlah_tanaman" => "3",
                    "alamat_penyewa" => "Skabumi banten",
                    "status" => "Lunas"
                   ],
                   [
                    "nama_tanaman" => "Alocasia ",
                    "nama_penyewa" => "David Alexander",
                    "jumlah_tanaman" => "4",
                    "alamat_penyewa" => "Jawa tengah banten",
                    "status" => "Lunas"
                   ]
                ], 
            ];
            return view('admin.pemesanan.index',$data);
        });
        Route::get('/daftar-pengiriman', function () {
            return view('admin.pemesanan.daftar_pengiriman');
        });
    });

    
    Route::prefix('perawatan')->group(function () {
        Route::get('/', function () {
            return view('admin.perawatan.index');
        });
        Route::get('/detail', function () {
            $data = [
                "nama_penyewa" => "Sutarman P",
                "alamat_penyewa" => "Jl. Taman Anggrek No 16, Cakung, Jakarta Timur RT 01 / RW 02 52181",
                "layanan_perawatan" => "Penyiraman tanaman",
                "jumlah_perawatan1" => "2 kali seminggu",
                "jumlah_perawatan2" => "4 minggu",
            ];

            if(request()->id){
                $data = [
                    "nama_penyewa" => "David Alexander",
                    "alamat_penyewa" => "Jl. Jend Sudirman No 1, Kebon Jati, Jakarta Timur RT 05 / RW 05 50989",
                    "layanan_perawatan" => "Penyiraman tanaman",
                    "jumlah_perawatan1" => "2 kali seminggu",
                    "jumlah_perawatan2" => "3 minggu",
                ];
            }


            return view('admin.perawatan.detail',$data);
        });
    });

  

});
