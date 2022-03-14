<?php

use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

Route::group(['namespace'=>'Main'], function(){
    Route::get('/', 'IndexController')->name('main.index');
    Route::get('/about', 'AboutController')->name('main.about');
    Route::get('/contacts', 'ContactController')->name('main.contacts');
    Route::get('/pickup', 'PickupController')->name('main.pickup');
    Route::get('/guarantee', 'GuaranteeController')->name('main.guarantee');
    Route::get('/delivery', 'DeliveryController')->name('main.delivery');
    Route::get('/services', 'ServicesController')->name('main.services');
    Route::post('/', 'StoreController')->name('main.store');
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware' => ['auth', 'admin', 'verified']], function(){
    Route::group(['namespace'=>'Main'], function(){
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
        Route::group(['namespace'=>'Category', 'prefix' => 'categories'], function(){
            Route::get('/', 'IndexController')->name('admin.category.index');
            Route::get('/create', 'CreateController')->name('admin.category.create');
            Route::post('/', 'StoreController')->name('admin.category.store');
            Route::get('/{category}', 'ShowController')->name('admin.category.show');
            Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
            Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
            Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
        });
        Route::group(['namespace'=>'Good', 'prefix' => 'goods'], function(){
            Route::get('/', 'IndexController')->name('admin.good.index');
            Route::get('/create', 'CreateController')->name('admin.good.create');
            Route::post('/', 'StoreController')->name('admin.good.store');
            Route::get('/{good}', 'ShowController')->name('admin.good.show');
            Route::get('/{good}/edit', 'EditController')->name('admin.good.edit');
            Route::patch('/{good}', 'UpdateController')->name('admin.good.update');
            Route::delete('/{good}', 'DeleteController')->name('admin.good.delete');
        });
        Route::group(['namespace'=>'Application', 'prefix' => 'application'], function(){
            Route::get('/', 'IndexController')->name('admin.application.index');
            Route::get('/{applicat}', 'ShowController')->name('admin.application.show');
            Route::delete('/{applicat}', 'DeleteController')->name('admin.application.delete');
        });
        Route::group(['namespace'=>'User', 'prefix' => 'users'], function(){
            Route::get('/', 'IndexController')->name('admin.user.index');
            Route::get('/create', 'CreateController')->name('admin.user.create');
            Route::post('/', 'StoreController')->name('admin.user.store');
            Route::get('/{user}', 'ShowController')->name('admin.user.show');
            Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
            Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
            Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
        });
});

Auth::routes(['verify' => true]);