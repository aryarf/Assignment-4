<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="assets/img/logo.jpg">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
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
		<h1 id="title-2"><strong>Ada apa saja di Bandar Ilkom?</strong></h1>
		<div>
			<div class="column50" style="text-align: left;">
				<img src="assets/img/icon-bandar-materi.jpg">
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<strong style="text-align: center;">Bandar Materi</strong>
				<p style="text-align: center;">Di bandar Materi, kalian bisa membaca materi apa saja sesuai kategori yang diberikan</p>
				<br><br><br>
				<img src="assets/img/icon-bandar-soal.jpg">
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<strong style="text-align: center;">Bandar Soal</strong>
				<p style="text-align: center;">Bandar Soal akan memberi kalian banyak sekali soal-soal latihan yang bisa kalian pakai untuk latihan</p>
				<br><br><br>
			</div>
			<div class="column50" style="text-align: right;">
				<img src="assets/img/icon-ruang-diskusi.jpg">
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<strong style="text-align: center;">Ruang Diskusi</strong>
				<p style="text-align: center;">Ruang Diskusi adalah sebuah tempat dimana user bisa menaruh sesuatu seperti pertanyaan yang nantinya akan bisa dijawab oleh orang-orang yang lebih paham, atau bahkan mengajak diskusi agar bisa menambah lebih banyak wawasan</p>
				<br><br><br>
				<img src="assets/img/icon-weekly-funfact.jpg">
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<strong style="text-align: center;">Funfact Mingguan</strong>
				<p style="text-align: center;">Funfact Mingguan akan selalu menampilkan info-info menarik tentang komputer, programming, atau bahkan jurusan ilmu komputer diseluruh Indonesia, yang akan direfresh setiap minggunya</p>
				<br><br><br>
			</div>
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