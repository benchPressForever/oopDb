<?php

//TODO 1. Реализовать Insert для всех моделей


namespace Ember\Oop\Model;


class Post extends Model
{
    public ?int $id = null;
    public ?string $title;
    public ?string $text;


    public function __construct(string $title = null, string $text = null)
    {
        $this->title = $title;
        $this->text = $text;
    }


    protected static function getTableName(): string
    {
        return 'posts';
    }
}