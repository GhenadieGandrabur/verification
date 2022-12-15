<?php
$mysqlHost = "localhost";
$mysqlDbName = "verification";
$mysqlUser = "root";
$mysqlPassword = "";

$localConfig = __DIR__ . DIRECTORY_SEPARATOR . "local.env.php";

if (file_exists($localConfig)) {
    include $localConfig;
}