<?php 
	$errorname=false;
	$errorpass=false;
	if(isset($_POST['login'])){
		include_once 'dbAaccess.php';
		$email=$_POST['email'];
		$password=$_POST['password'];
		$checkname=mysqli_query($connect, "SELECT * FROM userdata WHERE Email='$email'");
		$checkpass=mysqli_query($connect, "SELECT * FROM userdata WHERE Password='$password'");
		if(mysqli_num_rows($checkname)===1){
			if(mysqli_num_rows($checkpass)===1){
				header("Location: home.php");
				exit;
			}
			else{
				$errorpass=true;
			}
		}
		else{
			$errorname=true;
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Login | Bandar Ilkom</title>
	<style type="text/css">
		body {
			background-image: url("assets/img/banner.jpg");
		}
	</style>
<body>
	<section id="kotak-login">
		<h1>LOGIN BANDAR ILKOM</h1>
		<a href="home.php">Kembali ke home</a>
		<form method="POST" action="login.php" id="login-form">
			<p>E-mail</p>
			<input type="text" name="email">
			<?php if($errorname===true) : ?>
				<p style="color: red;font-style: italic;">Username tidak terdaftar</p>
			<?php endif; ?>
			<p>Password</p>
			<input type="password" name="password">
			<?php if($errorpass===true) : ?>
				<p style="color: red;font-style: italic;">Password salah</p>
			<?php endif; ?>
			<br>
			<br>
			<br>
			<button type="submit" name="login">Login</button>
			<p>Belum punya akun? <a href="register.php">Silahkan Register</a></p>
		</form>
	</section>
</body>
</html>