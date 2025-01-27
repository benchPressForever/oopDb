<?php

namespace Ember\Oop\core;

use Ember\Oop\interfaces\IRender;

class Render implements IRender
{
    public function renderTemplate($template, $params = []): string
    {
        ob_start();
        extract($params);
        include '../src/views/' . $template . ".php";
        return ob_get_clean();
    }
}