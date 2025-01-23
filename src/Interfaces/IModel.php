<?php

namespace Ember\Oop\Interfaces;

interface IModel
{
    public static function getOne(int $id);
    public static function getAll();

}