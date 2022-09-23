<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
use \Main\Authentication;


class Taho
{
    
    private $tahoTable;


    public function __construct(DatabaseTable $tahoTable)
    {
        $this->tahoTable = $tahoTable;
       
    }

    public function list()
    {
        $result = $this->tahoTable->findAll();

        $tahos = [];
        foreach ($result as $taho) {        

            $tahos[] = [
                'id' => $taho['id'],
                'modele' => $taho['modele'],
                'type' => $taho['type'],
                'number' => $taho['number']                
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
        $taho = $_POST['taho'];       
        $this->tahoTable->save($taho);
        header('location: /taho/list');
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $taho = $this->tahoTable->findById($_GET['id']);
        }
       $title = 'Edit taho';
        return [
            'template' => 'edittaho.html.php', 'title' => $title,
            'variables' => ['taho' => $taho ?? null,           
            ]
        ];
    }
}
