<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;


class Certificate
{
    //private $authorsTable;
    private $CertificateTable;
    //private $authentication;

    public function __construct(DatabaseTable $CertificateTable)
    {
        $this->CertificateTable = $CertificateTable;
       
    }

    public function list()
    {
        $result = $this->CertificateTable->findAll();

        $certificates = [];
        foreach ($result as $certificate) {
           // $author = $this->authorsTable->findById($joke['authorId']);

            $certificates[] = [
                'id' => $certificate['id'],
                'date' => $certificate['date'],
                'numberplate' => $certificate['numberplate'],
                'owner' => $certificate['owner'],
                'brand' => $certificate['brand'],
                'weight' => $certificate['weight']
            ];
        }

        $title = 'Cerificate';

        $totalCertificates = $this->CertificateTable->total();

       

        return [
                'template' => 'jokes.html.php',
                'title' => $title,
                'variables' => [
                    'totalJokes' => $totalJokes,
                    'jokes' => $jokes,
                    'userId' => $author['id'] ?? null
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
