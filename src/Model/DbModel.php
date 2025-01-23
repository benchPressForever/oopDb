<?php

namespace Ember\Oop\Model;

use Ember\Oop\Core\Db;
use Ember\Oop\Interfaces\IModel;

abstract class DbModel implements IModel
{
    abstract static protected function getTableName(): string;

    public static function getOne(int $id): Model
    {
        $table = static::getTableName();
        $sql = "SELECT * FROM $table WHERE id = :id" . PHP_EOL;
        return Db::getInstance()->queryOneObject($sql, ['id' => $id], static::class);
    }


    public static function getAll()
    {
        $table = static::getTableName();
        $sql = "SELECT * FROM $table" . PHP_EOL;
        return Db::getInstance()->queryAll($sql);
    }

    public function save()
    {
        if (is_null($this->id)) {
            //$this->insert();
        } else {
            //$this->update();
        }
        return $this;
    }
}