<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;


class Taho
{
    
    private $tahoTable;
    private $tahotypeTable;
    
    public function __construct(DatabaseTable $tahoTable, DatabaseTable $tahotypeTable)
    {
        $this->tahoTable = $tahoTable;
        $this->tahotypeTable = $tahotypeTable;
       
    }

    public function list()
    {
        $result = $this->tahoTable->findAll();

        $tahos = [];
        foreach ($result as $taho) {        
        
            $tahos[] = [
                'id' => $taho->id,
                'tahonumber' => $taho->tahonumber,
                'tahotypeId' => $taho->tahotypeId
                             
            ];
        }

        $title = 'tahografe';

        $totaltaho = $this->tahoTable->total();      

        return [
                'template' => 'taho.html.php', 'title' => $title,
                'variables' => ['totaltaho' => $totaltaho, 'tahos' => $tahos]
            ];
    }   

    public function delete()
    {
        $this->tahoTable->delete($_POST['id']);
        header('location: /taho/list');
    }

    public function saveEdit()
    {         
        $tahotypeObject = $this->tahotypetable->findById($_POST['id']);

         $taho = $_POST['taho'];
         

         $tahotypeObject->addTaho($taho);

         header('location: /joke/list');

    }

    public function edit()
    {
        if (isset($_GET['id'])) { $taho = $this->tahoTable->findById($_GET['id']);
        }
       $title = 'Edit taho';
        return [
            'template' => 'tahoEdit.html.php', 
            'title' => $title,
            'variables' => ['taho' => $taho ?? null,]
        ];
    }
}
