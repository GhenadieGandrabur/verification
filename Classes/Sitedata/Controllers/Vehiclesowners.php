<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;
use \Main\Authentication;


class Vehiclesowners
{
    //private $authorsTable;
    private $vehiclesownersTable;
    private $authentication;

    public function __construct(DatabaseTable $vehiclesownersTable,  Authentication $authentication)
    {
        $this->vehiclesownersTable = $vehiclesownersTable;
    
        $this->authentication = $authentication;
    }

    public function list()
    {
        $result = $this->vehiclesownersTable->findAll();

        $holders = [];
        foreach ($result as $holder) {
           // $author = $this->authorsTable->findById($joke['authorId']);

            $holders[] = [
                'id' => $holder['id'],
                'name' => $holder['name'],
                'codfiscal' => $holder['codfiscal'],
                'note' => $holder['note']
            ];
        }


        $title = 'Vehicles owners';

        $totalVehiclesowners = $this->vehiclesownersTable->total();

        

        return [
            'template' => 'vehiclesowners.html.php',
            'title' => $title,
            'variables' => [
                'totalVehiclesowners' => $totalVehiclesowners,
                'holders' => $holders
                
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

        $joke = $this->vehiclesownersTable->findById($_POST['id']);

        if ($joke['authorId'] != $author['id']) {
            return;
        }

        $this->vehiclesownersTable->delete($_POST['id']);

        header('location: /joke/list');
    }
    public function saveEdit()
    {
        /*if (isset($_GET['id'])) 
        {
            $holder = $this->vehiclesownersTable->findById($_GET['id']);    
        }*/
        

        $holder = $_POST['holder'];
        $this->vehiclesownersTable->save($holder);

        header('location: /vehiclesowners/list');
    }

    public function edit()
    {
        $author = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $joke = $this->vehiclesownersTable->findById($_GET['id']);
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
