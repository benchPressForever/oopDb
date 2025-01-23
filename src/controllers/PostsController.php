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

        echo $this->renderTemplate('index', [
            'posts' => $posts
        ]);
    }

    public function actionPost()
    {
        //TODO извлечь данные поста и отобразить его
        $id = (int)$_GET['id'];
        echo "Пост";
    }

    public function renderTemplate($template, $params = []): string
    {
        ob_clean();
        extract($params);
        include '../src/views/' . $template . ".php";
        return ob_get_clean();
    }
}