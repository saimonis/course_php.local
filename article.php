<?php
$title = $_GET['title'];

require_once './autoload.php';
$view = new View\View();
$db = new Models\Db();

$query = 'SELECT * FROM news WHERE news.title = \'' . $title . '\'';

$data = $db -> execute($query);

$article = new Models\Article\Article($data[0]);

$view->assign('article', $article -> getData());

$view->display('article.php');
