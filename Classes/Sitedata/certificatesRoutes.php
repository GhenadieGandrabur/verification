<?php

namespace Sitedata;

class CertificatesRoutes implements \Main\Routes
{
    public function getRoutes()
    {
        include __DIR__ . '/../../includes/DatabaseConnection.php';

        $certificatesTable = new \Main\DatabaseTable($pdo, 'certificates', 'id');
        $usersTable = new \Main\DatabaseTable($pdo, 'users', 'id');
        $vehiclesTable = new \Main\DatabaseTable($pdo, 'vehicles', 'id');
        $tachographsTable = new \Main\DatabaseTable($pdo, 'tachographs', 'id');

        $certificatesController = new \Sitedata\Controllers\Certificate($certificatesTable);
        $usersController = new \Sitedata\Controllers\Users($usersTable);
        $vehiclesController = new \Sitedata\Controllers\Vehicles($vehiclesTable);
        $tachographsController = new \Sitedata\Controllers\Tachographs($tachographsTable);

        $routes = [
            
            '' => ['GET' => ['controller' => $certificatesController,'action' => 'list']],
            'vehicles/list'=>['GET'=>['controller'=> $vehiclesController, 'action'=>'list']],
            'users/list' => ['GET' => ['controller' => $usersController,'action' => 'list' ]],
            'tachographs/list' => ['GET' => ['controller' => $tachographsController,'action' => 'list' ]]
        ];

        return $routes;
    }
}
