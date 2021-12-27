<?php
	session_start();
	include_once 'dbAccess.php';
	if(isset($_POST['submitpost'])){
		$nama=$_SESSION['username'];
		$judul=$_POST['judul'];
		$post=$_POST['post'];
		mysqli_query($connect, "INSERT INTO post (`Nama`, `Topik`, `Post`, `Tanggal`, `status`) VALUES ('$nama', '$judul', '$post', NOW(), 'aktif');");
		header("Location: ruang-diskusi.php");
		exit;
	}
	if(isset($_POST['postkomen'])){
		$nama=$_SESSION['username'];
		$komentar=$_POST['komentar'];
		$postid=$_GET['id'];
		mysqli_query($connect, "INSERT INTO komentar (`Nama`, `Komentar`, `PostId`, `Tanggal`) VALUES ('$nama', '$komentar', '$postid', NOW());");
		header("Location: ruang-diskusi.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ruang Diskusi | Bandar Ilkom</title>
	<link rel="icon" type="image/png" href="title-logo.png">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/title.css">
	<link rel="stylesheet" type="text/css" href="css/ruang-diskusi.css">
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
		<h1 id="title-2"><strong>Ruang Diskusi</strong></h1>
		<div id="beranda">
			<form method="POST" id="post" action="ruang-diskusi.php">
				<p><strong>POST SESUATU DISINI</strong></p>
				<input type="text" name="judul" placeholder="Masukkan Judul">
				<br>
				<input type="text" name="post" placeholder="Masukkan Topik Diskusi">
				<button class="button-post" type="submit" name="submitpost">POST</button>
			</form>
			<div id="beranda-2">
				<h1>POSTINGAN TERBARU</h1>
				<?php
			    $isipost = mysqli_query($connect, "SELECT * FROM `post` WHERE status='aktif' ORDER BY `Id` DESC;");
			    while($data = mysqli_fetch_array($isipost)) {
			    	$postId = $data['Id'];
				    $isikomen = mysqli_query($connect, "SELECT * FROM `komentar` WHERE PostId='$postId' ORDER BY `Id` ASC;");
	        		echo "<div class=\"postingan\">";
						echo "<strong style=\"font-size: 20px;\">".$data['Topik']."</strong>";
						echo "<p style=\"font-size: 15px;\">oleh: ".$data['Nama']."<p>";
						echo "<p style=\"font-size: 15px;\">".$data['Tanggal']."<p>";
						echo "<p>".$data['Post']."</p>";
						echo "<br>";
						echo "<p><strong>Komentar</strong></p>";
						echo "<form method=\"POST\" class=\"komentar\" action=\"ruang-diskusi.php?id=$postId\">";
							echo "<input type=\"text\" name=\"komentar\" placeholder=\"komentar disini\">";
							echo "<button class=\"button-post\" type=\"submit\" name=\"postkomen\">POST</button>";
							while($komen = mysqli_fetch_array($isikomen)) {
								echo "<p><strong>".$komen['Nama']."</strong><br>".$komen['tanggal']."<br>".$komen['Komentar']."</p>";
							}
						echo "</form>";
					echo "</div>";
		    	}
				?>
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