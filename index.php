<?php

use Ember\Oop\Core\Db;
use Ember\Oop\Model\Post;
use Ember\Oop\Model\User;

include "vendor/autoload.php";

$db = new Db();
$post = new Post($db);
$user = new User($db);


//Db->table('users')->where('name', '2')->get();
echo $user->getAll();
print_r($user->getOne(5));

$post = $post->getAll();
print_r($post);







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