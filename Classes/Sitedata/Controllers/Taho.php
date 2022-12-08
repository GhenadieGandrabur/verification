<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;


class Taho
{
    
    private $taholistTable;
    private $tahotypeTable;
    
    public function __construct(DatabaseTable $taholistTable, DatabaseTable $tahotypeTable)
    {
        $this->taholistTable = $taholistTable;
        $this->tahotypeTable = $tahotypeTable;
       
    }

    public function list()
    {
        $tahos = $this->taholistTable->findAll();

       

        $title = 'tahografe';

        $totaltaho = $this->taholistTable->total();      

        return [
                'template' => 'taho.html.php', 'title' => $title,
                'variables' => ['totaltaho' => $totaltaho, 'tahos' => $tahos]
            ];
    }   

    public function delete()
    {
        $this->taholistTable->delete($_POST['id']);
        header('location: /taho/list');
    }

    public function saveEdit()
    {     
            
        $tahotypeObject = new \Sitedata\Entity\Tahotype($this->tahotypeTable);


         $taho = $_POST['taho'];
         

         $tahotypeObject->addTaho1($taho);

         header('location: /taho/list');

    }

    public function edit()
    {
        if (isset($_GET['id'])) { $taho = $this->taholistTable->findById($_GET['id']);
        }
       $title = 'Edit taho';
        return [
            'template' => 'tahoEdit.html.php', 
            'title' => $title,
            'variables' => ['taho' => $taho ?? null,]
        ];
    }
}
