<?php

include __DIR__ . '/../includes/DatabaseConnection.php';
include   __DIR__ . '/../classes/Main/DatabaseTable.php';
include   __DIR__ . '/../classes/Sitedata/Entity/Tahograf.php';

$tahosTable = new \Main\DatabaseTable($pdo, 'taholist', 'id');

$tahotype = new \Sitedata\Entity\Tahograf($tahosTable);

$tahotype->id = 6;

$tahos = $tahotype->getTahos();

foreach($tahos as $taho){
    echo $taho->tahonumber."<br>";
}