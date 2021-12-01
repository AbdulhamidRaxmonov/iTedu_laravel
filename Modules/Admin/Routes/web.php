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
    // user route 
    Route::resource('user','UserController')->except(['destroy', 'show']);
    Route::get('user/delete/{id}', 'UserController@delete')->name('user.delete');
    Route::get('user/logout', 'UserController@logout')->name('user.logout');
    Route::get('user/reset', 'UserController@reset_password')->name('user.reset');
    Route::post('user/reset/save', 'UserController@save_password')->name('user.save');
    // company route
    Route::get('company', 'CompanyController@index')->name('company.index');
    Route::get('company/edit/{id}', 'CompanyController@edit')->name('company.edit');
    Route::post('company/save', 'CompanyController@save')->name('company.save');
    //category route
    Route::resource('category', 'CategoryController')->except(['destroy','show']);
    Route::get('category/delete/{id}', 'CategoryController@delete')->name('category.delete');
    //social route
    Route::resource('social', 'SocialController')->except(['destroy', 'show']);
    Route::get('social/delete/{id}', 'SocialController@delete')->name('social.delete');
    //slidesShow
    Route::resource('slide', 'SlideController')->except(['destroy', 'show']);
    Route::get('slide/delete/{id}', 'SlideController@delete')->name('slide.delete');
    //Feature route
    Route::resource('feature', 'FeatureController')->except(['destroy', 'show']);
    Route::get('feature/delete/{id}','FeatureController@delete')->name('feature.delete');
    //Page route
    Route::resource('page', 'PageController')->only(['index', 'edit', 'update']);
    //Message route
    Route::resource('message', 'MessageController')->only(['index', 'edit', 'update']);
});
