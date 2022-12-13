<?php
namespace Sitedata\Entity;

class Tahotype
{
    public $id;
    public $typetaho;
    public $recordertype;
    private $taholistTable;
    

    public function __construct(\Main\DatabaseTable $taholistTable)
    {
        $this->taholistTable = $taholistTable;
    }

    public function getTahos()
    {
        return $this->taholistTable->find('tahotypeId', $this->id);
    }

    public function addTaho1($taho) 
    {
        $taho['tahotypeId'] = $this->id;
      
        $this->taholistTable->save($taho);
    }
}