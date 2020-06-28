<?php
function my_autoloader($className)
{
    $className = __DIR__ . '/' . $className . '.php';

    $str = str_replace('\\', '/', $className);

    if (file_exists($str)) {
        require_once $str;
    }

}