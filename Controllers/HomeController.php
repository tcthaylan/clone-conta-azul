<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;

class HomeController extends Controller 
{
	public function index()
	{
		$array = array();

		$this->loadTemplate('home', $array);
	}

}