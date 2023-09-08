<?php

session_start();

require_once "./config/autoload.php";

$router = new Router();
$router->routerRequest();