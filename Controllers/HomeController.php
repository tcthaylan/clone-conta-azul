<?php
namespace Controllers;

use \Core\Controller;
use \Models\Users;

class HomeController extends Controller 
{
	public function __construct()
	{
		$users = new Users();

		if (!$users->isLogged()) {
			header('Location: '.BASE_URL.'auth');
		}
	}

	public function index()
	{
		$array = array();

		$this->loadTemplate('home', $array);
	}

}