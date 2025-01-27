<?php

namespace Ember\Oop\interfaces;

interface IRender
{
    public function renderTemplate($template, $params = []);
}