<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* ------------------------------------------------- */
Route::get('/', 'loginController@verPagina');
Route::match(array('GET','POST'),'/login', 'loginController@verPagina');
Route::post('/verificarUsuario', 'loginController@verificarUsuario');
Route::post('/actividad/setdata','actividadController@setDataActivity');

Route::get('/logout', 'loginController@salir');

  /* ------------------------------------------------- */
  Route::get('/menor-mayor', function(){
    return View::make('juegos.de-menor-a-mayor');
  });
  /* ------------------------------------------------- */
  Route::get('/sumas-restas', function(){
    return View::make('juegos.sumas-restas');
  });
  /* ------------------------------------------------- */
/*-------------------------------------------- */
Route::get('/tablas', function(){
    return View::make('juegos.tablas');
});
##Route::get('/dibujar-numeros',function(){
##	return View::make('juegos.dibujar_numeros');
##});
Route::get('/horcado',function(){
	return View::make('juegos.ahorcado');
});
##Route::get('/memorama',function(){
##	return View::make('juegos.memorama');
##});
Route::get('/operaciones',function(){
	return View::make('juegos.operaciones_aritmeticas');
});
Route::get('/sumas',function(){
	return View::make('juegos.sumas');
});
 Route::get('/multiplicaciones',function(){
	return View::make('juegos.multiplicaciones');
});
Route::get('/restas',function(){
	return View::make('juegos.restas');
});
/* ------------------------------------------------- */
