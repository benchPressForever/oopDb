<?php

use Ember\Oop\Model\Category;
use Ember\Oop\Model\Post;

include "vendor/autoload.php";

$post = new Post();
$category = new Category();

print_r($category->getAll());
print_r($post->getAll());









//AR CRUD над одной записью в БД через ООП

//C create
/*$post = new Post("post");
$post->save();

//R read
$post = Post::getOne($id);
$post = Post::getAll();

//U update
$post->title = 'new';
$post->save();

//D delete

$post->delete();*/