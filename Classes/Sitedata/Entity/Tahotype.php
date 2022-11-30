<?php
namespace Sitedata\Entity;

class Tahotype
{
    public $id;
    public $typetaho;
    public $recordertype;
    private $tahosTable;
    

    public function __construct(\Main\DatabaseTable $tahosTable)
    {
        $this->tahosTable = $tahosTable;
    }

    public function getTahos()
    {
        return $this->tahosTable->find('tahotypeId', $this->id);
    }

    public function addTaho($taho) 
    {
        $taho['tahotypeId'] = $this->id;

        $this->tahosTable->save($taho);
    }
}