<?php

// frontend
Route::get('/', 'HomeController@getLanding');




Route::post('profile', array('before' => 'csrf', function()
{
	Route::post('/registro-personas', 'HomeController@postRegistroPersonas');
	Route::post('/registro-empresas', 'HomeController@postRegistroEmpresas');
}));

