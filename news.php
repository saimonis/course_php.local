<?php
require_once './autoload.php';

$view = new View\View();
$db = new Models\Db();

$query = 'SELECT * FROM news';

$data = $db -> execute($query);

$news = new Models\News\News($data);

$view->assign('news', $news -> getData());

$view->display('news.php');
