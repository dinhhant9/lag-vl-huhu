<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.trangchu');
});

Route::get('/doi-hinh-chuan', function () {
    return view('pages.doihinhchuan');
});

Route::get('/danh-sach-tuong', function () {
    return view('pages.danhsachtuong');
});

Route::get('/bai-viet', function () {
    return view('pages.baiviet');
});

Route::get('/chi-tiet-ban-cap-nhat', function () {
    return view('pages.chitietbancapnhat');
});
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
