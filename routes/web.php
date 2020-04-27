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

// Route::get('/danh-sach-tuong', function () {
//     return view('pages.danhsachtuong');
// });

Route::get('/bai-viet', function () {
    return view('pages.baiviet');
});

Route::get('/chi-tiet-ban-cap-nhat', function () {
    return view('pages.chitietbancapnhat');
});


// Khu vực cho cơ sở dữ liệu

Route::prefix('co-so-du-lieu')->group(function () {
    Route::get('danh-sach-tuong', function () {
        return view('pages.cosodulieupage.danhsachtuong');
    });

    Route::get('danh-sach-trang-bi', function () {
        return view('pages.cosodulieupage.danhsachtrangbi');
    });

    Route::get('cach-ghep-do', function () {
        return view('pages.cosodulieupage.cachghepdo');
    });

    Route::get('danh-sach-toc', function () {
        return view('pages.cosodulieupage.toc');
    });

    Route::get('danh-sach-he', function () {
        return view('pages.cosodulieupage.he');
    });
});


// Khu vực cho admin


Auth::routes();

//Route::get('/admin', 'HomeController@index')->name('admin');


/* Auto-generated admin routes */
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/users',                                  'Admin\UsersController@index');
    Route::get('/admin/users/create',                           'Admin\UsersController@create');
    Route::post('/admin/users',                                 'Admin\UsersController@store');
    Route::get('/admin/users/{user}/edit',                      'Admin\UsersController@edit')->name('admin/users/edit');
    Route::post('/admin/users/{user}',                          'Admin\UsersController@update')->name('admin/users/update');
    Route::delete('/admin/users/{user}',                        'Admin\UsersController@destroy')->name('admin/users/destroy');
    Route::get('/admin/users/{user}/resend-activation',         'Admin\UsersController@resendActivationEmail')->name('admin/users/resendActivationEmail');
});

/* Auto-generated profile routes */
Route::middleware(['admin'])->group(function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});
