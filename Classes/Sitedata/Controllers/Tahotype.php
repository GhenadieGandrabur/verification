<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;

class Tahotype
{    
    private $tahotypeTable;    

    public function __construct(DatabaseTable $tahotypeTable)
    {
        $this->tahotypeTable = $tahotypeTable;       
    }

    public function list()
    {
        $result = $this->tahotypeTable->findAll();

        $tahotypes = [];
        foreach ($result as $tahotype) {
            $tahotypes[] = [
                'id' => $tahotype['id'],
                'type' => $tahotype['type'],
                'recordertype' => $tahotype['recordertype']                
            ];
        }


        $title = 'Tahos type list';

        $totalTahotypes = $this->tahotypeTable->total();
        return [
                'template' => 'tahotype.html.php',
                'title' => $title,
                'variables' => [
                    'totalTahotypes' => $totalTahotypes,
                    'tahotypes' => $tahotypes                    
                ]
            ];
    }    

    public function delete(){
    $this->tahotypeTable->delete($_POST['id']);
    header('location: /tahotype/list');
}
    

    public function saveEdit()    
    {    
        if (isset($_GET['id'])) {
            $tahotype = $this->tahotypeTable->findById($_GET['id']);           
        }
        $tahotype = $_POST['tahotype'];       

        $this->tahotypeTable->save($tahotype);

        header('location: /tahotype/list');
    }

    public function edit()
    {
       

        if (isset($_GET['id'])) {
            $tahotype = $this->tahotypeTable->findById($_GET['id']);
        }

        $title = 'Edit tahotype';

        return [
            'template' => 'edittahotype.html.php',
            'title' => $title,
            'variables' => [
                'tahotype' => $tahotype ?? null
             
            ]
        ];
    }

   
    
}
