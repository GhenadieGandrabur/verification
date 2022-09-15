<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;

class Register{
    private $employeesTable;
    
    public function __construct(DatabaseTable $employeesTable)
    {
        $this->employeesTable = $employeesTable;
    }

    public function registrationForm(){
        return ['template' => 'register.html.php', 'title' => 'Regitre an account'];
    }

    public function success(){
        return ['template' => 'registersuccess.html.php', 'title' => 'Registration successful'];
    }

    public function registerUser()
    {
        $employee = $_POST['employee'];
        $valid = true;
        $errors = [];
        if (empty($employee['name']))
        {
            $valid = false;
            $errors[] = 'Name cannot be blank.';
        }
        if(empty($employee['email']))
        {
            $valid = false;
            $errors[] = "Email cannot be blank";
        } else if (filter_var($employee['email'], FILTER_VALIDATE_EMAIL) == false) {
            $valid = false;
            $errors[] = 'Invalid email address';
        } else {
            $employee['email'] = strtolower($employee['email']);            
            if (count($this->employeesTable->find('email', $employee['email'])) > 0) {
                $valid = false;
                $errors[] = 'That email address is already registered';
            }
        }


        if(empty($employee['password']))
        {
            $valid = false;
            $errors[] = 'Password cannot be blank';
        }
        if ($valid == true) {            
            $employee['password'] = password_hash($employee['password'], PASSWORD_DEFAULT);          
            $this->employeesTable->save($employee);
            header('Location: /employee/success');
        }else{
            return [
                'template' => 'register.html.php',
                'title' => 'Register an account',
                'variables' => ['errors' => $errors, 'employee' => $employee ]
            ];
        }
    }

}