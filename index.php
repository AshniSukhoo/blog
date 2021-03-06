<?php

//Autoload namespaces
include 'vendor/autoload.php';

//Get routes list
include 'Http/routes.php';

//Create new instance of the routing component and call it
$router = new Core\Requests\Routing($_SERVER['REQUEST_URI'], $routes);

//Starts a session or resume
session_start();

//Dispatch Request
$router->dispatch();