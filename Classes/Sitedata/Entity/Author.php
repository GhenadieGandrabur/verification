<?php
namespace Sitedata\Entity;

class Author
{
    public $id;
    public $name;
    public $email;
    public $password;
    private $certificateTable;

    public function __construct(\Main\DatabaseTable $certificateTable)
    {
        $this->certificateTable = $certificateTable;
    }

    public function getCertificate()
    {
        return $this->certificateTable->find('authorId', $this->id);
    }

    public function addCertificate($certificate) {

        $certificate['authorId'] = $this->id;
    
        $this->certificateTable->save($certificate);
    }
}