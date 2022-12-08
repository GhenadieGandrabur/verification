<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;
use \Main\Authentication;

class Certificate
{
    private $holderTable;
    private $certificatesTable;
    private $authentication;
    private $numarcamion;

    public function __construct(DatabaseTable $certificatesTable, DatabaseTable $holderTable, Authentication $authentication, DatabaseTable $numarcamion)
    {
        $this->certificatesTable = $certificatesTable;
        $this->holderTable = $holderTable;
        $this->authentication = $authentication;
        $this->numarcamion = $numarcamion;
    }

    public function camionlist(){
        $rezultat = $this->numarcamion->findAll();
        $camioane = [];
        foreach($rezultat as $camion){
            $camioane[] = [
                'numberplate'=> $camion['numberplate']
            ];
        }

    }

    public function list()
    {
        $certificates = $this->certificatesTable->findAll();

         

        $title = '-=Certificates=-';

        $totalCertificates = $this->certificatesTable->total();

        $holder = $this->authentication->getUser();

        return [
            'template' => 'certificates.html.php',
            'title' => $title,
            'variables' => [
            'totalCertificates' => $totalCertificates,
            'certificates' => $certificates,
            'userId' => $holder->id ?? null
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
                'userId' => $author->id ?? null
            ]
        ];
    }

    public function print()
    {
        $author = $this->authentication->getUser();

        $autos = $this->numarcamion->findAll();

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
