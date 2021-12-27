<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bandar Materi | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/bandar-materi.css">
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
		<h1 id="title-2"><strong>Bandar Materi</strong></h1>
		<div id="utama">
			<h3>TAG Materi Pembelajaran</h3>
			<br>
			<br>
			<table class="tag">
				<tr>
					<td><strong>Matematika</strong></td>
					<td><strong>Pemrogaman</strong></td>
					<td><strong>Komputer</strong></td>
				</tr>
				<tr>
					<td><a href="#">Kalkulus</a></td>
					<td><a href="#">Python</a></td>
					<td><a href="#">Hardware</a></td>
				</tr>
				<tr>
					<td><a href="#">Statistika Probabilitas</a></td>
					<td><a href="#">C/C++</a></td>
					<td><a href="#">Software</a></td>
				</tr>
				<tr>
					<td><a href="#">Metode Numerik</a></td>
					<td><a href="#">Java</a></td>
					<td><a href="#">Database</a></td>
				</tr>
				<tr>
					<td><a href="#">Selengkapnya tentang Matematika</a></td>
					<td><a href="#">Selengkapnya tentang Pemrogaman</a></td>
					<td><a href="#">Selengkapnya Tentang Komputer</a></td>
				</tr>
				<tr class="diluar-tag">
					<td><a href="#">Baru Ditambahkan</a></td>
					<td><a href="#">Tidak Memakai Tag</a></td>
					<td><a href="#">Tag Selain Yang Diatas</a></td>
				</tr>
			</table>
			<br>
			<br>
			<h3>TAG Kumpulan Referensi</h3>
			<br>
			<br>
			<table class="tag">
				<tr>
					<td><strong>Matematika</strong></td>
					<td><strong>Pemrogaman</strong></td>
					<td><strong>Komputer</strong></td>
				</tr>
				<tr>
					<td><a href="#">Kalkulus</a></td>
					<td><a href="#">Python</a></td>
					<td><a href="#">Hardware</a></td>
				</tr>
				<tr>
					<td><a href="#">Statistika Probabilitas</a></td>
					<td><a href="#">C/C++</a></td>
					<td><a href="#">Software</a></td>
				</tr>
				<tr>
					<td><a href="#">Metode Numerik</a></td>
					<td><a href="#">Java</a></td>
					<td><a href="#">Database</a></td>
				</tr>
				<tr>
					<td><a href="#">Selengkapnya tentang Matematika</a></td>
					<td><a href="#">Selengkapnya tentang Pemrogaman</a></td>
					<td><a href="#">Selengkapnya Tentang Komputer</a></td>
				</tr>
				<tr class="diluar-tag">
					<td><a href="#">Baru Ditambahkan</a></td>
					<td><a href="#">Tidak Memakai Tag</a></td>
					<td><a href="#">Tag Selain Yang Diatas</a></td>
				</tr>
			</table>
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
</body>
</html>