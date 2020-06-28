<?php

class GuestBook
{
    protected $path;
    protected $data;


    public function __construct()
    {
        $guests_book_path = __DIR__ . "/guests.txt";
        $this->path = $guests_book_path;
        $arr = file($guests_book_path);
        $this->data = $arr;
    }

    public function getData()
    {
        return $this->data;
    }

    public function append($text)
    {
        $this->data[] = $text . "\n";
        return $this;
    }

    public function save()
    {
        $fp = fopen($this->path, "w");
        foreach ($this->data as $str) {
            fwrite($fp, $str);
        }
        fclose($fp);
    }
}