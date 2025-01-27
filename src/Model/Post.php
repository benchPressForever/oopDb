<?php

//TODO 1*. Реализовать Update для всех моделей


namespace Ember\Oop\Model;


class Post extends Model
{
    protected ?int $id = null;
    protected ?string $title;
    protected ?string $text;
    protected ?string $id_category;

    protected array $props = [
        'id' => false,
        'title' => false,
        'text' => false,
        'id_category' => false,
    ];


    public function __construct(string $title = null, string $text = null, string $id_category = null)
    {
        $this->title = $title;
        $this->text = $text;
        $this->id_category = $id_category;
    }


    protected static function getTableName(): string
    {
        return 'posts';
    }
}