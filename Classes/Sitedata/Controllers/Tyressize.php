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
        $result = $this->tyreTable->findAll();

        $tyres = [];
        foreach ($result as $tyre) {
            $tyres[] = [
                'id' => $tyre['id'],
                'size' => $tyre['size'],
                              
            ];
        }

        $title = 'Tyres size';

        $totalTyres = $this->tyreTable->total();

        return [
                'template' => 'tyressize.html.php',
                'title' => $title,
                'variables' => [
                'totaltyres' => $totalTyres,
                'tyres' => $tyres                    
                ]
            ];
    }

    /*public function home()
    {
        $title = 'Internet Joke Database';

        return ['template' => 'home.html.php', 'title' => $title];
    }*/

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
            $tyresdata = $this->tyreTable->findById($_GET['id']);
            $title = 'Edit joke';

        return [
            'template' => 'edittyre.html.php',
            'title' => $title,
            'variables' => [
                'tayres' => $tyres ?? null,
                'tyreId' => $tyre['id'] ?? null
            ]
        ];
    }
    
}
