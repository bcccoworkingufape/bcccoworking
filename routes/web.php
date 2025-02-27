<?php

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

Route::get('/home', function () {
    return redirect()->route('home');
});


Auth::routes();
//logado
  //home
Route::get('/config.home', 'HomeController@index')->name('config_home');
Route::post('/edit.bloco.apresentacao', 'ConfigPaginaInicialController@editBlocoApresentacao')->name('edit_blocoApresentacao');
Route::post('/edit.bloco.detalhe', 'ConfigPaginaInicialController@editBlocoDetalhe')->name('edit_blocoDetalhe');
Route::post('/edit.bloco.esquerda', 'ConfigPaginaInicialController@editBlocoEsquerda')->name('edit_blocoEsquerda');
Route::post('/edit.bloco.centro', 'ConfigPaginaInicialController@editBlocoCentro')->name('edit_blocoCentro');
Route::post('/edit.bloco.direita', 'ConfigPaginaInicialController@editBlocoDireita')->name('edit_blocoDireita');
Route::post('/edit.img.apresentacao', 'ConfigPaginaInicialController@editImgApresentacao')->name('edit_imgPrincipal');
Route::post('/edit.img.bloco.esquerda', 'ConfigPaginaInicialController@editImgBlocoEsquerda')->name('edit_imgBlocoEsquerda');
Route::post('/edit.img.bloco.centro', 'ConfigPaginaInicialController@editImgBlocoCentro')->name('edit_imgBlocoCentro');
Route::post('/edit.img.bloco.direita', 'ConfigPaginaInicialController@editImgBlocoDireita')->name('edit_imgBlocoDireita');
  //project
Route::get('/config.project', 'HomeController@projects')->name('config_project');
Route::post('/add.project', 'ProjectController@addProject')->name('add_project');
Route::get('/edit.project', 'ProjectController@editProject')->name('edit_project');
Route::post('/update.project', 'ProjectController@updateProject')->name('update_project');
Route::post('/delete.project', 'ProjectController@deleteProject')->name('delete_project');
Route::get('/create.project', 'ProjectController@createProjects')->name('create_project');
Route::get('/select.project', 'ProjectController@selectProjects')->name('select_project');
  //coordenador
Route::post('/add.coordenador', 'CoordenadorController@addCoordenador')->name('add_coordenador');
Route::post('/delete.coordenador', 'CoordenadorController@deleteCoordenador')->name('delete_coordenador');
  //membro
Route::post('/add.membro', 'MembroController@addMembro')->name('add_membro');
Route::post('/delete.membro', 'MembroController@deleteMembro')->name('delete_membro');
  //news
Route::get('/config.news', 'HomeController@news')->name('config_news');
Route::post('/add.news', 'NewsController@addNews')->name('add_news');
Route::post('/edit.news', 'NewsController@editNews')->name('edit_news');
Route::post('/delete.news', 'NewsController@deleteNews')->name('delete_news');
  //people
Route::get('/config.pessoa', 'HomeController@pessoas')->name('config_pessoa');
Route::post('/add.pessoa', 'PessoaController@addPessoa')->name('add_pessoa');
Route::post('/edit.pessoa', 'PessoaController@editPessoa')->name('edit_pessoa');
Route::post('/delete.pessoa', 'PessoaController@deletePessoa')->name('delete_pessoa');

//nao logado
Route::get('/', 'ConfigPaginaInicialController@index')->name('home');
  //project
Route::get('/all.project', 'ProjectController@allProject')->name('all_project');
Route::get('/show.project', 'ProjectController@showProject')->name('show_project');
  //midia
Route::get('/midia', function(){return view('midia');})->name('midia');
  //news
Route::get('/all.news', 'NewsController@allNews')->name('all_news');
Route::get('/show.news', 'NewsController@showNews')->name('show_news');
Route::get('/destaque.news', 'NewsController@destaqueNews')->name('destaque_news');
  //pessoa
Route::get('/all.pessoa', 'PessoaController@allPessoa')->name('all_pessoa');
Route::get('/all.portfolio', 'ProjectController@portfolio')->name('portfolio');
  //contato
Route::get('/contato', function(){return view('contato');})->name('contato');
