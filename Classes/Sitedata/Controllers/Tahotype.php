<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;



class Tahotype
{  
    private $tahotypesTable;    

    public function __construct(DatabaseTable $tahotypesTable)
    {
        $this->tahotypesTable = $tahotypesTable;
        
    }

    public function list()
    {
        $result = $this->tahotypesTable->findAll();

        $tahotypes = [];
        foreach ($result as $tahotype) {
            $tahotypes[] = [
                'id' => $tahotype['id'],                
                'type' => $tahotype['type'],             
                'recordertype' => $tahotype['recordertype']             
            ];
        }

        $title = 'Taho types list';

        $totaltahotypes = $this->tahotypesTable->total();       

        return [
                'template' => 'tahotype.html.php',
                'title' => $title,
                'variables' => [
                    'totaltahotypes' => $totaltahotypes,
                    'tahotypes' => $tahotypes
                    
                ]
            ];
    }

    

    public function delete()
    {
        $this->tahotypesTable->delete($_POST['id']);

        header('location: /tahotype/list');
    }
    public function saveEdit()
    {
     
        $tahotype = $_POST['tahotype'];
        $this->tahotypesTable->save($tahotype);
        header('location: /tahotype/list');
    }

    public function edit()
    {
      
        if (isset($_GET['id'])) {$tahotype = $this->tahotypesTable->findById($_GET['id']);}

        $title = 'Edit tahotypes';

        return [
            'template' => 'edittahotype.html.php',
            'title' => $title,
            'variables' => [
                'tahotype' => $tahotype ?? null
               
            ]
        ];
    }

   
    
}
