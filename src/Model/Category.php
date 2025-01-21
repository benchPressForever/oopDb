<?php

namespace Ember\Oop\Model;

class Category extends Model
{
    public int $id;
    public string $category;

    protected function getTableName(): string
    {
        return 'categories';
    }
}