<?php
$value = 'что-то откуда-то';

setcookie("TestCookie", $value);
setcookie("TestCookie", 'json_encode($value)', time() + 3600);
header('Content-Type: application/json; charset=windows-1251');
echo json_encode($_COOKIE);
