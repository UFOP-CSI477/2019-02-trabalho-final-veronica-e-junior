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

Route::get('/',['as'=>'site.home', 'uses'=>'Site\HomeController@index']);



Route::post('/busca',['as'=>'site.busca', 'uses'=>'Site\HomeController@busca']);

Auth::routes();

Route::get('/login', 'LoginController@index')->name('login');
//rota login
Route::get('admin/login', ['as'=>'admin.login', function(){
    return view('admin.login.index');
}]);
Route::post('admin/login', ['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);

//rota sair
Route::get('/admin/login/sair',['as'=>'admin.login.sair', 'uses'=>'Admin\UsuarioController@sair']);

//rota perfil
Route::get('admin/perfil', ['as'=>'admin.perfil', 'uses'=>'Admin\UsuarioController@perfil']);

//rota para cadastrar novo usuario
Route::get('admin/cadastrar', ['as'=>'admin.cadastrar', 'uses'=>'Admin\UsuarioController@cadastrar']);

//rota para salvar novo usuário
Route::post('admin/salvar', ['as'=>'admin.salvar', 'uses'=>'Admin\UsuarioController@salvar']);

//rota para colocar animal em adoção
Route::get('admin/cadastrar-animal', ['as'=>'admin.cadastrar-animal', 'uses'=>'Admin\AnimalController@cadastrarAnimal']);

//rota para salvar novo animal
Route::post('admin/salvar-animal', ['as'=>'admin.salvar-animal', 'uses'=>'Admin\AnimalController@salvarAnimal']);

//rota historico
Route::get('admin/meus-animais', ['as'=>'admin.meus-animais', 'uses'=>'Admin\AnimalController@meusAnimais']);

//rota para animal
Route::get('/animal/{id}/{nome}',['as'=>'site.animal', 'uses'=>'Site\AnimalController@index']);

//pede adoção
Route::post('admin/pede-adocao', ['as'=>'admin.pedir-adocao', 'uses'=>'Admin\AdotarController@salvar']);

//rota tabela com os pedidos de adoção do animal do usuario
Route::get('admin/pedidos', ['as'=>'admin.pedidos', 'uses'=>'Admin\AnimalController@pedidos']);

//rota para os pedidos de adoção do usuario
Route::get('admin/meus-pedidos', ['as'=>'admin.meus-pedidos', 'uses'=>'Admin\AnimalController@meusPedidos']);

//permitir adoção

Route::get('admin/permitir', ['as'=>'admin.animal.finalizaradocao', 'uses'=>'Admin\AnimalController@finalizar']);

//finais_felizes

Route::get('/finaisfelizes',['as'=>'finais.felizes', 'uses'=>'Admin\Finais_FelizesController@index']);

Route::get('admin/permitir/{id}', ['as'=>'admin.animal.finalizaradocao', 'uses'=>'Admin\AdotarController@finalizar']);

