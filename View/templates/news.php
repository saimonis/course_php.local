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
<div class=""><a href="index.php">index</a></div>
<ul>
    <?php if($data['news']) {foreach ($data['news'] as $news) { ?>
        <li><a href="article.php?title=<?php echo $news -> getOneNews()['title'] ?>"><?php echo $news -> getOneNews()['title'] ?></a></li>
    <?php }} ?>

</ul>
</body>
</html>