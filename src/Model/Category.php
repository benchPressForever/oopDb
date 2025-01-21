<?php

namespace Ember\Oop\Model;

use Ember\Oop\Core\Db;

class Category extends Model
{
    public ?int $id = null;
    public ?string $category;


    public function test()
    {
        foreach ($this as $key => $value) {
            echo $key . " => " . $value . "\n";
        }
    }

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