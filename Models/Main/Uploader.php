<?php
namespace Models\Main;
class Uploader
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isUploaded()
    {
        return isset($_FILES[$this->name]);
    }

    public function upload()
    {
        $file = $_FILES[$this->name];
        $file_size = $file['size'] . rand();
        $end_point_with_name = $_SERVER['DOCUMENT_ROOT'] . '/images' . "/$file_size" . "$file.jpg";
        var_dump('$end_point_with_name',$file);
        move_uploaded_file($file['tmp_name'], $end_point_with_name);
    }

}