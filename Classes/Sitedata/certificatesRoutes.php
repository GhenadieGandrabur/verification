<?php

namespace Sitedata;

class CertificatesRoutes implements \Main\Routes
{
    private $employeesTable;
    private $certificatesTable;
    private $vehiclesTable;
    private $authentication;

    public function __construct()
    {
        include __DIR__ . '/../../includes/DatabaseConnection.php';

        $this->certificatesTable = new \Main\DatabaseTable($pdo, 'certificates', 'id');
        $this->employeesTable = new \Main\DatabaseTable($pdo, 'employee', 'id');
        $this->vehiclesTable = new \Main\DatabaseTable($pdo, 'vehicles', 'id');
        $this->tahoTable = new \Main\DatabaseTable($pdo, 'taho', 'id');
        $this->authentication = new \Main\Authentication($this->employeesTable, 'email', 'password');
    }

    public function getRoutes(): array
    {
        $certificatesController = new \Sitedata\Controllers\Certificate($this->certificatesTable, $this->employeesTable, $this->authentication);
        $employeeController = new \Sitedata\Controllers\Register($this->employeesTable);
        $userController = new \Sitedata\Controllers\Employee($this->employeesTable, $this->authentication);
        $vehiclesController = new \Sitedata\Controllers\Vehicles($this->vehiclesTable);
        $tahoController = new \Sitedata\Controllers\Taho($this->tahoTable);
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
            'certificates/edit' => [
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
            'certificate/delete' => [
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
            'certificates/list' => ['GET' => ['controller' => $certificatesController, 'action' => 'list'], 'login' => true],
            'vehicles/list' => ['GET' => ['controller' => $vehiclesController, 'action' => 'list'], 'login' => true],
            'taho/list' => ['GET' => ['controller' => $tahoController, 'action' => 'list'], 'login' => true],
            'taho/edit' => ['GET' => ['controller' => $tahoController, 'action' => 'saveEdit'], 'login' => true],
            'users/list' => ['GET' => ['controller' => $userController, 'action' => 'list'], 'login' => true],
            '' =>                  ['GET' => ['controller' => $certificatesController, 'action' => 'home']]
        ];

        return $routes;
    }

    public function getAuthentication(): \Main\Authentication
    {
        return $this->authentication;
    }
}
