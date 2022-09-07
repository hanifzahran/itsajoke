<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;

//GROUP ADMIN UNTUK LOGIN DOANG
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login_admin');
    Route::post('/login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login_admin.post');
    Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', function () {
            return view('admin.beranda.index');
        })->name('admin.beranda');
        //pattern untuk settings di POV admin kek secara general
        //Route::get('/settings', 'App\Http\Controllers\Admin\SettingController@index')->name('admin.settings');
        //Route::post('/settings', 'App\Http\Controllers\Admin\SettingController@update')->name('admin.settings.update');
    });
});


//Grouping untuk categories nanti
/*
Route::group(['prefix'  =>   'categories'], function () {

    Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
    Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
    Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
    Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
    Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');
});
*/


/*
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
            return view('admin.perawatan.detail');
        });
    });

  

});
*/
