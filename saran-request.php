<?php
	session_start();
	$nosaran=false;
	$adasaran=false;
	if($_SESSION['login']===1){
		if(isset($_POST['input'])){
			include_once 'dbAccess.php';
			$name = $_SESSION['username'];
			$saran = mysqli_real_escape_string($connect, $_POST['saran']);
			if($saran==="")
				$nosaran=true;
			if($nosaran===false){
				mysqli_query($connect, "INSERT INTO `kotak_saran` (`Nama`, `Tanggal`, `Saran`) VALUES ('$name', NOW(), '$saran'); ");
				$adasaran = true;
			}
		}
	}
	else
		header("Location: login.php");
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saran/Request | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/saranrequest.css">
</head>
<body style="margin: 0px;">
	<section>
		<div id="title">
			<br>
			<?php if($_SESSION['login']==1) : ?>
				<h1>Selamat Datang, <?php echo $_SESSION['username'] ?></h1>
			<?php else : ?>
				<hi>Selamat Datang!</h1>
			<?php endif ?>
			<h3>Tempat ilmu-ilmu penting komputer bisa diakses dengan mudah</h3>
			<br>
		</div>
		<nav id="navbar">
			<a href="account.php">Akun</a>
			<a href="home.php">Beranda</a>
			<a href="bandar-materi.php">Bandar Materi</a>
			<a href="bandar-soal.php">Bandar Soal</a>
			<a href="ruang-diskusi.php">Ruang Diskusi</a>
			<a href="weekly-funfact.php">Funfact Mingguan</a>
		</nav>
		<br>
		<br>
		<br>
		<div id="saran-request">
			<h4>Silahkan masukkan saran agar situs ini bisa berkembang, atau request sesuatu seperti materi, soal, dll</h4>
			<form method="POST" action="saran-request.php" id="inputsaran">
				<input type="text" name="saran" id="saranbox">
				<br>
				<br>
				<br>
				<?php if($nosaran===true) : ?>
					<p style="color: red;font-style: italic;">Mohon masukkan saran</p>
				<?php elseif($adasaran===true) : ?>
					<strong style="color: green;">Saran sudah terkirim</strong>
				<?php endif; ?>
				<button type="submit" name="input">Input</button>
			</form>
		</div>
	</section>
	<br>
	<br>
	<br>
	<footer>
		<strong><a href="saran-request.php">Kotak Pendapat</a></strong>
		<strong><a href="about.php">Tentang Kami</a></strong>
		<strong><a href="#kontak">Kontak</a></strong>
		<img src="assets/img/logo.jpg">
	</footer>
	<script type="text/javascript" src="js/sticky-navbar.js"></script>
	<script type="text/javascript" src="js/autoheight_textarea.js"></script>
</body>
</html>