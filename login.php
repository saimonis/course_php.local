<?php
include_once("./functions.php");
$login = $_POST['login'];
$password = $_POST['password'];
if (checkUser($login,$password)) {
    session_start();
    header("Location: /index.php");
}
if ($_COOKIE['PHPSESSID']) {
    header("Location: /index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php">Main page</a>
<form action="login.php" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <button>Click me</button>
</form>

</body>
</html>