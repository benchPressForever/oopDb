<?php

namespace Ember\Oop\Model;

class Category extends Model
{
    public ?int $id;
    public ?string $category;


    public function __construct(string $category = null)
    {
        $this->category = $category;
    }


    protected static function getTableName(): string
    {
        return 'categories';
    }
}