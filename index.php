<?php

use Ember\Oop\Model\Category;
use Ember\Oop\Model\Post;

include "vendor/autoload.php";


//$category = new Category("Хобби");





/**@var Category $category */
$category = Category::getOne(1);

print_r($category->getAll());











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