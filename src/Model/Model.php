<?php


namespace Ember\Oop\Model;


abstract class Model extends DbModel
{


    public function __get(string $name): mixed
    {
        //TODO* Проверить по props можно ли читать это поле
        return $this->$name;
    }

    public function __set(string $name, $value): void
    {
        //TODO* Проверить по props можно ли писать в это поле и установите props в True

        $this->$name = $value;
    }

}