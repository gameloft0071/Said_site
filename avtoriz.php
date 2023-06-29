<?php
$servername = "localhost";
$dbname = "dz_kalitaev";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>авторизация</title>
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
	<div class="form_avtor">
		<form method="post">
			<input type="text" name="login" required style="height: 50px;width: 400px;font-size: 25px"><br><br>
			<input type="password" name="pas" required style="height: 50px;width: 400px;font-size: 25px""><br><br>
			<input type="submit">
		</form>
	</div>
	<p class="avtor_txt">Если вы не зарегестрированы,создайте <a href="registr.php"  class="href_avtor">профиль</a></p>
     <?php

     if (isset($_POST['login'])){
	$_POST['pas']=sha1($_POST['pas']);
	$sql = mysqli_query($conn,"SELECT * FROM users WHERE name='{$_POST['login']}' and pas='{$_POST['pas']}'" );
	if ($sql->num_rows > 0) {
		setcookie("us", 1, time()+7*24*60*60);
		header("location:index.php");
	}else{
		echo'<p style="color: azure;font-size: 30px;margin-left: 35%">неверный логин или пароль</p>>';
	}

}
?>
	</main>





 <?php
   include 'moduls/footer.php';
   ?>
</body>
</html>

