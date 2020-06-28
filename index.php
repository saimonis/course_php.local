<?php
if ($_FILES) {
//    header("Location: /");
}
//var_dump('$_FILES', $_FILES);
$authorized = false;
if ($_COOKIE['PHPSESSID']) {
    $authorized = true;
}
//var_dump('$_COOKIE', $_COOKIE);
//var_dump('$_GET', $_GET);
?>

<?php
require_once __DIR__ . './autoload.php';
spl_autoload_register('my_autoloader');
$view = new  View\View();
$uploader = new Models\Main\Uploader('photo');

$uploaded = $uploader->isUploaded();
if ($uploaded) {
    $uploader->upload();
}

$images = Models\Main\Image::getAllImages();



$view->assign('images', $images);
$view->assign('uploaded', $uploaded);
if ($authorized) {
    $view->assign('userName', $_COOKIE['name']);
}

$view->display('index.php');
?>


<?php
//require_once "./GuestBook.php";
//$guests_data = new GuestBook();
//$guests_data->append('plus3')->save();
//var_dump($guests_data->getData());
////$guests_data -> save();
//?>
