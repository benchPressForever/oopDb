<?php

namespace Ember\Oop\controllers;

use Ember\Oop\Model\Post;

class PostsController
{
    public function runAction($action)
    {
        $method = "action" . ucfirst($action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            echo "404 нет такого Action";
        }

    }

    public function actionIndex()
    {
        $posts = Post::getAll();

        echo $this->render('posts/index', [
            'posts' => $posts
        ]);
    }

    public function actionShow()
    {
        //TODO извлечь данные поста и отобразить его
        $id = (int)$_GET['id'];
        $post = Post::getOne($id);

        echo $this->render('posts/post', [
            'post' => $post
        ]);
    }

    public function render($template, $params = []): string
    {
        return $this->renderTemplate('layouts/main', [
            'menu' => $this->renderTemplate('menu'),
            'content' => $this->renderTemplate($template, $params)
        ]);

    }

    public function renderTemplate($template, $params = []): string
    {
        ob_start();
        extract($params);
        include '../src/views/' . $template . ".php";
        return ob_get_clean();
    }
}