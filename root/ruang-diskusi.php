<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ruang Diskusi | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/ruang-diskusi.css">
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
		<h1 id="title-2"><strong>Ruang Diskusi</strong></h1>
		<div id="beranda">
			<form id="post">
				<input type="text" name="post_disini" placeholder="Apa anda ingin memulai diskusi?">
				<br>
				<input type="text" name="tag" placeholder="Msukkan tag disini (#programming #html #matematika dll)">
				<br>
				<br>
				<button class="button-post" type="submit">POST</button>
			</form>
			<div id="beranda-2">
				<div class="postingan">
					<h2>Postingan terbaru</h2>
					<strong>Muhammad Rifqi Abdillah</strong>
					<p>TAG = #Programming #CPP</p>
					<p>Ada yang tahu bagaimana cara memunculkan windows baru dengan c++?</p>
					<form class="komentar">
						<input type="text" name="komentar" placeholder="komentar disini">
						<button class="button-post" type="submit">POST</button>
					</form>
				</div>
			</div>
		</div>
		<div>
			
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