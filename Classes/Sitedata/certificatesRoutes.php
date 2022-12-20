<?php

namespace Sitedata;

use Main\Authentication;

class CertificatesRoutes implements \Main\Routes
{
    private $authorsTable;    
    private $usersTable;    
    private $certificatesTable;
    private $vehicleTable;
    private $authentication;
    private $vehiclesOwnersTable;
    private $tyresTable;
    private $taholistTable;
    private $tahotypeTable;
    

    public function __construct()
    {
        include __DIR__ . '/../../includes/DatabaseConnection.php';

        $this->taholistTable = new \Main\DatabaseTable($pdo, 'taholist', 'id','\Sitedata\Entity\Taho',[&$this->tahotypeTable]);
        $this->tahotypeTable = new \Main\DatabaseTable($pdo, 'tahotypes', 'id','\Sitedata\Entity\Tahotype',[&$this->taholistTable]);
        $this->certificatesTable = new \Main\DatabaseTable($pdo, 'certificates', 'id');
        $this->authorsTable = new \Main\DatabaseTable($pdo, 'author', 'id');        
        $this->usersTable = new \Main\DatabaseTable($pdo, 'author', 'id');
        $this->tyresTable = new \Main\DatabaseTable($pdo, 'tyressize', 'id');
        $this->vehicleTable = new \Main\DatabaseTable($pdo, 'vehicles', 'id');
        $this->vehiclesOwnersTable = new \Main\DatabaseTable($pdo, 'vehiclesowners', 'id');
        $this->authentication = new \Main\Authentication($this->authorsTable, 'email', 'password');
    }

    public function getRoutes(): array
    {
        $tahotypeController = new \Sitedata\Controllers\Tahotype($this->tahotypeTable);
        $tahoController = new \Sitedata\Controllers\Taho($this->taholistTable, $this->tahotypeTable);
        $certificatesController = new \Sitedata\Controllers\Certificate($this->certificatesTable, $this->authorsTable, $this->authentication, $this->vehicleTable);
        $authorController = new \Sitedata\Controllers\Register($this->authorsTable);
        $usersController = new \Sitedata\Controllers\Author($this->usersTable, $this->authentication);       
        $vehicleController = new \Sitedata\Controllers\Vehicles($this->vehicleTable);
        $vehiclesOwnersController = new \Sitedata\Controllers\VehiclesOwners($this->vehiclesOwnersTable);
        $tyresController = new \Sitedata\Controllers\Tyressize($this->tyresTable);
        $loginController = new \Sitedata\Controllers\Login($this->authentication);

        $routes = [
            'author/register' => ['GET' => ['controller' => $authorController,'action' => 'registrationForm' ],
                                 'POST' => ['controller' => $authorController,'action' => 'registerUser'],'login' => true],
            'author/success' =>  ['GET' => ['controller' => $authorController,'action' => 'success']],
            
            'login/error' =>   ['GET' => ['controller' => $loginController,'action' => 'error']],
            'login/success' => ['GET' => ['controller' => $loginController,'action' => 'success']],
            'logout' => ['GET' => ['controller' => $loginController,'action' => 'logout']],
            'login' =>  ['GET' => ['controller' => $loginController,'action' => 'loginForm'],
                         'POST' => ['controller' => $loginController,'action' => 'processLogin']],
            
            'certificates' =>  ['GET' =>  ['controller' => $certificatesController, 'action' => 'list'], 'login' => true],
            'certificates/list' =>  ['GET' =>  ['controller' => $certificatesController, 'action' => 'list'], 'login' => true],
            'certificate/delete' => ['POST' => ['controller' => $certificatesController,'action' => 'delete'],'login' => true ],
            'certificates/edit' =>  ['POST' => ['controller' => $certificatesController, 'action' => 'saveEdit'],
                                     'GET' =>  ['controller' => $certificatesController,'action' => 'edit' ],'login' => true ],                                   
            'certificates/print' => ['GET' => ['controller' => $certificatesController, 'action' => 'print'], 'login' => true],
                
            'vehicles/list' =>   [ 'GET' => ['controller' => $vehicleController, 'action' => 'list'], 'login' => true],
            'vehicle/delete' =>  ['POST' => ['controller' => $vehicleController, 'action' => 'delete'], 'login' => true],
            'vehicle/edit' =>    ['POST' => ['controller' => $vehicleController, 'action' => 'saveEdit'],
                                   'GET' => ['controller' => $vehicleController, 'action' => 'edit'],'login' => true ],
            'vehicle/detailes' =>['GET'=>['controller' => $vehicleController, 'action' => 'detailes'],'login' => true ],
            'vehiclesowners/list' =>   ['GET' =>  ['controller' => $vehiclesOwnersController, 'action' => 'list'], 'login' => true],
            'vehiclesowners/delete' => ['POST' =>  ['controller' => $vehiclesOwnersController, 'action' => 'delete'], 'login' => true],
            'vehiclesowners/edit' =>   ['POST' => ['controller' => $vehiclesOwnersController, 'action' => 'saveEdit'],
                                         'GET' => ['controller' => $vehiclesOwnersController, 'action' => 'edit'],'login' => true ],

            'taho/list' =>   ['GET' =>  ['controller' => $tahoController, 'action' => 'list'], 'login' => true],
            'taho/detailes' =>   ['GET' =>  ['controller' => $tahoController, 'action' => 'detailes'], 'login' => true],
            'taho/delete' => ['POST' =>  ['controller' => $tahoController, 'action' => 'delete'], 'login' => true],
            'taho/edit' =>   ['POST' => ['controller' => $tahoController, 'action' => 'saveEdit'],
                                         'GET' => ['controller' => $tahoController, 'action' => 'edit'],'login' => true ],
                                         
            'users/list' =>   ['GET' =>  ['controller' => $usersController, 'action' => 'list'], 'login' => true],
            'users/delete' => ['POST' => ['controller' => $usersController, 'action' => 'delete'], 'login' => true],
            'users/edit' =>   ['POST' => ['controller' => $usersController, 'action' => 'saveEdit'],
                                 'GET' => ['controller' => $usersController, 'action' => 'edit'],'login' => true ],
                                 
            'tyres/list' =>   ['GET' =>  ['controller' => $tyresController, 'action' => 'list'], 'login' => true],
            'tyres/delete' => ['POST' => ['controller' => $tyresController, 'action' => 'delete'], 'login' => true],
            'tyres/edit' =>   ['POST' => ['controller' => $tyresController, 'action' => 'saveEdit'],
                              'GET' => ['controller' => $tyresController, 'action' => 'edit'],'login' => true ],
                              
            'tahotype/list' =>   ['GET'  => ['controller' => $tahotypeController, 'action' => 'list'], 'login' => true],
            'tahotype/delete' => ['POST' => ['controller' => $tahotypeController, 'action' => 'delete'], 'login' => true],
            'tahotype/edit' =>   ['POST' => ['controller' => $tahotypeController, 'action' => 'saveEdit'],
                                   'GET' => ['controller' => $tahotypeController, 'action' => 'edit'],'login' => true ],

            '' => ['GET' => ['controller' => $certificatesController, 'action' => 'home']]
        ];

        return $routes;
    }
     public function getAuthentication(): \Main\Authentication
    {
        return $this->authentication;
    }
}
