<?php

class HomeController extends BaseController {

	public function getInicio()
	{
		return View::make('inicio');
	}
	
	public function getAcercaDe()
	{
		return View::make('beula.acerca-de');
	}
	
	public function getMisionVision()
	{
		return View::make('beula.mision-vision');
	}

	public function getFormModal()
	{
		return View::make('beula.form-modal');
	}
	
	public function getSendForm()
	{
		return View::make('beula.sendform');
	}

	public function getServicioReclutamiento()
	{
		return View::make('servicios.reclutamiento');
	}
	
	public function getServicioEvaluacionesPsicolaboralesDesempeno()
	{
		return View::make('servicios.evaluaciones');
	}
	
	public function getServicioAnalisisDescripcionPuestos()
	{
		return View::make('servicios.analisis');
	}
	
	public function getServicioIdentificacion()
	{
		return View::make('servicios.identificacion');
	}
	
	public function getServicioCapacitacion()
	{
		return View::make('servicios.capacitacion');
	}
	
	public function getServicioOutdoorTraining()
	{
		return View::make('servicios.outdoor');
	}
	
	public function getServicioElearningCorporativo()
	{
		return View::make('servicios.elearning');
	}
	
	public function getServicioTerapiaEmpresarial()
	{
		return View::make('servicios.terapia');
	}
	
	public function getEscuelaCursos()
	{
		return View::make('escuela.cursos');
	}
	
	public function getEscuelaEspecializaciones()
	{
		return View::make('escuela.especializaciones');
	}
	
	public function getEscuelaSeminarios()
	{
		return View::make('escuela.seminarios');
	}

}
