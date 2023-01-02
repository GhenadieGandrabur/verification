<?php
function autoloader($className)
{
    $fileName = str_replace('\\', '/', $className) . '.php';

    $file = __DIR__ . '/../Classes/' . $fileName;
	

    include_once $file;
}

spl_autoload_register('autoloader');
