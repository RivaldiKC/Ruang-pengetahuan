<!DOCTYPE html>
<html>
<head>
	<!-- #F6085B -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Halaman Utama</title>
</head>

<body>

<!-- ini bagian header -->
	<div class="header">
		<div class="container">
			<ul>
				<li><a href="keamanan.php">Keamanan</a></li>
				<li><a href="bantuan.php">Bantuan</a></li>
				<li><a href="layanan.php">Layanan dan Informasi</a></li>
			</ul>
		</div>
		<h2 class="logo">Ruang Pengetahuan</h2>
	</div>

<!-- banner -->
	<section class="banner">
		<h2>Siapkan dirimu untuk masa depan yang cerah <br> dengan menambah pengetahuan</h2>
		<p>Siapkan dirimu dengan matang untuk menyambut peluang <br> masa depan yang cerah</p>
		<div class="log">
			<ul>
				<li><a href="login.php">Masuk ></a></li>
				<li><a href="buat.php">Buat akun ></a></li>
			</ul>
		</div>
	</section>

<!-- Bawah banner -->
	<div class="flex-container">
		<div class="flex-container-2">
			<div class="border-kanan">
				<img width="150" height="150" src="img/baru.png">
				<h4>Apa yang baru?</h4>
				<p>Lihalah apa yang baru pada website kami</p>
				<a href="baru.php">Lihat ></a>
			</div>
		</div>
		<div class="flex-container-2">
			<div class="border-kanan">
				<img width="150" height="150" src="img/keamanan.png">
				<h4>Keamanan</h4>
				<p>Jaga kata sandi anda, jangan sampai jatuh pada orang yang salah</p>
			</div>
		</div>
		<div class="flex-container-2">
			<div class="border-kanan">
				<img width="150" height="150" src="img/belajar.png">
				<h4>Pengetahuan</h4>
				<p>Menambah ilmu pengetahuan anda setiap harinya untuk melampaui</p>
			</div>
		</div>
		<div class="flex-container-2">
			<div>
				<img width="150" height="150" src="img/berbagi.png">
				<h4>Berbagi</h4>
				<p>Berbagi persoalan yang pernah anda temui untuk menambah pengetahuan orang lain</p>
			</div>
		</div>
	</div>

	<!-- Bagian Footer -->
	<div class="footer">
		<p>Copyright &copy; <?php echo date("Y"); ?> Ruang Pengetahuan</p>
	</div>
</body>
</html>