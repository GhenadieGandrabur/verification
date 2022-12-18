<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;



class Vehicles
{
    
    private $vehicleTable;
    
    public function __construct(DatabaseTable $vehicleTable)
    {
        $this->vehicleTable = $vehicleTable;
       
    }

    public function list()
    {
         $vehicles  = $this->vehicleTable->findAll();       

        $title = 'Vehicles';

        $totalvehicles = $this->vehicleTable->total();      

        return [
                'template' => 'vehicles.html.php', 'title' => $title,
                'variables' => ['totalvehicles' => $totalvehicles, 'vehicles' => $vehicles]
            ];
    }
    public function delete()
    {
        $this->vehicleTable->delete($_POST['id']);
        header('location: /vehicles/list');
    }

  public function saveEdit()
    {      
        $vehicle = $_POST['vehicle'];       
        $this->vehicleTable->save($vehicle);
        header('location: /vehicles/list');
    }

    public function edit()
    {
      if (isset($_GET['id'])){$vehicle = $this->vehicleTable->findById($_GET['id']);
    }
    
    $title = "vehicle edit";
        return [
            'template' => 'vehicleedit.html.php', 
            'title' => $title,
            'variables' => ['vehicle' => $vehicle ??  [] ]
        ];
    }
    public function detailes(){
        $number = htmlspecialchars($_GET['number']);
        $vehicle = $this->vehicleTable->find('numberplate', $number);
        print json_encode($vehicle);
        die;
    }
}
