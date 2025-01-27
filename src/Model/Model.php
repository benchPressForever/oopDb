<?php


namespace Ember\Oop\Model;


abstract class Model extends DbModel
{
    protected array $props = [];

    public function __get(string $name): mixed
    {
        //TODO* Проверить по props можно ли читать это поле
        if (array_key_exists($name, $this->props)) {
            return $this->$name;
        }

    }

    public function __set(string $name, $value): void
    {
        //TODO* Проверить по props можно ли писать в это поле и установите props в True
        if (array_key_exists($name, $this->props))
        {
            $this->props[$name] = true;
            $this->$name = $value;
        }

    }

}