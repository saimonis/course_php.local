<?php
namespace Models\Article;
class Article {
    protected $data;

    public function __construct($data)
    {
        $this -> data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}