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

Route::group(['prefix' => 'admin' ,'namespace' => 'Admin'], function () {
    Route::get('login', 'LoginController@showLoginForms')->name('admin.login');
    Route::post('login', 'LoginController@login')->name('admin.login');
    Route::get('logouts', 'LoginController@logouts')->name('admin.logouts');
    Route::get('index', 'IndexController@index');

});

Route::group(['prefix' => 'admin' ,'namespace' => 'Order'], function () {
    Route::get('order', 'OrderController@index')->name('admin.order');
    Route::get('changerecord', 'OrderController@changeRecord')->name('admin.changerecord');
    Route::get('cio', 'OrderController@cio')->name('admin.cio');
});

Route::group(['prefix' => 'admin' ,'namespace' => 'System'], function () {

    Route::get('install', 'SystemController@install')->name('admin.install');
    Route::post('save', 'SystemController@save')->name('admin.save');
    Route::post('savesm', 'SystemController@savesm')->name('admin.savesm');
    Route::post('savep', 'SystemController@savep')->name('admin.savep');


    Route::get('cio', 'SystemController@cio')->name('admin.cio');
    Route::get('email', 'SystemController@install')->name('admin.email');
    Route::get('mobile', 'SystemController@mobile')->name('admin.mobile');
    Route::get('planning', 'SystemController@planning')->name('admin.planning');
    Route::get('clearData', 'SystemController@clearData')->name('admin.clearData');
    Route::get('editPassword', 'SystemController@editPassword')->name('admin.editPassword');
    Route::get('smssz', 'SystemController@smssz')->name('admin.smssz');
});
Route::group(['prefix' => 'admin' ,'namespace' => 'Agent'], function () {
    Route::get('agent', 'AgentController@index')->name('admin.agent');
});

Route::group(['prefix' => 'admin' ,'namespace' => 'User'], function () {
    Route::get('user', 'UserController@index')->name('admin.user');
});

Route::group(['prefix' => 'admin' ,'namespace' => 'Finance'], function () {
    Route::get('loan', 'LoanController@index')->name('admin.loan');
    Route::post('saves', 'LoanController@save')->name('admin.saves');

});



Route::get('/', function () {
    return view('welcome');
});
