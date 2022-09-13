<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;


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
           // $author = $this->authorsTable->findById($joke['authorId']);

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

        $author = $this->authentication->getUser();

        $joke = $this->jokesTable->findById($_POST['id']);

        if ($joke['authorId'] != $author['id']) {
            return;
        }

        $this->jokesTable->delete($_POST['id']);

        header('location: /joke/list');
    }
    public function saveEdit()
    {
        $author = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $joke = $this->jokesTable->findById($_GET['id']);

            if ($joke['authorId'] != $author['id']) {
                return;
            }
        }

        $joke = $_POST['joke'];
        $joke['jokedate'] = new \DateTime();
        $joke['authorId'] = $author['id'];

        $this->jokesTable->save($joke);

        header('location: /joke/list');
    }

    public function edit()
    {
        $author = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $joke = $this->jokesTable->findById($_GET['id']);
        }

        $title = 'Edit joke';

        return [
            'template' => 'editjoke.html.php',
            'title' => $title,
            'variables' => [
                'joke' => $joke ?? null,
                'userId' => $author['id'] ?? null
            ]
        ];
    }
    
}
