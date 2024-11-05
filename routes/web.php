<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::group(['namespace' => 'Web'], function () {
        Route::get('/','WebController@index')->name('web.home');
        Route::get('/about-us','PageController@about')->name('web.about_us');
        Route::get('/contact','PageController@contact')->name('web.contact');
        Route::get('products/pd/{slug}','ProductController@show')->name('web.product_details');
        Route::get('products/{search?}','ProductController@index')->name('web.products')->where('search', '.*');
        Route::get('services/sd/{slug}','ServiceController@show')->name('web.service_details');
        Route::get('services/{search?}','ServiceController@index')->name('web.services')->where('search', '.*');
    });
});
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    // Artisan::call('config:cache');
    Artisan::call('view:clear');
    return back();
})->name('clear');