<?php

namespace Ember\Oop\Core;

use PDO;
use PDOStatement;

class Db
{
    private array $config = [
        'driver' => 'sqlite',
        'host' => 'localhost',
        'login' => '',
        'password' => '',
        'database' => 'blog.db'
    ];

    private function __construct(){}
    private function __clone(){}

    private static ?Db $instance = null;

    public static function getInstance(): Db
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private ?PDO $connection = null;

    private function getConnection(): PDO
    {
        if (is_null($this->connection)) {
            $this->connection = new PDO("{$this->config['driver']}:{$this->config['database']}");
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    private function query(string $sql, array $params = []): PDOStatement
    {
        $pdoStatement = $this->getConnection()->prepare($sql);
        $pdoStatement->execute($params);
        return $pdoStatement;
    }



    //Select where id = :id, ['id' => 1]
    public function queryOne(string $sql, array $params = []): ?array
    {
         return $this->query($sql, $params)->fetch();
    }

    //select *
    public function queryAll($sql): bool|array
    {
        return $this->query($sql)->fetchAll();
    }

}