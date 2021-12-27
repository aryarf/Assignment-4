<?php
	$noname=false;
	$nopass=false;
	$noemail=false;
	$sameemail=false;
	$samepass=true;
	if(isset($_POST['register'])){
		include_once 'dbAccess.php';
		$nama = mysqli_real_escape_string($connect, $_POST['nama']);
		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$password1 = mysqli_real_escape_string($connect, $_POST['pass1']);
		$password2 = mysqli_real_escape_string($connect, $_POST['pass2']);
		$checkemail = mysqli_query($connect, "SELECT * FROM `userdata` WHERE Email='$email';");
		$status = "aktif";
		$role = "member";
		if($nama==="")
			$noname=true;
		if($password1==="")
			$nopass=true;
		if($email==="")
			$noemail=true;
		if(mysqli_num_rows($checkemail)===1)
			$sameemail=true;
		if($password1!=$password2)
			$samepass=false;
		if($noname===false && $nopass===false && $noemail===false && $sameemail===false && $samepass===true){
			$sql = "INSERT INTO `userdata` (`Nama`, `Status`, `Email`, `Password`, `Role`) VALUES ('$nama', 'aktif', '$email', '$password1', 'member');";
			mysqli_query($connect, $sql);
			"Location: login.php"
			exit;
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
	<title>Register | Bandar Ilkom</title>
	<style type="text/css">
		body {
			background-image: url("assets/img/banner.jpg");
		}
	</style>
</head>
<body>
	<section id="kotak-register">
		<h1>REGISTER BANDAR ILKOM</h1>
		<form method="POST" action="register.php" id="login-form">
			<p>Nama</p>
			<input type="text" name="nama">
			<?php if($noname===true) : ?>
				<p style="color: red;font-style: italic;">Username belum dimasukkan</p>
			<?php endif; ?>
			<p>E-mail</p>
			<input type="text" name="email">
			<?php if($noemail===true) : ?>
				<p style="color: red;font-style: italic;">E-mail belum dimasukkan</p>
			<?php endif; ?>
			<?php if($sameemail===true) : ?>
				<p style="color: red;font-style: italic;">Email sudah terdaftar</p>
			<?php endif; ?>
			<p>Password</p>
			<input type="password" name="pass1">
			<p>Ulangi Password</p>
			<input type="password" name="pass2">
			<?php if($samepass===false) : ?>
				<p style="color: red;font-style: italic;">Password tidak sama</p>
			<?php endif; ?>
			<br>
			<br>
			<br>
			<button type="submit" name="register">Register</button>
			<p>Sudah punya akun? <a href="login.php">Silahkan Login</a></p>
			<a href="home.php">Klik disini untuk masuk sebagai Guess</a>
		</form>
	</section>
</body>
</html>