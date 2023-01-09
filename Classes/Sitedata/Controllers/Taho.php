<?php

namespace Sitedata\Controllers;

use \Main\DatabaseTable;

//use \Main\Authentication;

class Taho
{

    private $taholistTable;
    private $tahotypeTable;

    public function __construct(DatabaseTable $taholistTable, DatabaseTable $tahotypeTable)
    {
        $this->taholistTable = $taholistTable;
        $this->tahotypeTable = $tahotypeTable;

    }

    function list() {
        $tahos = $this->taholistTable->findAll();        
        
        $title = 'tahografe';
        
        $totaltaho = $this->taholistTable->total();
        $tahotitles = [];
        $tahotypes = $this->tahotypeTable->findAll() ?? [];
        
        foreach ($tahotypes as $tahotype) {
            $tahotitles[$tahotype->id] = $tahotype->typetaho;            
        }

        return [
            'template' => 'taho.html.php', 
            'title' => $title,
            'variables' => [
                'totaltaho' => $totaltaho, 
                'tahos' => $tahos,
                'tahotitles' => $tahotitles
            ]
        ];
    }

    public function delete()
    {
        $this->taholistTable->delete($_POST['id']);
        header('location: /taho/list');
    }

    public function saveEdit()
    {

        $taho = $_POST['taho'];

        $this->taholistTable->save($taho);

        header('location: /taho/list');

    }

    public function edit()
    {
        if (isset($_GET['id'])) {$taho = $this->taholistTable->findById($_GET['id']);
        }
        
        $tahotypes = $this->tahotypeTable->findAll() ?? [];
        
        $title = 'Edit taho';
        return [
            'template' => 'tahoEdit.html.php',
            'title' => $title,
            'variables' => [
                'taho' => $taho ?? null,
                'tahotypes' => $tahotypes,
                
            ],
        ];
    }
      public function detailes(){
        $id = intval($_GET['id']?? 0);       
        $taho = $this->taholistTable->findById($id);
        if($taho != null&&!empty($taho->tahotypeId)){
            $tahotype = $this->tahotypeTable->findById($taho->tahotypeId);
            if($tahotype != null){
                $taho->tahotypeId = $tahotype->typetaho;
            }
        }       
        print json_encode($taho);
        die;
    }
    public function likeList(){
        $number = htmlspecialchars($_GET['number']);
        $taholist = $this->taholistTable->findLike('tahonumber', $number);
        print json_encode($taholist?? []);
        die;
    }
}