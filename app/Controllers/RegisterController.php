<?php

namespace App\Controllers;

class RegisterController extends BaseController
{
	public function index()
	{
        echo view('layouts/header');
		echo view('register_view');
		echo view('layouts/footer');
	}
}
