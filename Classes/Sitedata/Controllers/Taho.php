<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
use \Main\Authentication;


class Taho
{
    //private $authorsTable;
    private $tahoTable;
    private $authentication;

    public function __construct(DatabaseTable $tahoTable)
    {
        $this->tahoTable = $tahoTable;
       
    }

    public function list()
    {
        $result = $this->tahoTable->findAll();

        $tahos = [];
        foreach ($result as $taho) {
           // $author = $this->authorsTable->findById($joke['authorId']);

            $tahos[] = [
                'id' => $taho['id'],
                'modele' => $taho['modele'],
                'type' => $taho['type'],
                'number' => $taho['number']
                
            ];
        }

        $title = 'tahographs';

        $totaltaho = $this->tahoTable->total();

       

        return [
                'template' => 'taho.html.php',
                'title' => $title,
                'variables' => [

                'totaltaho' => $totaltaho,
                'tahos' => $tahos
                    
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
    

        if (isset($_GET['id'])) {
            $taho = $this->tahoTable->findById($_GET['id']);

         
        }

        $taho = $_POST['taho'];
      //  $taho['date'] = new \DateTime();
        $taho['modele'] = $_POST['modele'];
        //$joke['authorId'] = $author['id'];

        $this->tahoTable->save($taho);

        header('location: /taho/list');
    }

    public function edit()
    {
       /* $author = $this->authentication->getUser();

        if (isset($_GET['id'])) {*/
            $taho = $this->tahoTable->findById($_GET['id']);
        

        $title = 'Edit taho';

        return [
            'template' => 'edittaho.html.php',
            'title' => $title,
            'variables' => [
                'taho' => $taho ?? null,
                //'userId' => $author['id'] ?? null
            ]
        ];
    }

   
    
}
