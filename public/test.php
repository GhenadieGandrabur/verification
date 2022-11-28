<?php

include __DIR__ . '/../includes/DatabaseConnection.php';
include   __DIR__ . '/../classes/Main/DatabaseTable.php';
include   __DIR__ . '/../classes/Sitedata/Entity/Taho.php';

$tahosTable = new \Main\DatabaseTable($pdo, 'certificates', 'id');


$type = new \Sitedata\Entity\Taho($tahosTable);



$tahos = $type->getTahoType();
                

foreach($tahos as $tah){
    echo $tah->vehicle."<br>";
}