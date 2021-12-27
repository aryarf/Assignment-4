<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
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
			<form action="search.html" method="SEARCH" id="search">
				<input type="text" name="Kata_Pencarian" placeholder="Kolom Pencarian">
				<button type="submit" name="Cari" class="button-search">Cari</button>
			</form>
		</nav>
		<div id="about">
			<h2>Bandar Ilkom</h2>
			<br>
			<p>Bandar Ilkom adalah sebuah wadah yang dibuat untuk satu tujuan, yaitu membantu orang-orang, terutama mahasiswa prodi Ilmu Komputer, dalam mengerti seluk beluk tentang komputer, program, dan juga pelajaran matematika yang dibutuhkan dalam programming. Situs ini dibangun atas dasar kebutuhan bersama untuk bisa lebih mudah mempelajari materi-materi dalam prodi ilmu komputer, sekaligus tempat belajar bagi mereka yang bukan prodi ilmu komputer tetapi juga tertarik dengan pelajaran-pelajarannya</p>
		</div>
		<br>
		<br>
		<br>
		<br>
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