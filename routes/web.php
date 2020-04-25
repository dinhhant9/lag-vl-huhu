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

Route::get('/', function () {
    return view('pages.trangchu');
});

Route::get('/doi-hinh-chuan', function () {
    return view('pages.doihinhchuan');
});

Route::get('/danh-sach-tuong', function () {
    return view('pages.danhsachtuong');
});

Route::get('/co-so-du-lieu', function () {
    return view('pages.cosodulieupage.danhsachtuong');
});

Route::get('/bai-viet', function () {
    return view('pages.baiviet');
});

Route::get('/chi-tiet-ban-cap-nhat', function () {
    return view('pages.chitietbancapnhat');
});

Route::get('/danh-sach-trang-bi', function () {
    return view('pages.cosodulieupage.danhsachtrangbi');
});

Route::get('/cach-ghep-do', function () {
    return view('pages.cosodulieupage.cachghepdo');
});

Route::get('/toc', function () {
    return view('pages.cosodulieupage.toc');
});

Route::get('/he', function () {
    return view('pages.cosodulieupage.he');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
