<?php
namespace Models\News;
//include_once "OneNews.php";
class News {
    protected $data = [];

    public function __construct($arr)
    {
//      var_dump($arr);
        $i = 0;
        foreach ($arr as $news) {
            $this -> data[$i] = new OneNews($news, $i);
            $i++;
        }
    }

    public function getData()
    {
        return $this->data;
    }

}