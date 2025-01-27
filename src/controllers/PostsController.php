<?php

namespace Ember\Oop\controllers;

use Ember\Oop\model\Post;

class PostsController extends Controller
{

    public function actionIndex()
    {
        $posts = Post::getAll();

        echo $this->render('posts/index', [
            'posts' => $posts
        ]);
    }

    public function actionShow()
    {

        $id = (int)$_GET['id'];
        $post = Post::getOne($id);

        echo $this->render('posts/post', [
            'post' => $post
        ]);
    }



}