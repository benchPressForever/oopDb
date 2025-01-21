<?php

use Ember\Oop\Model\Category;

include "vendor/autoload.php";




$category = new Category("Хобби");

$category->test();

DIE();
$category->insert();

print_r($category);



/**@var Category $category */
$category = Category::getOne(1);

print_r($category->getAll());











//AR CRUD над одной записью в БД через ООП

//C create
/*$post = new Post("post");
$post->insert();

//R read
$post = Post::getOne($id);
$post = Post::getAll();

//U update
$post->title = 'new';
$post->save();

//D delete

$post->delete();*/