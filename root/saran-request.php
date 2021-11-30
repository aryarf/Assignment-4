<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Saran dan Request | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/saran-request.css">
</head>
<body>
	<section>
		<div id="title">
			<br>
			<h1>Selamat datang di Bandar Ilkom!</h1>
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
		<br>
		<br>
		<br>
		<div id="saran-request">
			<h4>Silahkan masukkan saran agar situs ini bisa berkembang, atau request sesuatu seperti materi, soal, dll</h4>
			<form method="POST" action="saran-request.php" id="inputsaran">
				<input type="text" name="text">
				<br>
				<br>
				<br>
				<button type="input" name="login">Input</button>
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
</body>
</html>