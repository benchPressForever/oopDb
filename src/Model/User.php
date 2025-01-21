<?php

namespace Ember\Oop\Model;

class User extends Model
{
    public ?int $id;
    public ?string $name;

    protected static function getTableName():string
    {
        return 'users';
    }
}