<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));

Route::get('/beula/acerca-de', array('as' => 'acercaDe', 'uses' => 'HomeController@getAcercaDe'));
Route::get('/beula/mision-y-vision', array('as' => 'misionVision', 'uses' => 'HomeController@getMisionVision'));

Route::get('/servicios/reclutamiento-seleccion-de-personal', array('uses' => 'HomeController@getServicioReclutamiento'));
Route::get('/servicios/evaluaciones-psicolaborales-desempeno', array('uses' => 'HomeController@getServicioEvaluacionesPsicolaboralesDesempeno'));
Route::get('/servicios/analisis-descripcion-de-puestos', array('uses' => 'HomeController@getServicioAnalisisDescripcionPuestos'));
Route::get('/servicios/identificacion-de-competencias', array('uses' => 'HomeController@getServicioIdentificacion'));
Route::get('/servicios/capacitacion-de-personal', array('uses' => 'HomeController@getServicioCapacitacion'));
Route::get('/servicios/outdoor-training', array('uses' => 'HomeController@getServicioOutdoorTraining'));
Route::get('/servicios/elearning-corporativo', array('uses' => 'HomeController@getServicioElearningCorporativo'));
Route::get('/servicios/terapia-empresarial-psicologica', array('uses' => 'HomeController@getServicioTerapiaEmpresarial'));

Route::get('/escuela/cursos', array('uses' => 'HomeController@getEscuelaCursos'));
Route::get('/escuela/especializaciones', array('uses' => 'HomeController@getEscuelaEspecializaciones'));
Route::get('/escuela/seminarios', array('uses' => 'HomeController@getEscuelaSeminarios'));

