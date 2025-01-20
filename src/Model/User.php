<?php

namespace Ember\Oop\Model;

class User extends Model
{
    public int $id;
    public static $name;

    protected function getTableName():string
    {
        return 'users';
    }
}