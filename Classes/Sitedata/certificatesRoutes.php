<?php

namespace Sitedata;

class CertificatesRoutes implements \Main\Routes
{
    public function getRoutes()
    {
        include __DIR__ . '/../../includes/DatabaseConnection.php';

        $certificatesTable = new \Main\DatabaseTable($pdo, 'certificates', 'id');
        $usersTable = new \Main\DatabaseTable($pdo, 'users', 'id');

        $certificatesController = new \Sitedata\Controllers\Certificate($certificatesTable);
        $usersController = new \Sitedata\Controllers\Users($usersTable);

        $routes = [
            'author/register' => [
                'GET' => [
                    'controller' => $usersController,
                    'action' => 'registrationForm'
                ],
                'POST' => [
                    'controller' => $usersController,
                    'action' => 'registerUser'
                ]
            ],
            'author/success' => [
                'GET' => [
                    'controller' => $usersController,
                    'action' => 'success'
                ]
            ],
            'joke/edit' => [
                'POST' => [
                    'controller' => $usersController,
                    'action' => 'saveEdit'
                ],
                'GET' => [
                    'controller' => $usersController,
                    'action' => 'edit'
                ]

            ],
            'joke/delete' => [
                'POST' => [
                    'controller' => $usersController,
                    'action' => 'delete'
                ]
            ],
            'users/list' => [
                'GET' => [
                    'controller' => $usersController,
                    'action' => 'list'
                ]
            ],
            '' => [
                'GET' => [
                    'controller' => $certificatesController,
                    'action' => 'list'
                ]
            ]
        ];

        return $routes;
    }
}
