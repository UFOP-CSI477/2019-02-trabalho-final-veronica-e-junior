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

Route::get('/', ['as'=>'site.home', function () {
    return view('site.home');
}]);

Auth::routes();

Route::get('/login', 'LoginController@index')->name('login');


//rota login
Route::get('admin/login', ['as'=>'admin.login', function(){
    return view('admin.login.index');
}]);
Route::post('admin/login', ['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);