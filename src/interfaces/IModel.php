<?php

namespace Ember\Oop\interfaces;

interface IModel
{
    public static function getOne(int $id);
    public static function getAll();

}