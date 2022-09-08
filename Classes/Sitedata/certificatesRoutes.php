<?php

namespace Sitedata;

class certificatesRoutes implements \Main\Routes
{
    public function getRoutes()
    {
        include __DIR__ . '/../../includes/DatabaseConnection.php';

        // $jokesTable = new \Main\DatabaseTable($pdo, 'joke', 'id');
        $CertificateTable = new \Main\DatabaseTable($pdo, 'certificates', 'id');

        $CertificateController = new \Sitedata\Controllers\Certificate($CertificateTable);

        $routes = [
            'joke/edit' => [
                'POST' => [
                    'controller' => $CertificateController,
                    'action' => 'saveEdit'
                ],
                'GET' => [
                    'controller' =>  $CertificateController,
                    'action' => 'edit'
                ]

            ],
            'joke/delete' => [
                'POST' => [
                    'controller' => $CertificateController,
                    'action' => 'delete'
                ]
            ],
            'joke/list' => [
                'GET' => [
                    'controller' => $CertificateController,
                    'action' => 'list'
                ]
            ],
            '' => [
                'GET' => [
                    'controller' => $CertificateController,
                    'action' => 'list'
                ]
            ]
        ];

        return $routes;
    }
}
