<?php

namespace Msi\Ooptop\interfaces;

interface IRender
{
    public function renderTemplate($template, $params = []);
}