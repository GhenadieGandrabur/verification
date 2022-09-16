<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;
use \Main\Authentication;

class Certificate
{
    private $employeeTable;
    private $certificatesTable;
    private $authentication;

    public function __construct(DatabaseTable $certificatesTable, DatabaseTable $employeeTable, Authentication $authentication)
    {
        $this->certificatesTable = $certificatesTable;
        $this->employeeTable = $employeeTable;
        $this->authentication = $authentication;
    }

    public function list()
    {
        $result = $this->certificatesTable->findAll();

        $certificates = [];
        foreach ($result as $certificate) {
            $employee = $this->employeeTable->findById($certificate['employeeId']);

            $certificates[] = [
                'id' => $certificate['id'],
                'date' => $certificate['date'],
                'numberplate' => $certificate['numberplate'],
                'owner' => $certificate['owner'],
                'employeeId' => $certificate['employeeId']
               
            ];
        }

        $title = '-=Certificates=-';

        $totalCertificates = $this->certificatesTable->total();

        $employee = $this->authentication->getUser();

        return [
            'template' => 'certificates.html.php',
            'title' => $title,
            'variables' => ['totalCertificates' => $totalCertificates,
             'certificates' => $certificates, 'userId' => $employee['id'] ?? null
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

        $employee = $this->authentication->getUser();

        $certificate = $this->certificatesTable->findById($_POST['id']);

        if ($certificate['$employeeId'] != $employee['id']) {
            return;
        }


        $this->certificatesTable->delete($_POST['id']);

        header('location: /joke/list');
    }

    public function saveEdit()
    {
        $author = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $joke = $this->certificatesTable->findById($_GET['id']);

            if ($joke['authorId'] != $author['id']) {
                return;
            }
        }

        $joke = $_POST['joke'];
        $joke['date'] = new \DateTime();
        $joke['employeeId'] = $author['id'];

        $this->certificatesTable->save($joke);

        header('location: /certificates/list');
    }

    public function edit()
    {
        $employee = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $certificate = $this->certificatesTable->findById($_GET['id']);
        }

        $title = 'Edit joke';

        return [
            'template' => 'certificatesEdit.html.php',
            'title' => $title,
            'variables' => [
                'joke' => $certificate ?? null,
                'userId' => $employee['id'] ?? null
            ]
        ];
    }
}
