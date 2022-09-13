<?php

namespace Sitedata;

class CertificatesRoutes implements \Main\Routes
{
    private $employeesTable;
    private $certificatesTable;
    private $authentication;

    public function __construct()
    {
        include __DIR__ . '/../../includes/DatabaseConnection.php';

        $this->certificatesTable = new \Main\DatabaseTable($pdo, 'Certificate', 'id');
        $this->employeesTable = new \Main\DatabaseTable($pdo, 'employee', 'id');
        $this->authentication = new \Main\Authentication($this->employeesTable, 'email', 'password');
    }

    public function getRoutes(): array
    {
        $certificatesController = new \Sitedata\Controllers\Certificate($this->certificatesTable, $this->employeesTable, $this->authentication);
        $employeeController = new \Sitedata\Controllers\Register($this->employeesTable);
        $loginController = new \Sitedata\Controllers\Login($this->authentication);

        $routes = [
            'employee/register' => [
                'GET' => [
                    'controller' => $employeeController,
                    'action' => 'registrationForm'
                ],
                'POST' => [
                    'controller' => $employeeController,
                    'action' => 'registerUser'
                ]
            ],
            'employee/success' => [
                'GET' => [
                    'controller' => $employeeController,
                    'action' => 'success'
                ]
            ],
            'joke/edit' => [
                'POST' => [
                    'controller' => $certificatesController,
                    'action' => 'saveEdit'
                ],
                'GET' => [
                    'controller' => $certificatesController,
                    'action' => 'edit'
                ],
                'login' => true

            ],
            'joke/delete' => [
                'POST' => [
                    'controller' => $certificatesController,
                    'action' => 'delete'
                ],
                'login' => true
            ],
            'joke/list' => [
                'GET' => [
                    'controller' => $certificatesController,
                    'action' => 'list'
                ]
            ],
            'login/error' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'error'
                ]
            ],
            'login/success' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'success'
                ]
            ],
            'logout' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'logout'
                ]
            ],
            'login' => [
                'GET' => [
                    'controller' => $loginController,
                    'action' => 'loginForm'
                ],
                'POST' => [
                    'controller' => $loginController,
                    'action' => 'processLogin'
                ]
            ],
            'certificates/list' => ['GET' => ['controller' => $certificatesController, 'action' => 'list']],
            '' => ['GET' => ['controller' => $certificatesController, 'action' => 'home']]
        ];

        return $routes;
    }

    public function getAuthentication(): \Main\Authentication
    {
        return $this->authentication;
    }
}
