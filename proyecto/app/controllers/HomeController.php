<?php

class HomeController extends BaseController {

	public function getHome()
	{
		return View::make('frontend.home');
	}

}
