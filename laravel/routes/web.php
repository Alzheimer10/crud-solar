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



if(!Config::get('app.login')){
	require base_path('/routes/routes.php');
}else{
	Auth::routes();
	Route::group(['middleware' => 'auth'], function()
	{
		require base_path('/routes/routes.php');
	});
}