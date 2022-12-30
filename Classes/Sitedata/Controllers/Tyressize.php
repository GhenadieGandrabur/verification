<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;

class Tyressize
{

    private $tyresizeTable;
    

    public function __construct(DatabaseTable $tyresizeTable)
    {
        $this->tyresizeTable = $tyresizeTable;        
       
    }

    public function list()
    {
                 
        $tyres = $this->tyresizeTable->findAll();    

        $title = 'Tyres size';

        $totalTyres = $this->tyresizeTable->total();

        return [
                'template' => 'tyressize.html.php',
                'title' => $title,
                'variables' => [
                    'totalTyres' => $totalTyres, 
                    'tyres' => $tyres 
                    ]];
    }

    public function delete()
    {        
        $this->tyresizeTable->delete($_POST['id']);
        header('location: /tyres/list');
    }
    public function saveEdit()
    {        
        $tyre = $_POST['tyre'];
        $this->tyresizeTable->save($tyre);
        header('location: /tyres/list');
    }

    public function edit()
    {             
             if (isset($_GET['id']))
             {
                $tyre = $this->tyresizeTable->findById($_GET['id']);
            }

            $title = 'Edit tyres size';

        return [
            'template' => 'tyressizeEdit.html.php',
            'title' => $title, 
            'variables' => ['tyre' => $tyre ?? null ]
        ];
    }

    public function likeList(){
        $number = htmlspecialchars($_GET['size']);
        $tyresizeTable = $this->tyresizeTable->findLike('size', $number);
        print json_encode($tyresizeTable?? []);
        die;
    }
    
}
