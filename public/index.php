<?php

try {

    include __DIR__ . '/../includes/autoload.php';

    $route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');

    $entryPoint = new \Main\EntryPoint($route, $_SERVER['REQUEST_METHOD'], new \Sitedata\certificatesRoutes());
    $entryPoint->run();
} catch (PDOException $e) {
    $title = 'An error has occurred';

    $output = 'Database error: ' . $e->getMessage() . ' in '
        . $e->getFile() . ':' . $e->getLine();

    include  __DIR__ . '/../templates/layout.html.php';
}
