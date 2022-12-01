<?php

namespace Sitedata;

use Main\Authentication;

class CertificatesRoutes implements \Main\Routes
{
    private $authorsTable;    
    private $usersTable;    
    private $certificatesTable;
    private $autoTable;
    private $authentication;
    private $vehiclesOwnersTable;
    private $tahoTable;
    private $tyresTable;
    private $tahotypeTable;
    

    public function __construct()
    {
        include __DIR__ . '/../../includes/DatabaseConnection.php';

        $this->certificatesTable = new \Main\DatabaseTable($pdo, 'certificates', 'id');
        $this->authorsTable = new \Main\DatabaseTable($pdo, 'author', 'id');        
        $this->tahotypeTable = new \Main\DatabaseTable($pdo, 'tahotypes', 'id');
        $this->usersTable = new \Main\DatabaseTable($pdo, 'author', 'id');
        $this->tyresTable = new \Main\DatabaseTable($pdo, 'tyressize', 'id');
        $this->autoTable = new \Main\DatabaseTable($pdo, 'ts', 'id');
        $this->tahoTable = new \Main\DatabaseTable($pdo, 'taholist', 'id');
        $this->vehiclesOwnersTable = new \Main\DatabaseTable($pdo, 'vehiclesowners', 'id');
        $this->authentication = new \Main\Authentication($this->authorsTable, 'email', 'password');
    }

    public function getRoutes(): array
    {
        $certificatesController = new \Sitedata\Controllers\Certificate($this->certificatesTable, 
        $this->authorsTable, $this->authentication, $this->autoTable);
        $authorController = new \Sitedata\Controllers\Register($this->authorsTable);
        $tahotypeController = new \Sitedata\Controllers\Tahotype($this->tahotypeTable);
        $usersController = new \Sitedata\Controllers\Author($this->usersTable, $this->authentication);       
        $autoController = new \Sitedata\Controllers\Autos($this->autoTable);
        $vehiclesOwnersController = new \Sitedata\Controllers\VehiclesOwners($this->vehiclesOwnersTable);
        $tahoController = new \Sitedata\Controllers\Taho($this->tahoTable, $this->tahotypeTable);
        $tyresController = new \Sitedata\Controllers\Tyressize($this->tyresTable);
        $loginController = new \Sitedata\Controllers\Login($this->authentication);

        $routes = [
            'author/register' => ['GET' => ['controller' => $authorController,'action' => 'registrationForm' ],
                                 'POST' => ['controller' => $authorController,'action' => 'registerUser']],
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
                
            'autos/list' =>   [ 'GET' => ['controller' => $autoController, 'action' => 'list'], 'login' => true],
            'auto/delete' => ['POST' => ['controller' => $autoController, 'action' => 'delete'], 'login' => true],
            'auto/edit' =>   ['POST' => ['controller' => $autoController, 'action' => 'saveEdit'],
                                   'GET' => ['controller' => $autoController, 'action' => 'edit'],'login' => true ],

            'vehiclesowners/list' =>   ['GET' =>  ['controller' => $vehiclesOwnersController, 'action' => 'list'], 'login' => true],
            'vehiclesowners/delete' => ['POST' =>  ['controller' => $vehiclesOwnersController, 'action' => 'delete'], 'login' => true],
            'vehiclesowners/edit' =>   ['POST' => ['controller' => $vehiclesOwnersController, 'action' => 'saveEdit'],
                                         'GET' => ['controller' => $vehiclesOwnersController, 'action' => 'edit'],'login' => true ],

            'taho/list' =>   ['GET' =>  ['controller' => $tahoController, 'action' => 'list'], 'login' => true],
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
