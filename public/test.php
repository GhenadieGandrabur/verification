<?php 
include __DIR__ . '/../includes/DatabaseConnection.php'; 
include __DIR__ . '/../Classes/Main/DatabaseTable.php'; 
include __DIR__ . '/../Classes/Sitedata/Entity/Tahotype.php'; 

$tahoTable = new \Main\DatabaseTable($pdo, 'taholist', 'id');


$taho = new \Sitedata\Entity\Tahotype($tahoTable);

$taho->id = 3;

$tahos = $taho->getTahos();

foreach($tahos as $taho){
    echo $taho->tahonumber." ".$taho->measurementRange."<br>";
}