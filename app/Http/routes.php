<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/test', function(){
	echo "Esto es una simple prueba!!";
});

Route::get('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa ruta y el verbo 
	return 'get';
});

Route::post('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo POST
	return 'post';
});

Route::put('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo PUT
	return 'put';
});

Route::delete('/probando/ruta', function(){
	//código a ejecutar cuando se produzca esa rutay el verbo DELETE
	return 'delete';
});

Route::get('colaboradores/{nombre}', function($nombre){
	return "Mostrando el colaborador $nombre";
});

Route::get('agenda/{mes}/{ano}', function($mes, $ano){
	return "Viendo la agenda de $mes de $ano";
});

Route::get('/jugador/{id}','Jugador@nombre');

Route::post('/equip/editar/{id}', 'Equip@editar');

Route::get('equip/{categoria}', function($categoria){
	return "Cadet A + Cadet B";
});

Route::get('/equip/{categoria}/{nom}', 'Equip@ver')->where(array('nom' => '[a-cA-C]+'));

Route::get('/equip/', 'Equip@recibirPost');

Route::get('/equipos', function(){
	dd(\App\Equip::all());
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
