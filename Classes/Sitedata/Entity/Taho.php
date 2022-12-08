<?php
namespace Sitedata\Entity;

class Taho
{
    public $id;    
    public $tahonumber;    
    public $tahotypeId;    
   
    private $tahotypeTable;

    public function __construct(\Main\DatabaseTable $tahotypeTable)
    {
        $this->tahotypeTable = $tahotypeTable;
    }

    public function getTahos()
    {
        return $this->tahotypeTable->find('tahotypeId', $this->id);
    }


    public function addTaho($taho) {

        $taho['tahotypeId'] = $this->id;

        $this->tahotypeTable->save($taho);
    }
}