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
        foreach ($result as $Vehicle) {
           // $employee = $this->employeesTable->findById($joke['employeeId']);

            $vehicles[] = [
                'id' => $Vehicle['id'],
                'date' => $Vehicle['date'],
                'number' => $Vehicle['number'],
                'owner' => $Vehicle['owner']
            ];
        }

        $title = 'Vehicles';

        $totalVehicles = $this->VehiclesTable->total();       

        return [
                'template' => 'vehicles.html.php',
                'title' => $title,
                'variables' => [
                'totalVehicles' => $totalVehicles,
                'vehicles' => $vehicles                    
                ]
            ];
    }

    public function home()
    {
        $title = 'Internet Joke Database';

        return ['template' => 'home.html.php', 'title' => $title];
    }

    public function delete()
    {

        $employee = $this->authentication->getUser();

        $joke = $this->jokesTable->findById($_POST['id']);

        if ($joke['employeeId'] != $employee['id']) {
            return;
        }

        $this->jokesTable->delete($_POST['id']);

        header('location: /joke/list');
    }
    public function saveEdit()
    {
        $employee = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $joke = $this->jokesTable->findById($_GET['id']);

            if ($joke['employeeId'] != $employee['id']) {
                return;
            }
        }

        $joke = $_POST['joke'];
        $joke['jokedate'] = new \DateTime();
        $joke['employeeId'] = $employee['id'];

        $this->jokesTable->save($joke);

        header('location: /joke/list');
    }

    public function edit()
    {
        $employee = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $joke = $this->jokesTable->findById($_GET['id']);
        }

        $title = 'Edit joke';

        return [
            'template' => 'certificatesEdit.html.php',
            'title' => $title,
            'variables' => [
                'joke' => $joke ?? null,
                'userId' => $employee['id'] ?? null
            ]
        ];
    }
    
}
