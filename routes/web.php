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

Auth::routes();

Route::group(['namespace' => 'Auth'], function () {
    // Route::get('dang-nhap', 'LoginController@getLogin')->name('get.login');
    // Route::post('dang-nhap', 'LoginController@postLogin')->name('post.login');

    // Route::get('dang-ky', 'RegisterController@getRegister')->name('get.register');
    // Route::post('dang-ky', 'RegisterController@PostRegister')->name('post.register');

    // Đăng ký thành viên
    Route::get('register', 'RegisterController@getRegister')->name('get.register');
    Route::post('register', 'RegisterController@postRegister')->name('post.register');
    
    // Đăng nhập và xử lý đăng nhập
    Route::get('login', 'LoginController@getLogin')->name('get.login');
    Route::post('login', 'LoginController@postLogin')->name('post.login');


    Route::get('logout', 'LogoutController@getLogout')->name('get.logout');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/san-pham/{slug}-{id}', 'CategoryController@getListProduct')->name('get.list.product');
Route::get('/chi-tiet-san-pham/{slug}-{id}', 'ProductDetailsController@getProductDetails')->name('get.details.product');



Route::get('lien-he', 'ContactController@getContact')->name('get.contact');
Route::post('lien-he', 'ContactController@postContact')->name('post.contact');


Route::group(['prefix' => 'shopping'], function () {
    Route::get('/add/{id}', 'ShoppingCartController@addProduct')->name('add.shopping.cart');
    Route::get('/delete/{id}', 'ShoppingCartController@deleteProduct')->name('detele.shopping.cart');
    Route::get('/danh-sach', 'ShoppingCartController@getListProductShopping')->name('get.list.shopping.cart');
    
});



// // Route::group(['prefix' => 'gio-hang', 'middleware' => 'web'])->group(function () {
    
// // });

Route::group(['prefix' => 'gio-hang','middleware' => 'CheckLoginUser'], function () {
    Route::get('/thanh-toan', 'ShoppingCartController@getCheckout')->name('get.checkout.shopping.cart');
    Route::post('/thanh-toan', 'ShoppingCartController@saveInfoShoppingCart');
    // Route::get('/thank-you', 'ShoppingCartController@getThankyou')->name('get.thankyou.shopping.cart');
});