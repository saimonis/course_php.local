<?php
namespace Models\Main;

class Image {
    protected $imagePath;

    public static $images = [];

    public function __construct($image)
    {
        $this -> imagePath = "./images/$image";
    }

    public function getImagePath(){
        return $this -> imagePath;
    }

    public static function getAllImages()
    {
        $str = './images';

        foreach (scandir($str) as $image) {
            $info = pathinfo($str . "/$image");
            if ('jpg' === $info['extension']) {
                static :: $images[] = $str . '/' . $image;
            }
        }
        return static :: $images;
    }
}