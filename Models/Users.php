<?php
namespace Models;

use \Core\Model;

class Users extends Model
{
    public function isLogged()
    {
        if (isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])) {
            return true;
        }

        return false;
    }

    public function doLogin($email, $password)
    {
        $sql = 'SELECT id FROM users WHERE email = :email AND password = :password';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', $password);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $info = $sql->fetch();
            $_SESSION['ccUser'] = $info['id'];
            return true;
        }

        return false;
    }
}