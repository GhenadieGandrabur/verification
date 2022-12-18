<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;
use \Main\Authentication;

class Certificate
{
    private $holderTable;
    private $certificatesTable;
    private $authentication;
    private $autoTable;
  

    public function __construct(DatabaseTable $certificatesTable, DatabaseTable $holderTable, Authentication $authentication, DatabaseTable $autoTable)
    {
        $this->certificatesTable = $certificatesTable;
        $this->holderTable = $holderTable;
        $this->authentication = $authentication;
        $this->autoTable = $autoTable;
    }

   
    public function list()
    {
        $certificates = $this->certificatesTable->findAll();
        $autos = $this->autoTable->findAll();

         

        $title = '-=Certificates=-';

        $totalCertificates = $this->certificatesTable->total();

        $holder = $this->authentication->getUser();

        return [
            'template' => 'certificates.html.php',
            'title' => $title,
            'variables' => [
            'totalCertificates' => $totalCertificates,
            'certificates' => $certificates,
            'userId' => $holder->id ?? null,
            'autos' =>$autos
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

       /* $author = $this->authentication->getUser();

        $certificate = $this->certificatesTable->findById($_POST['id']);

        if ($certificate['authorId'] != $author['id']) {
            return;
        }*/

        $this->certificatesTable->delete($_POST['id']);

        header('location: /certificates/list');
    }

    public function saveEdit()
    {
        $author = $this->authentication->getUser();

       if (isset($_GET['id'])) {
           $certificate = $this->certificatesTable->findById($_GET['id']);
        }

        $certificate = $_POST['certificate'];
        $certificate['date'] = new \DateTime();
        $certificate['authorId'] = $author['id'];

        $this->certificatesTable->save($certificate);

        header('location: /certificates/list');
    }

    public function edit()
    {
        $author = $this->authentication->getUser();
      

       if (isset($_GET['id'])) {
            $certificate = $this->certificatesTable->findById($_GET['id']);
        }

        $title = 'Edit certificates';

        return [
            'template' => 'certificatesEdit.html.php',
            'title' => $title,
            'variables' => [
                'certificate' => $certificate ?? null,
                'userId' => $author->id ?? null,
                'vehicle' => $this->autoTable->find('ve')

            ]
        ];
    }

    public function print()
    {
        $author = $this->authentication->getUser();

        $autos = $this->autoTable->findAll();

        if (isset($_GET['id'])) {
            $certificate = $this->certificatesTable->findById($_GET['id']);
        }

        if (!$author || !$certificate){
            throw new \Error("Page not found");
        }


        $title = 'Print certificates';

        return [
            'template' => 'certificatesPrint.html.php',
            'layout' => 'print',
            'title' => $title,
            'variables' => [
                'certificate' => $certificate ?? null,
                'userId' => $author['id'] ?? null,
                'autos' => $autos ?? null
            ]
        ];
    }
}
