<?php

include __DIR__ . "/../vendor/autoload.php";

//роутинг
//localhost/?c=post&a=update&id=2


$controllerName = $_GET['c'] ?? 'posts';
$actionName = $_GET['a'] ?? 'index';

$controllerClass = "Ember\\Oop\\controllers\\" . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
} else {
    echo "Нет такого контроллера";
}







