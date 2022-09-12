<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;


class Tachographs
{
    //private $authorsTable;
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
           // $author = $this->authorsTable->findById($joke['authorId']);

            $certificates[] = [
                'id' => $tachograph['id'],
                'date' => $tachograph['date'],
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

                'totalCertificates' => $totalTachographs,
                'certificates' => $certificates
                    
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
