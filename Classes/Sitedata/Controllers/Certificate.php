<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;
use \Main\Authentication;

class Certificate
{
    private $empoyeeTable;
    private $certificatesTable;

    public function __construct(DatabaseTable $certificatesTable, DatabaseTable $empoyeeTable, Authentication $authentication)
    {
        $this->certificatesTable = $certificatesTable;
        $this->empoyeeTable = $empoyeeTable;
        $this->authentication = $authentication;
    }

    public function list()
    {
        $result = $this->certificatesTable->findAll();

        $certificates = [];
        foreach ($result as $certificate) {
            $empoyee = $this->empoyeeTable->findById($certificate['$empoyeeId']);

            $certificates[] = [
                'id' => $certificate['id'],
                'numberplate' => $certificate['numberplate'],
                'date' => $certificate['date'],
                'name' => $empoyee['name'],
                'email' => $empoyee['email'],
                '$empoyeeId' => $empoyee['id']
            ];
        }


        $title = 'Joke list';

        $totalCertificates = $this->certificatesTable->total();

        $empoyee = $this->authentication->getUser();

        return [
            'template' => 'certificates.html.php',
            'title' => $title,
            'variables' => [
                'totalJokes' => $totalCertificates,
                'certificates' => $certificates,
                'userId' => $empoyee['id'] ?? null
            ]
        ];
    }

    public function home()
    {
        $title = 'Certificates';

        return ['template' => 'home.html.php', 'title' => $title];
    }

    public function delete()
    {

        $empoyee = $this->authentication->getUser();

        $certificate = $this->certificatesTable->findById($_POST['id']);

        if ($certificate['$empoyeeId'] != $empoyee['id']) {
            return;
        }


        $this->certificatesTable->delete($_POST['id']);

        header('location: /joke/list');
    }

    public function saveEdit()
    {
        $empoyee = $this->authentication->getUser();


        if (isset($_GET['id'])) {
            $certificate = $this->certificatesTable->findById($_GET['id']);

            if ($certificate['$empoyeeId'] != $empoyee['id']) {
                return;
            }
        }

        $certificate = $_POST['joke'];
        $certificate['jokedate'] = new \DateTime();
        $certificate['$empoyeeId'] = $empoyee['id'];

        $this->certificatesTable->save($certificate);

        header('location: /joke/list');
    }

    public function edit()
    {
        $empoyee = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $certificate = $this->certificatesTable->findById($_GET['id']);
        }

        $title = 'Edit joke';

        return [
            'template' => 'editjoke.html.php',
            'title' => $title,
            'variables' => [
                'joke' => $certificate ?? null,
                'userId' => $empoyee['id'] ?? null
            ]
        ];
    }
}
