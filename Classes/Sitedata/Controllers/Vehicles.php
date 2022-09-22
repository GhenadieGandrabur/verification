<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
use \Main\Authentication;


class Vehicles
{
    
    private $VehiclesTable;
    

    public function __construct(DatabaseTable $VehiclesTable)
    {
        $this->VehiclesTable = $VehiclesTable;       
    }

    public function list()
    {
        $result = $this->VehiclesTable->findAll();

        $vehicles = [];
        foreach ($result as $vehicle) {
            $vehicles[] = [
                'id' => $vehicle['id'],
                'number' => $vehicle['number'],
                'vin' => $vehicle['vin'],
                'owner' => $vehicle['owner']
            ];
        }

        $title = 'Vehicles list';

        $totalVehicles = $this->VehiclesTable->total();       

        return [
                'template' => 'vehicles.html.php',
                'title' => $title,
                'variables' => ['totalVehicles' => $totalVehicles, 'vehicles' => $vehicles                    
                ]
            ];
    }

   

    public function delete()
    {     

        $this->VehiclesTable->delete($_POST['id']);

        header('location: /vehicles/list');
    }
    public function saveEdit(){
        $vehicle = $_POST['vehicle'];
        $this->VehiclesTable->save($vehicle);
        header('location: /vehicles/list');
    }

    public function edit()
    {     

        if (isset($_GET['id'])) {$vehicle = $this->VehiclesTable->findById($_GET['id']);}

        $title = 'Edit vehicles';

        return ['template' => 'vehicles.html.php', 'title' => $title,
        'variables' => [ 'vehicle' => $vehicle ?? null ]
        ];
    }
    
}
