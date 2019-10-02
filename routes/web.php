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
    return view('homee');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'NoticiasController@carrucelnoticiayeventoenelhomee');



//rutas de modulo de noticias
Route::get('/Noticias/nuevo','NoticiasController@create')->name('crearNoticia');
Route::post('/Noticiasz' , 'NoticiasController@store');
Route::get('/Noticias', 'NoticiasController@selecciona_Todas_Las_Noticias' )->name('mostrarNoticias');
Route:: get('/Noticias/{id}','NoticiasController@show');
Route:: get('/Noticias/{Noticia}/edit','NoticiasController@edit');
Route:: put('/Noticias/{Noticia}', 'NoticiasController@update');
Route:: delete('/Noticias/{Noticia}', 'NoticiasController@destroy');

//rutas del modulo de eventos
Route::get('/Eventos/nuevo','EventosController@create')->name('crearEvento');
Route::post('/Eventosz' , 'EventosController@store');
Route::get('/Eventos', 'EventosController@selecciona_Todos_Los_Eventos' )->name('mostrarEventos');
Route:: get('/Eventos/{id}','EventosController@show');
Route:: get('/Eventos/{Noticia}/edit','EventosController@edit');
Route:: put('/Eventos/{Noticia}', 'EventosController@update');
Route:: delete('/Eventos/{Noticia}', 'EventosController@destroy');

//rutas de contacto
Route::get('/contacto', 'ContactosController@contactar')->name('contacto');
Route::post('/contactoz' , 'ContactosController@storecontactar');
Route::get('/mensajescontacto', 'ContactosController@mostrarmensajescontacto');
// casa anauco museo historia actualidad
Route::get('/historia', 'CasaanaucoController@mostrarhistoria');
Route::get('/servicios', 'CasaanaucoController@mostrarservicios');
Route::get('/coleccion', 'CasaanaucoController@mostrarcoleccion');
//Rutas de modulo piezas historicas
Route::get('/Piezas', 'PiezasController@index');


