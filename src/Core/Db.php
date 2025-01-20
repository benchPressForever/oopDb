<?php

namespace Ember\Oop\Core;

class Db
{

    //Select where id = 1
    public function queryOne($sql)
    {
        return $sql;
    }

    //select *
    public function queryAll($sql)
    {
        return $sql;
    }

}