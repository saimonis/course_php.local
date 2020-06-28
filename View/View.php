<?php
namespace View;
class View
{
    protected $data = [];

    public function __construct()
    {
    }

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

    public function getData($name)
    {
        return  $this->data[$name];
    }

    public function display($template)
    {
        $data = $this -> data;
        $str =  __DIR__ . '/templates/' .$template;
        $str = str_replace('\\', '/', $str);

        include_once $str;

    }

    public function render($template)
    {
        return include_once "./templates/$template";
    }

}