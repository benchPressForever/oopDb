<?php

//TODO 1*. Реализовать Update для всех моделей


namespace Ember\Oop\Model;


class Post extends Model
{
    protected ?int $id = null;
    protected ?string $title;
    protected ?string $text;

    protected array $props = [
        'id' => false,
        'title' => false,
        'text' => false,
    ];


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