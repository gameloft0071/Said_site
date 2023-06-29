<?php



 ?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>кофейня</title>
    <meta name="keywords" content="кофейня,вкусный кофе">
	<link rel="stylesheet" href="styles/style.css">
</head>
<body>
   <?php
   include 'moduls/header.php';
   ?>
<main>
		<video autoplay loop muted class="vid">
   <source src="/video/more.mp4" type="video/mp4">
  </video>
	<?php if(isset($_COOKIE['us'])){ ?>




	<?php }else{
		echo '<div style="margin-left: 20%;color:azure;font-size: 30px;margin-top: 20%">этот раздел доступен только для авторизированных пользователей</div>';
	} ?>
   </main>




 <?php
   include 'moduls/footer.php';
   ?>
</body>
</html>
