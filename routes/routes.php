<?php 

	Route::get('/hola', function () {
	    dd('hola');
	});

	Route::get('/tabla/{tabla}','tablaController@index')->name('tabla');
	Route::get('/home','HomeController@index')->name('home');
	Route::get('/','HomeController@index')->name('home');
	Route::resource('parametros_medidores', 'parametrosMedidoresControllers');
	Route::post('/eliminar', 'parametrosMedidoresControllers@eliminar')->name('parametros_medidores.eliminar');
	Route::get('cliente', 'parametrosMedidoresControllers@cliente')->name('parametros_medidores.cliente');