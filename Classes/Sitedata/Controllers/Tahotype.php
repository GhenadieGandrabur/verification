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
        $tahotypes = $this->tahotypesTable->findAll();

        $title = 'Types of tahos';

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
      
        if (isset($_GET['id']))
        {
            $tahotype = $this->tahotypesTable->findById($_GET['id']);}

        $title = 'Edit tahotypes';

        return [
            'template' => 'tahotypeEdit.html.php',
            'title' => $title,
            'variables' => ['tahotype' => $tahotype ?? null ]
        ];
    }
    public function detailes(){
        $number = htmlspecialchars($_GET['tahotype']);
        $vehicle = $this->tahotypesTable->find('typetaho', $number);
        print json_encode($vehicle[0]?? []);
        die;
    }
   
    
}
