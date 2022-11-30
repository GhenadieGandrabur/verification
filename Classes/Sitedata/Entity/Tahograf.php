<?php
namespace Sitedata\Entity;

class Tahograf
{
    public $id;
   
    private $tahosTable;

    public function __construct(\Main\DatabaseTable $tahosTable)
    {
        $this->tahosTable = $tahosTable;
    }

    public function getTahos()
    {
        return $this->tahosTable->find('tahotypeId', $this->id);
    }


    public function addTaho($taho) {

        $taho['tahotypeId'] = $this->id;

        $this->jokesTable->save($taho);
    }
}