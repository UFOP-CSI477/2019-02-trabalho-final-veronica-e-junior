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



//Route::get('/animal/{id}/{nome}',['as'=>'site.animal'], function () {
  //  return view('site.animal')
//}]);

Route::post('admin/busca', ['as'=>'site.busca', 'uses'=>'Site\HomeController@busca']);

Auth::routes();

Route::get('/login', 'LoginController@index')->name('login');
//rota login
Route::get('admin/login', ['as'=>'admin.login', function(){
    return view('admin.login.index');
}]);
Route::post('admin/login', ['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);

//rota perfil
Route::get('admin/perfil', ['as'=>'admin.perfil', 'uses'=>'Admin\UsuarioController@perfil']);

//rota para cadastrar novo usuario
Route::get('admin/cadastrar', ['as'=>'admin.cadastrar', 'uses'=>'Admin\UsuarioController@cadastrar']);

//rota para salvar novo usuário
Route::post('admin/salvar', ['as'=>'admin.salvar', 'uses'=>'Admin\UsuarioController@salvar']);