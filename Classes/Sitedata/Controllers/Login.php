<?php

namespace Sitedata\Controllers;

class Login
{
    private $authentication;

    public function __construct(\Main\Authentication $authentication)
    {
        $this->authentication = $authentication;
    }

    public function loginForm()
    {
        return ['template' => 'login.html.php', 'title' => 'Log In'];
    }

    public function processLogin()
    {
        if ($this->authentication->login($_POST['email'], $_POST['password'])) {
            header('location: /certificates/list');
        } else {
            return [
                'template' => 'login.html.php',
                'title' => 'Log In',
                'variables' => [
                    'error' => 'Invalid username/password.'
                ]
            ];
        }
    }

    public function success()
    {
        return ['template' => 'loginsuccess.html.php', 'title' => 'Login Successful'];
    }

    public function error()
    {
        return ['template' => 'loginerror.html.php', 'title' => 'You are not logged in'];
    }
    public function logout()
    {
        session_destroy();
        header('location: /login');
        die;
       /* return [
            'template' => 'logout.html.php',
            'title' => 'You have been logged out'
        ];*/
    }
}
