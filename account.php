<?php
session_start();
	if(empty($_SESSION['login'])){
    	header("Location: login.php");
    	die();
	}
	include_once 'dbAccess.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Akun | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="assets/img/logo.jpg">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/account.css">
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
		<br><br><br>
		<div id="account">
			<div id="profile-left">
				<img src="assets/img/blank-pp.png">
				<br><br><br><br><br><br><br>
				<a href="login.php?logout=1">LOG OUT</a>
			</div>
			<?php if($_SESSION['admin']===1): ?>
			<div class="profile-right" id="admin">
				<h1>Nama: Admin <?php echo $_SESSION['username'] ?></h1>
				<a href="admin/admin-panel.php">PANEL ADMIN</a>
			</div>
			<?php else : ?>
			<div class="profile-right" id="member">
				<h1>Nama: <?php echo $_SESSION['username'] ?></h1>
			</div>
			<?php endif ?>
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</section>
	<footer>
		<strong><a href="saran-request.php">Kotak Pendapat</a></strong>
		<strong><a href="about.php">Tentang Kami</a></strong>
		<strong><a href="#kontak">Kontak</a></strong>
		<img src="assets/img/logo.jpg">
	</footer>
	<script type="text/javascript" src="js/sticky-navbar.js"></script>
</body>
</html>