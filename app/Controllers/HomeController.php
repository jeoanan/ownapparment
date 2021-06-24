<?php

namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('home_view');
		echo view('layouts/footer');
	}
}
