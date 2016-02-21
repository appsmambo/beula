<?php

// landing
Route::get('/', 'LandingController@index');




Route::group(array('before' => 'csrf'), function()
{
	Route::post('/registro-personas', 'LandingController@postRegistroPersonas');
	Route::post('/registro-empresas', 'LandingController@postRegistroEmpresas');
});

