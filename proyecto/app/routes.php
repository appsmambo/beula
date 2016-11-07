<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/beula/acerca-de', array('as' => 'acercaDe', 'uses' => 'HomeController@getAcercaDe'));
Route::get('/beula/mision-y-vision', array('as' => 'misionVision', 'uses' => 'HomeController@getmisionVision'));


