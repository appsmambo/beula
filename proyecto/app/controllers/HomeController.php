<?php

class HomeController extends BaseController {

	public function getLanding()
	{
		return View::make('frontend.landing');
	}
	
	public function postRegistroPersonas()
	{
		DB::beginTransaction();
		try {

			$personas = new Participante;

			$participante->nombre			= ucwords(strtolower(Input::get('nombre')));
			$participante->numdocumento		= Input::get('numdocumento');
			$participante->correo			= strtolower(Input::get('correo'));
			$participante->flagcliente		= $flagCliente;
			$participante->telefono			= Input::get('telefono');
			$participante->respuesta		= Input::get('respuesta');
			$participante->ip				= Request::getClientIp(true);

			$participante->save();

		} catch (ValidationException $e) {
			DB::rollback();
			$respuesta = array('status' => 'error', 'messages' => 'ValidationException');
		} catch (\Exception $e) {
			DB::rollback();
			$respuesta = array('status' => 'error', 'messages' => 'Exception');
		}
		$respuesta = array('status' => 'ok');
		DB::commit();
	}

	public function postRegistroEmpresas()
	{
		
	}

	public function getHome()
	{
		
	}

}
