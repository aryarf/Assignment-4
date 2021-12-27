<?php 
	session_start();
	$_SESSION['login']=0;
	$_SESSION['admin']=0;
	$errorname=false;
	$errorpass=false;
	if(isset($_POST['login'])){
		include_once 'dbAccess.php';
		$email=$_POST['email'];
		$password=$_POST['password'];
		$checkemail=mysqli_query($connect, "SELECT * FROM userdata WHERE Email='$email'");
		$checkpass=mysqli_query($connect, "SELECT * FROM userdata WHERE Password='$password'");
		if(mysqli_num_rows($checkemail)===1){
			if(mysqli_num_rows($checkpass)===1){
				$getuserdata=mysqli_query($connect, "SELECT * FROM userdata WHERE Email='$email'");
				$userdata=mysqli_fetch_assoc($getuserdata);
				$_SESSION['username']=$userdata['Nama'];
				$_SESSION['login']=1;
				if ($userdata['Role']==="admin") {
					$_SESSION['admin']=1;
				}
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
	<link rel="icon" type="image/png" href="assets/img/logo.jpg">
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
			<a href="home.php">Klik disini untuk masuk sebagai Guess</a>
		</form>
	</section>
</body>
</html>