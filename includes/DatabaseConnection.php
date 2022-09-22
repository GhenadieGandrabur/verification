<?php
include "env/default.env.php";

$pdo = new PDO("mysql:host={$mysqlHost};dbname={$mysqlDbName};charset=utf8", $mysqlUser, $mysqlPassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
