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
    return view('welcome');
});

// route admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('employee','Admin\AdminController@index')->name('admin.employee');
    Route::get('insert','Admin\AdminController@create')->name('admin.employee.insert');
    Route::post('submit','Admin\AdminController@store')->name('admin.employee.submit');
    Route::get('edit/{id}','Admin\AdminController@edit')->name('admin.employee.edit');
    Route::post('update/{id}','Admin\AdminController@update')->name('admin.employee.update');
    //Route::get('edit','Admin\AdminController@edit')->name('admin.employee.edit');
    Route::get('delete/{id}','Admin\AdminController@destroy')->name('admin.employee.delete');
});

Route::resource('photos', 'PhotoController');

