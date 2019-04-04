<?php
namespace Controllers;

use \Core\Controller;
use Models\Users;

class AuthController extends Controller
{
    public function index() 
    {
        $data = array(
            'error' => ''
        );

        if (!empty($_POST['email'])) {
            
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $email = addslashes($_POST['email']);
                $password = md5($_POST['password']);

                $users = new Users();
                if ($users->doLogin($email, $password)) {
                    header('Location: '.BASE_URL.'home');
                    exit;
                } else {
                    $data['error'] = 'Email e/ou senha incorreto(s)';
                }
            } else {
                $data['error'] = 'Preencha todos os campos';
            }
        }

        $this->loadView('auth/login', $data);
    }
}