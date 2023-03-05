<?php

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

// Route::get('/kuliah/{konsol}/{room}', function ($konsol, $room) {
//     return view('welcome', compact('room','konsol'));
// });
Route::get('', 'frontend\HomeController@index')->name('home');
Route::get('product', 'frontend\ProductController@index')->name('product');
Route::get('product/{id}', 'frontend\ProductController@produkItem')->name('product-item');
Route::get('product/{id}/{id_produk_item}', 'frontend\ProductController@produkItemDetail')->name('product-item-detail');
Route::get('about-us', 'frontend\AboutusController@index')->name('about-us');
Route::get('contact-us', 'frontend\ContactusController@index')->name('contact-us');
Route::post('contact-us/pesan', 'frontend\ContactusController@pesan')->name('contact-us.pesan');
Route::get('pesan/{id}', 'frontend\PesanController@pesan')->name('pesan');

Route::group(['prefix' => 'panel'], function () {
    Route::get('/', 'panel\LoginController@index')->name('panel.login');
    Route::get('login', 'panel\LoginController@index')->name('panel.login');
    Route::get('logout', 'panel\LogoutController@logout')->name('panel.logout');
    Route::post('/login/proses', 'panel\LoginController@loginProses')->name('panel.login.proses');

    Route::group(['prefix' => 'admin', 'middleware'=>['panelAuthAdmin']], function () {
        Route::get('', 'panel\admin\HomeController@index')->name('panel.admin.home.index');
        Route::get('home', 'panel\admin\HomeController@index')->name('panel.admin.home.index');

        Route::group(['prefix' => 'kategori'], function () {
            Route::get('', 'panel\admin\KategoriController@index')->name('panel.admin.kategori.index');
            Route::post('add', 'panel\admin\KategoriController@add')->name('panel.admin.kategori.add');
            Route::post('edit', 'panel\admin\KategoriController@edit')->name('panel.admin.kategori.edit');   
            Route::get('hapus/{id}', 'panel\admin\KategoriController@hapus')->name('panel.admin.kategori.hapus');
            Route::post('ajax/get_by_id', 'panel\admin\KategoriController@get_by_id')->name('panel.admin.kategori.get');
        });

        Route::group(['prefix' => 'produk'], function () {
            Route::get('', 'panel\admin\ProdukController@index')->name('panel.admin.produk.index');
            Route::post('add', 'panel\admin\ProdukController@add')->name('panel.admin.produk.add');
            Route::post('edit', 'panel\admin\ProdukController@edit')->name('panel.admin.produk.edit');   
            Route::get('hapus/{id}', 'panel\admin\ProdukController@hapus')->name('panel.admin.produk.hapus');
            Route::post('ajax/get_by_id', 'panel\admin\ProdukController@get_by_id')->name('panel.admin.produk.get');
        });

        Route::group(['prefix' => 'produk-item'], function () {
            Route::get('', 'panel\admin\ProdukItemController@index')->name('panel.admin.produk-item.index');
            Route::post('add', 'panel\admin\ProdukItemController@add')->name('panel.admin.produk-item.add');
            Route::post('edit', 'panel\admin\ProdukItemController@edit')->name('panel.admin.produk-item.edit');   
            Route::get('hapus/{id}', 'panel\admin\ProdukItemController@hapus')->name('panel.admin.produk-item.hapus');
            Route::post('ajax/get_by_id', 'panel\admin\ProdukItemController@get_by_id')->name('panel.admin.produk-item.get');
        });

        Route::group(['prefix' => 'tim'], function () {
            Route::get('', 'panel\admin\TimController@index')->name('panel.admin.tim.index');
            Route::post('add', 'panel\admin\TimController@add')->name('panel.admin.tim.add');
            Route::post('edit', 'panel\admin\TimController@edit')->name('panel.admin.tim.edit');   
            Route::get('hapus/{id}', 'panel\admin\TimController@hapus')->name('panel.admin.tim.hapus');
            Route::post('ajax/get_by_id', 'panel\admin\TimController@get_by_id')->name('panel.admin.tim.get');
        });

        Route::group(['prefix' => 'service'], function () {
            Route::get('', 'panel\admin\ServiceController@index')->name('panel.admin.service.index');
            Route::post('add', 'panel\admin\ServiceController@add')->name('panel.admin.service.add');
            Route::post('edit', 'panel\admin\ServiceController@edit')->name('panel.admin.service.edit');   
            Route::get('hapus/{id}', 'panel\admin\ServiceController@hapus')->name('panel.admin.service.hapus');
            Route::post('ajax/get_by_id', 'panel\admin\ServiceController@get_by_id')->name('panel.admin.service.get');
        });

        Route::group(['prefix' => 'setting'], function () {
            Route::get('', 'panel\admin\SettingController@index')->name('panel.admin.setting.index');
            // Route::post('add', 'panel\admin\ServiceController@add')->name('panel.admin.service.add');
            Route::post('edit', 'panel\admin\SettingController@edit')->name('panel.admin.setting.edit');   
            // Route::get('hapus/{id}', 'panel\admin\ServiceController@hapus')->name('panel.admin.service.hapus');
            // Route::post('ajax/get_by_id', 'panel\admin\ServiceController@get_by_id')->name('panel.admin.service.get');
        });

        Route::group(['prefix' => 'setting-wa'], function () {
            Route::get('', 'panel\admin\SettingwaController@index')->name('panel.admin.settingwa.index');
            // Route::post('add', 'panel\admin\ServiceController@add')->name('panel.admin.service.add');
            Route::post('edit', 'panel\admin\SettingwaController@edit')->name('panel.admin.settingwa.edit');   
            // Route::get('hapus/{id}', 'panel\admin\ServiceController@hapus')->name('panel.admin.service.hapus');
            // Route::post('ajax/get_by_id', 'panel\admin\ServiceController@get_by_id')->name('panel.admin.service.get');
        });

        Route::group(['prefix' => 'setting-seo'], function () {
            Route::get('', 'panel\admin\SettingseoController@index')->name('panel.admin.settingseo.index');
            Route::post('edit', 'panel\admin\SettingseoController@edit')->name('panel.admin.settingseo.edit');
        });

        Route::group(['prefix' => 'tampilan'], function () {
            Route::group(['prefix' => 'home'], function () {
                Route::get('', 'panel\admin\TampilanhomeController@index')->name('panel.admin.tampilan.home.index');
                Route::post('add', 'panel\admin\TampilanhomeController@add')->name('panel.admin.tampilan.home.add');
                Route::post('ajax/get_by_id', 'panel\admin\TampilanhomeController@get_by_id')->name('panel.admin.tampilan.home.get');                
                Route::post('edit', 'panel\admin\TampilanhomeController@edit')->name('panel.admin.tampilan.home.edit');
                Route::get('hapus/{id}', 'panel\admin\TampilanhomeController@hapus')->name('panel.admin.tampilan.home.hapus');                
            });
        });
    });
});
