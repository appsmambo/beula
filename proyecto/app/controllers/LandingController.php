<?php

class LandingController extends BaseController {

	public function index()
	{
		$cursos = Cursos::where('estado', '=', 1)->get()->toArray();
		return View::make('frontend.landing')->with('cursos', $cursos);
	}
	
	public function postRegistroPersonas()
	{
		DB::beginTransaction();
		try {

			$persona = new LandingPersona;

			$persona->nombres			= ucwords(strtolower(Input::get('persona_nombres')));
			$persona->apellidos			= ucwords(strtolower(Input::get('persona_apellidos')));
			$persona->telefono			= Input::get('persona_telefono');
			$persona->celular			= Input::get('persona_celular');
			$persona->email				= Input::get('persona_email');
			$persona->curso				= Input::get('persona_curso');
			$persona->comentario		= Input::get('persona_comentario');
			$persona->recibir_noticias	= Input::get('persona_informacion');
			$persona->ip				= Request::getClientIp(true);

			$persona->save();

			$respuesta = array('status' => 'ok');
			DB::commit();

		} catch (\Exception $e) {
			DB::rollback();
			$respuesta = array('status' => 'error', 'messages' => 'Exception');
		}

		return Response::json($respuesta, 200);
	}

	public function postRegistroEmpresas()
	{
		DB::beginTransaction();
		try {

			$empresa = new LandingEmpresa;

			$empresa->razon_social			= ucwords(strtolower(Input::get('empresa_razonsocial')));
			$empresa->ruc					= Input::get('empresa_ruc');
			$empresa->inscritos				= Input::get('empresa_inscritos');
			$empresa->domicilio				= Input::get('empresa_domicilio');
			$empresa->email					= Input::get('empresa_email');
			$empresa->telefono				= Input::get('empresa_telefono');
			$empresa->celular				= Input::get('empresa_celular');
			$empresa->curso					= Input::get('empresa_curso');
			$empresa->comentario			= Input::get('empresa_comentario');
			$empresa->recibir_noticias		= Input::get('empresa_informacion');
			$empresa->ip					= Request::getClientIp(true);

			$empresa->save();

			$respuesta = array('status' => 'ok');
			DB::commit();

		} catch (\Exception $e) {
			DB::rollback();
			$respuesta = array('status' => 'error', 'messages' => 'Exception with msg: ' . $e->getMessage());
		}

		return Response::json($respuesta, 200);
	}

}
