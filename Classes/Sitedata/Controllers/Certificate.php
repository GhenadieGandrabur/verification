<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;
use \Main\Authentication;

class Certificate
{
    private $holderTable;
    private $certificatesTable;
    private $authentication;

    public function __construct(DatabaseTable $certificatesTable, DatabaseTable $holderTable, Authentication $authentication)
    {
        $this->certificatesTable = $certificatesTable;
        $this->holderTable = $holderTable;
        $this->authentication = $authentication;
    }

    public function list()
    {
        $result = $this->certificatesTable->findAll();

        $certificates = [];
        foreach ($result as $certificate) {
            $holder = $this->holderTable->findById($certificate['authorId']);

            $certificates[] = [
                'id' => $certificate['id'],
                'date' => $certificate['date'],
                'vehicle' => $certificate['vehicle'],
                'taho' => $certificate['taho'],
                'authorId' => $holder['name']              
               
            ];
        }

        $title = '-=Certificates=-';

        $totalCertificates = $this->certificatesTable->total();

        $holder = $this->authentication->getUser();

        return [
            'template' => 'certificates.html.php',
            'title' => $title,
            'variables' => [
            'totalCertificates' => $totalCertificates, 
            'certificates' => $certificates,
            'userId' => $holder['id'] ?? null
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

        $holder = $this->authentication->getUser();

        $certificate = $this->certificatesTable->findById($_POST['id']);

        if ($certificate['$holderId'] != $holder['id']) {
            return;
        }


        $this->certificatesTable->delete($_POST['id']);

        header('location: /joke/list');
    }

    public function saveEdit()
    {
        $holder = $this->authentication->getUser();


        if (isset($_GET['id'])) {
            $certificate = $this->certificatesTable->findById($_GET['id']);

            if ($certificate['$holderId'] != $holder['id']) {
                return;
            }
        }

        $certificate = $_POST['certificate'];
        $certificate['date'] = new \DateTime();
        $certificate['$holderId'] = $holder['id'];

        $this->certificatesTable->save($certificate);

        header('location: /certuficates/list');
    }

    public function edit()
    {
        $holder = $this->authentication->getUser();

        if (isset($_GET['id'])) {
            $certificate = $this->certificatesTable->findById($_GET['id']);
        }

        $title = 'Edit joke';

        return [
            'template' => 'certificatesEdit.html.php',
            'title' => $title,
            'variables' => [
                'certificate' => $certificate ?? null,
                'userId' => $holder['id'] ?? null
            ]
        ];
    }
}
