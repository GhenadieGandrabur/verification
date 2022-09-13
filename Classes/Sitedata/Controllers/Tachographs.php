<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;


class Tachographs
{
    //private $employeesTable;
    private $TachographsTable;
    //private $authentication;

    public function __construct(DatabaseTable $TachographsTable)
    {
        $this->TachographsTable = $TachographsTable;
       
    }

    public function list()
    {
        $result = $this->TachographsTable->findAll();

        $tachographs = [];
        foreach ($result as $tachograph) {
           // $employee = $this->employeesTable->findById($joke['employeeId']);

            $tachographs[] = [
                'id' => $tachograph['id'],
                'modele' => $tachograph['modele'],
                'type' => $tachograph['type'],
                'number' => $tachograph['number']
                
            ];
        }

        $title = 'tahographs';

        $totalTachographs = $this->TachographsTable->total();

       

        return [
                'template' => 'tachographs.html.php',
                'title' => $title,
                'variables' => [

                'totalTachographs' => $totalTachographs,
                'tachographs' => $tachographs
                    
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
            'template' => 'editjoke.html.php',
            'title' => $title,
            'variables' => [
                'joke' => $joke ?? null,
                'userId' => $employee['id'] ?? null
            ]
        ];
    }

   
    
}
