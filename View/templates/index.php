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
<h1 style="text-transform: uppercase">main page</h1>
<div class=""><a href="./login.php">Log in</a></div>
<div class=""><a href="news.php">news</a></div>

<h2>Hello <?php echo $data['userName']?></h2>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <button>send photo</button>
</form>

<?php if($data['uploaded']) { ?>
 <h2>FILE UPLOADED</h2>
<?php } ?>
<hr>
<?php if($data['images']) {foreach ($data['images'] as $image) { ?>
<img src="<?php echo $image ?>" width='300' height='250'/>
<?php }} ?>

<div id="root" class="root"></div>
<button class="send" onclick="getIt()">send ajax</button>
<script>
   function getIt(){
       // alert('sasa')
       fetch('./ajax.php')
           .then(response => response.json())
           .then(data=>console.log(data))
   }
</script>
</body>
</html>