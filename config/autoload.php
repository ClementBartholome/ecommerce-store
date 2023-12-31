<?php 

spl_autoload_register(function($className) {
    if (file_exists("controllers/" . $className . ".php")) {
        require_once "controllers/" . $className . ".php";
    } else if (file_exists("models/" . $className . ".php")) {
        require_once "models/" . $className . ".php";
    }  else if (file_exists("views/" . $className . ".php")) {
        require_once "views/" . $className . ".php";
    }   else if (file_exists("config/" . $className . ".php")) {
        require_once "config/" . $className . ".php";
    }   else if (file_exists("router/" . $className . ".php")) {
        require_once "router/" . $className . ".php";
    }
});