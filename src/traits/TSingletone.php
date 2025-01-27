<?php

namespace Msi\Ooptop\traits;

use Msi\Ooptop\core\Db;

trait TSingletone
{
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
}