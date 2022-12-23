<?php

namespace Sitedata\Controllers;
use \Main\DatabaseTable;
//use \Main\Authentication;

class Brands
{

    private $brandsTable;
    

    public function __construct(DatabaseTable $brandsTable)
    {
        $this->brandsTable = $brandsTable;        
       
    }

    public function list()
    {
                 
        $brands = $this->brandsTable->findAll();    

        $title = 'Brands ';

        $totalbrands = $this->brandsTable->total();

        return [
                'template' => 'brands.html.php',
                'title' => $title,
                'variables' => ['totalbrands' => $totalbrands, 'brands' => $brands ]];
    }

    public function delete()
    {        
        $this->brandsTable->delete($_POST['id']);
        header('location: /brands/list');
    }
    public function saveEdit()
    {
        
        $brand = $_POST['brand'];
        $this->brandsTable->save($brand);
        header('location: /brands/list');
    }

    public function edit()
    {             
             if (isset($_GET['id']))
             {
                $brand = $this->brandsTable->findById($_GET['id']);
            }

            $title = 'Edit brands';

        return [
            'template' => 'brandEdit.html.php',
            'title' => $title, 
            'variables' => ['brand' => $brand ?? null ]
        ];
    }
    
}
