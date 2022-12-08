<?php

include __DIR__ . '/../includes/DatabaseConnection.php';
include   __DIR__ . '/../classes/Main/DatabaseTable.php';
include   __DIR__ . '/../classes/Sitedata/Entity/Taho.php';
include   __DIR__ . '/../classes/Sitedata/Entity/Tahotype.php';


$taholistTable = new \Main\DatabaseTable($pdo, 'taholist', 'id');

$author = new \Sitedata\Entity\Tahotype($taholistTable);

$author->id = 1;

$jokes = $author->getTahos();

foreach($jokes as $joke){

    echo $joke->id.'<br>';

}