<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cari', 'HomeController@cari')->name('cari');

Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/cari', 'CategoryController@cari')->name('cari');
Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');

Route::get('/help', 'BantuanController@index')->name('index');
Route::get('/help/cari', 'BantuanController@cari')->name('cari');
Route::get('/help/{id}', 'BantuanController@detail')->name('bantuan-detail');

Route::get('/details/{id}', 'DetailController@index')->name('detail');

Route::post('/comment', 'DetailController@comment');

Route::get('/profile/{id}', 'DetailController@profile')->name('profile');
Route::get('/profile-saya', 'DetailController@profilesaya')->name('profile-saya');

Route::post('/details/{id}', 'DetailController@add')->name('detail-add');
Route::post('/favorit/{id}', 'DetailController@favorit')->name('detail-favorit');

Route::post('/checkout/callback', 'CheckoutController@callback')->name('midtrans-callback');

Route::get('/success', 'CartController@success')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

// New routes
Route::get('/bantuan', 'BantuanController@index')->name('bantuan');

Route::get('/detail-bantuan/{id}', 'BantuanController@detail')->name('detail-bantuan');

Route::get('/ketentuan', 'KetentuanController@index')->name('ketentuan');

Route::get('/contact/create', 'ContactController@create')->name('contact-create');
Route::post('/contact', 'ContactController@store')->name('contact-store');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/cari', 'BlogController@cari')->name('cari');
Route::get('/detail-blog/{id}', 'BlogController@detail')->name('detail-blog');

Route::get('/blogcategories', 'BlogcategoryController@index')->name('blogcategories');
Route::get('/blogcategories/cari', 'BlogcategoryController@cari')->name('cari');
Route::get('/blogcategories/{id}', 'BlogcategoryController@detail')->name('blogcategories-detail');

// Registrasi email
Route::view('verifikasi-email', 'email')->middleware('verified');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/cart', 'CartController@index')->name('cart');
    Route::delete('/cart/{id}', 'CartController@delete')->name('cart-delete');

    Route::get('/favorit', 'FavoritController@index')->name('favorit');
    Route::delete('/favorit/{id}', 'FavoritController@delete')->name('favorit-delete');

    Route::post('/checkout', 'CheckoutController@process')->name('checkout');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



    Route::get('/dashboard/products', 'DashboardProductController@index')->name('dashboard-products');

    Route::get('/dashboard/products/create', 'DashboardProductController@create')->name('dashboard-products-create');

    Route::post('/dashboard/products', 'DashboardProductController@store')->name('dashboard-product-store');

    Route::get('/dashboard/products/{id}', 'DashboardProductController@details')->name('dashboard-products-details');

    Route::post('/dashboard/products/{id}', 'DashboardProductController@update')->name('dashboard-product-update');


    Route::get('/dashboard/banks', 'DashboardBankController@index')->name('dashboard-banks');

    Route::get('/dashboard/banks/create', 'DashboardBankController@create')->name('dashboard-banks-create');

    Route::post('/dashboard/banks', 'DashboardBankController@store')->name('dashboard-banks-store');

    Route::get('/dashboard/banks/edit/{id}', 'DashboardBankController@edit')->name('dashboard-banks-edit');

    Route::put('/dashboard/banks/{id}', 'DashboardBankController@update')->name('dashboard-banks-update');

    Route::delete('/dashboard/banks/delete/{id}', 'DashboardBankController@destroy')->name('dashboard-banks-delete');


    Route::post('/dashboard/products/gallery/upload', 'DashboardProductController@uploadGallery')->name('dashboard-products-gallery-upload');

    Route::get('/dashboard/products/gallery/delete/{id}', 'DashboardProductController@deleteGallery')->name('dashboard-products-gallery-delete');

    Route::get('/dashboard/transactions', 'DashboardTransactionsController@index')->name('dashboard-transaction');

    Route::get('/dashboard/transactions/{id}', 'DashboardTransactionsController@details')->name('dashboard-transaction-details');

    Route::post('/dashboard/transactions/{id}', 'DashboardTransactionsController@update')->name('dashboard-transaction-update');

    // Riwayat Transaksi Frontend
    Route::get('/riwayat-transaksi', 'TransaksiController@index')->name('riwayat-transaksi');

    Route::get('/riwayat-transaksi/cetak_pdf/{id}', 'TransaksiController@cetak_pdf')->name('riwayat-transaksi-pdf');

    Route::get('/riwayat-transaksi/{id}', 'TransaksiController@details')->name('riwayat-transaksi-detail');
    
    Route::post('/riwayat-transaksi/{id}', 'TransaksiController@update')->name('riwayat-transaksi-update');
      

    Route::get('/dashboard/settings', 'DashboardSettingController@store')->name('dashboard-settings-store');

    Route::get('/dashboard/account', 'DashboardSettingController@account')->name('dashboard-settings-account');
    Route::post('/dashboard/account/{redirect}', 'DashboardSettingController@update')->name('dashboard-settings-redirect');
    
    Route::post('/dashboard/settings/{redirect}', 'DashboardSettingController@update_store')->name('dashboard-settings-store-redirect');
    
    // Ganti Password
    Route::get('password', 'PasswordController@edit')
        ->name('user.password.edit');

    Route::patch('password', 'PasswordController@update')
        ->name('user.password.update');

});

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        Route::resource('category','CategoryController');
        Route::resource('contact','ContactController');
        Route::resource('aksi','AksiController');
        Route::resource('iklan','IklanController');
        Route::resource('product','ProductController');
        Route::resource('user','UserController');
        Route::resource('product-gallery','ProductGalleryController');
        Route::resource('sosial','SosialController');
        Route::resource('help','HelpController');
        Route::resource('bank','BankController');
        Route::resource('banklist','BankListController');
        Route::resource('blogcategory','BlogcategoryController');
        Route::resource('blog','BlogController');

        Route::get('/order', 'LaporanController@orderReport')->name('report.order');
        Route::get('/order/pdf/{daterange}', 'LaporanController@orderReportPdf')->name('report.order_pdf');
    });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
