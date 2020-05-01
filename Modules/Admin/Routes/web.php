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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    /* Create Group Category */
    Route::group(['prefix' => 'category'], function() {
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create', 'AdminCategoryController@store');
        Route::get('/update/{id}', 'AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{id}', 'AdminCategoryController@update');
        Route::get('/delete/{id}', 'AdminCategoryController@delete')->name('admin.get.delete.category');
        Route::get('/{action}/{id}', 'AdminCategoryController@action')->name('admin.get.action.category');
    });

    /* Create Group Product */
    Route::group(['prefix' => 'product'], function() {
        Route::get('/', 'AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create', 'AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create', 'AdminProductController@store');
        Route::get('/update/{id}', 'AdminProductController@edit')->name('admin.get.edit.product');
        Route::post('/update/{id}', 'AdminProductController@update');
        Route::get('/delete/{id}', 'AdminProductController@delete')->name('admin.get.delete.product');
        Route::get('/{action}/{id}', 'AdminProductController@action')->name('admin.get.action.product');

    });

    /* Create Group Post */
    Route::group(['prefix' => 'post'], function() {
        Route::get('/', 'AdminPostController@index')->name('admin.get.list.post');
        Route::get('/create', 'AdminPostController@create')->name('admin.get.create.post');
        Route::post('/create', 'AdminPostController@store');
        Route::get('/update/{id}', 'AdminPostController@edit')->name('admin.get.edit.post');
        Route::post('/update/{id}', 'AdminPostController@update');
        Route::get('/delete/{id}', 'AdminPostController@delete')->name('admin.get.delete.post');
        Route::get('/{action}/{id}', 'AdminPostController@action')->name('admin.get.action.post');
    });

    /* Create Group Banner */
    Route::group(['prefix' => 'banner'], function() {
        Route::get('/', 'AdminBannerController@index')->name('admin.get.list.banner');
        Route::get('/create', 'AdminBannerController@create')->name('admin.get.create.banner');
        Route::post('/create', 'AdminBannerController@store');
        Route::get('/update/{id}', 'AdminBannerController@edit')->name('admin.get.edit.banner');
        Route::post('/update/{id}', 'AdminBannerController@update');
        Route::get('/delete/{id}', 'AdminBannerController@delete')->name('admin.get.delete.banner');
        Route::get('/{action}/{id}', 'AdminBannerController@action')->name('admin.get.action.banner');
    });

    /* Create Group User */
    Route::group(['prefix' => 'user'], function() {
        Route::get('/', 'AdminUserController@index')->name('admin.get.list.user');
        Route::get('/create', 'AdminUserController@create')->name('admin.get.create.user');
        Route::post('/create', 'AdminUserController@store');
        Route::get('/update/{id}', 'AdminUserController@edit')->name('admin.get.edit.user');
        Route::post('/update/{id}', 'AdminUserController@update');
        Route::get('/delete/{id}', 'AdminUserController@delete')->name('admin.get.delete.user');
        Route::get('/{action}/{id}', 'AdminUserController@action')->name('admin.get.action.user');
    });

    Route::group(['prefix' => 'transaction'], function () {
        Route::get('/', 'AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/delete/{id}', 'AdminTransactionController@deleteDetailsOrders')->name('admin.get.delete.details.orders');
        Route::get('/view/{id}', 'AdminTransactionController@viewOrders')->name('admin.get.view.orders');
    });

    Route::get('ckeditor', 'CkeditorController@index');
    Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', 'AdminSettingController@index')->name('admin.settings.index');
        Route::post('/create', 'AdminSettingController@store')->name('admin.settings.create');
    });
});

