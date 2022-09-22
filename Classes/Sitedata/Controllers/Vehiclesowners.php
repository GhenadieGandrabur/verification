<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;
//use \Main\Authentication;


class VehiclesOwners
{
    
    private $vehiclesownersTable;
    

    public function __construct(DatabaseTable $vehiclesownersTable,)
    {
        $this->vehiclesownersTable = $vehiclesownersTable;
    
    }

    public function list()
    {
        $result = $this->vehiclesownersTable->findAll();

        $owners = [];
        foreach ($result as $owner) {
           // $author = $this->authorsTable->findById($joke['authorId']);

            $owners[] = [
                'id' => $owner['id'],
                'name' => $owner['name'],
                'codfiscal' => $owner['codfiscal'],
                'note' => $owner['note']
            ];
        }


        $title = 'Vehicles owners';

        $totalVehiclesOwners = $this->vehiclesownersTable->total();
        return [
            'template' => 'vehiclesowners.html.php',
            'title' => $title,
            'variables' => [
                'totalVehiclesOwners' => $totalVehiclesOwners,
                'owners' => $owners
                
            ]
        ];
    }


    public function delete()
    {       
        $this->vehiclesownersTable->delete($_POST['id']);
        
        header('location: /vehiclesowners/list');
    }
    public function saveEdit()
    {
        //if (isset($_GET['id'])) {$owner = $this->vehiclesownersTable->findById($_GET['id']);}
        $owner = $_POST['owner'];
        $this->vehiclesownersTable->save($owner);
        header('location: /vehiclesowners/list');
    }

    public function edit()
    {
       // $author = $this->authentication->getUser();

        if (isset($_GET['id'])) {$owner = $this->vehiclesownersTable->findById($_GET['id']);}

        $title = 'Edit vehicles owners';

        return [
            'template' => 'vehiclesownersEdit.html.php',
            'title' => $title,
            'variables' => [
                'owner' =>  $owner  ?? null
               // 'userId' => $author['id'] ?? null
            ]
        ];
    }
}
