<?php

include __DIR__ . '/../includes/DatabaseConnection.php';
include   __DIR__ . '/../classes/Main/DatabaseTable.php';
include   __DIR__ . '/../classes/Sitedata/Entity/Taho.php';

$tahosTable = new \Main\DatabaseTable($pdo, 'taholist', 'id');

$type = new \Sitedata\Entity\Taho($tahosTable);

$type->id = 2;

$tahos = $type->getTahos();

foreach($tahos as $tah){
    echo $tah-> tahonumber."<br>";
}