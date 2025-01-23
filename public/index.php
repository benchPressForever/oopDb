<?php

use Ember\Oop\Model\Category;

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

DIE();

/**@var Category $category */
$category = Category::getOne(1);
var_dump($category);




$category = new Category("Хобби");
$category->insert();



print_r($category);

// ORM - AR
// Repository


$category = Category::getOne(1);

print_r(Category::getAll());











//AR CRUD над одной записью в БД через ООП

//C create
/*$post = new Post("post");
$post->title="new";

$post->insert();

//R read
$post = Post::getOne($id);
$post = Post::getAll();

//U update
$post->title = 'new';
$post->update();

//D delete

$post->delete();*/