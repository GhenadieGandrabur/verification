<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;



class Autos
{
    
    private $autoTable;
    
    public function __construct(DatabaseTable $autoTable)
    {
        $this->autoTable = $autoTable;
       
    }

    public function list()
    {
        $result = $this->autoTable->findAll();

        $autos = [];
        foreach ($result as $auto) {        

            $autos[] = [
                'id' => $auto['id'],
                'numberplate' => $auto['numberplate'],
                'owner' => $auto['owner']                             
            ];
        }

        $title = 'Auto';

        $totalautos = $this->autoTable->total();      

        return [
                'template' => 'autos.html.php', 'title' => $title,
                'variables' => ['totalautos' => $totalautos, 'autos' => $autos]
            ];
    }
    public function delete()
    {
        $this->autoTable->delete($_POST['id']);
        header('location: /autos/list');
    }

  public function saveEdit()
    {      
        $auto = $_POST['auto'];       
        $this->autoTable->save($auto);
        header('location: /autos/list');
    }

    public function edit()
    {
      if (isset($_GET['id'])){$auto = $this->autoTable->findById($_GET['id']);
         $auto['hed'] = 'Edit auto';    
    }else{
           $auto['hed'] = 'Add an auto'; 
    }
    $title = "Auto edit";
        return [
            'template' => 'autoedit.html.php', 
            'title' => $title,
            'variables' => ['auto' => $auto ??  null]
        ];
    }
}
