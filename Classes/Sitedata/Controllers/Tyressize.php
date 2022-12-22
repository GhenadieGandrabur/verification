<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;

class Tyressize
{

    private $tyreTable;
    

    public function __construct(DatabaseTable $tyreTable)
    {
        $this->tyreTable = $tyreTable;        
       
    }

    public function list()
    {
                 
        $tyres = $this->tyreTable->findAll();

    

        $title = 'Tyres size';

        $totalTyres = $this->tyreTable->total();

        return [
                'template' => 'tyressize.html.php',
                'title' => $title,
                'variables' => ['totalTyres' => $totalTyres, 'tyres' => $tyres ]];
    }

    public function delete()
    {        
        $this->tyreTable->delete($_POST['id']);
        header('location: /tyres/list');
    }
    public function saveEdit()
    {
        
        $tyre = $_POST['tyre'];
        $this->tyreTable->save($tyre);
        header('location: /tyres/list');
    }

    public function edit()
    {             
             if (isset($_GET['id']))
             {
                $tyre = $this->tyreTable->findById($_GET['id']);
            }

            $title = 'Edit tyres size';

        return [
            'template' => 'tyressizeEdit.html.php',
            'title' => $title, 
            'variables' => ['tyre' => $tyre ?? null ]
        ];
    }
    
}
