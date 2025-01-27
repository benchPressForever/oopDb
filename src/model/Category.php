<?php

namespace Ember\Oop\model;

use Ember\Oop\core\Db;

class Category extends Model
{
    protected ?int $id = null;
    protected ?string $category;

    protected array $props = [
        'id' => false,
        'category' => false,
    ];


    public function __construct(string $category = null)
    {
        $this->category = $category;
    }

    public function insert(): Category
    {
        $sql = "INSERT INTO categories (category) VALUES (?)";
        Db::getInstance()->execute($sql, [$this->category]);
        $this->id = Db::getInstance()->lastInsertId();
        return $this;
    }

    protected static function getTableName(): string
    {
        return 'categories';
    }
}