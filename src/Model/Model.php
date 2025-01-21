<?php


namespace Ember\Oop\Model;

use Ember\Oop\Core\Db;
use Ember\Oop\Interfaces\IModel;

abstract class Model implements IModel
{


    protected Db $db;

    abstract protected function getTableName(): string;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }


    public function getOne(int $id)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id" . PHP_EOL;
        return $this->db->queryOne($sql, ['id' => $id]);
    }


    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()}" . PHP_EOL;
        return $this->db->queryAll($sql);
    }
}