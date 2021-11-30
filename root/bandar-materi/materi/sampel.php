<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Array | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="../../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/title.css">
	<link rel="stylesheet" type="text/css" href="../../css/materi.css">
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
			<form action="search.php" method="SEARCH" id="search">
				<input type="text" name="Kata_Pencarian" placeholder="Kolom Pencarian">
				<button type="submit" name="Cari" class="button-search">Cari</button>
			</form>
		</nav>
		<h1 id="title-2"><strong>PHP Array</strong></h1>
		<div id="utama">
			<h3>Apa itu Array?</h3>
			<p>Bagi yang belum tahu, array adalah semacam variabel khusus yang dipakai untuk menyimpan lebih dari satu variabel.</p>
			<p>Pada awalnya kita akan berpikir kalau membuat variabel lebih dari satu itu lumayan mudah.</p>
			<div class="program">
				<p>$nama1 = "Rifqi";</p>
				<p>$nama2 = "Rafael";</p>
				<p>$nama3 = "Randi";</p>
			</div>
			<p>Tetapi ini akan sangat menyulitkan apabila kita perlu memasukkan lebih banyak variabel didalamnya, seperti 100 misalkan. Bukankah itu malah akan sangat merepotkan dan memakan banyak tempat?</p>
			<p>Disinilah array bisa menjadi sangat berguna.</p>
			<div class="program">
				<p>$nama = array("Rifqi", "Rafael", "Randi");</p>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<footer>
		<strong><a href="../../saran-request.php">Kotak Pendapat</a></strong>
		<strong><a href="../../about.php">Tentang Kami</a></strong>
		<strong><a href="#kontak">Kontak</a></strong>
		<img src="assets/img/logo.jpg">
	</footer>
	<script type="text/javascript" src="../../js/sticky-navbar.js"></script>
</body>
</html>