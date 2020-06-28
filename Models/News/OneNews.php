<?php
namespace Models\News;
class OneNews
{
    protected $data;
    protected $id;

    public function __construct($news, $id)
    {
        $this -> data = $news;
        $this -> id = $id;
    }

    public function getOneNews()
    {
       return $this -> data;
    }
    public function getId()
    {
        return $this -> id;
    }
}