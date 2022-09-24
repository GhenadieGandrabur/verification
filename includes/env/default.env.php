<?php
$mysqlHost = "localhost";
$mysqlDbName = "verification";
$mysqlUser = "admin";
$mysqlPassword = "Zww939";

$localConfig = __DIR__ . DIRECTORY_SEPARATOR . "local.env.php";

if (file_exists($localConfig)) {
    include $localConfig;
}