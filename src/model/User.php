<?php

namespace Ember\Oop\model;

class User extends Model
{
    protected ?int $id;
    protected ?string $name;

    protected array $props = [
        'id' => false,
        'name' => false,
    ];


    protected static function getTableName():string
    {
        return 'users';
    }
}