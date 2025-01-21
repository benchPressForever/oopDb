<?php

//TODO 2* Реализовать универсальный insert для всех моделей

namespace Ember\Oop\Model;

use Ember\Oop\Core\Db;
use Ember\Oop\Interfaces\IModel;

abstract class Model implements IModel
{


    abstract static protected function getTableName(): string;


    public static function getOne(int $id): Model
    {
        $table = static::getTableName();
        $sql = "SELECT * FROM $table WHERE id = :id" . PHP_EOL;
        return Db::getInstance()->queryOneObject($sql, ['id' => $id], static::class);
    }


    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()}" . PHP_EOL;
        return Db::getInstance()->queryAll($sql);
    }
}