<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;



class VehiclesOwners
{
    
    private $vehiclesownersTable;
    

    public function __construct(DatabaseTable $vehiclesownersTable,)
    {
        $this->vehiclesownersTable = $vehiclesownersTable;
    
    }

    public function list()
    {
        $owners = $this->vehiclesownersTable->findAll();



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
    
        $owner = $_POST['owner'];
        $this->vehiclesownersTable->save($owner);
        header('location: /vehiclesowners/list');
    }

    public function edit()
    {
       

        if (isset($_GET['id'])) {$owner = $this->vehiclesownersTable->findById($_GET['id']);}

        $title = 'Edit vehicles owners';

        return [
            'template' => 'vehiclesownersEdit.html.php',
            'title' => $title,
            'variables' => [
                'owner' =>  $owner  ?? null
            
            ]
        ];
    }
}
