<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;


class Vehicles
{
    
    private $vehiclesTable;
    

    public function __construct(DatabaseTable $vehiclesTable)
    {
        $this->vehiclesTable = $vehiclesTable;       
    }

    public function list()
    {
        $result = $this->vehiclesTable->findAll();

        $vehicles = [];
        foreach ($result as $vehicle) {
            $vehicles[] = [
                'id'     => $vehicle['id'],
                'date'   => $vehicle['date'],
                'numberPlate' => $vehicle['numberPlate'],
                'vin'    => $vehicle['vin'],
                'owner'  => $vehicle['owner'],
                'tyreSize'  => $vehicle['tyreSize']
            ];
        }
        $title = 'Vehicles list';
        $totalVehicles = $this->vehiclesTable->total();   
        return [
                'template' => 'vehicles.html.php',
                'title' => $title,
                'variables' => ['totalVehicles' => $totalVehicles, 'vehicles' => $vehicles]];
    }

   

    public function delete()
    {     

        $this->vehiclesTable->delete($_POST['id']);

        header('location: /tyressize/list');
    }

    
    
    public function saveEdit(){
        $vehicle = $_POST['vehicle'];
        $vehicle['date'] = new \DateTime();
        $this->vehiclesTable->save($vehicle);
        header('location: /vehicles/list');
    }

    public function edit()
    {     
        if (isset($_GET['id'])) {$vehicle = $this->vehiclesTable->findById($_GET['id']);}

        $title = 'Edit vehicles';

        return ['template' => 'vehiclesEdit.html.php', 'title' => $title,
        'variables' => [ 'vehicle' => $vehicle ?? null ]
        ];
    }
    
}
