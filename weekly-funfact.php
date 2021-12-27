<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weekly Funfact | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/weekly-funfact.css">
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
		<h1 id="title-2"><strong>Weekly Funfact</strong></h1>
		<div id="layar-utama">
			<table id="tabel-utama">
				<tr>
					<td style="width: 50%;"><p>C++ adalah bahasa programming untuk game yang paling banyak dipakai</p></td>
					<td><p>Cara komputer membaca disk sama dengan cara gramaphon memutar lagu, hanya saja jarumnya diganti dengan laser</p></td>
				</tr>
				<tr>
					<td style="width: 50%;"><p>Ilmu Komputer UNJ pertama disahkan pada tahun 2013 dengan nama prodi Sistem Komputer</p></td>
					<td><p>2 skill yang paling harus dimiliki saat belajar programming adalah Bahasa Inggris dan Matematika</p></td>
				</tr>
			</table>
		</div>
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