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

}
