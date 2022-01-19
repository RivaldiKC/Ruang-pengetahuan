<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<style type="text/css">
			* {
				margin: 0;
				padding: 0;
			}
			h2 {
				font-family: 'Dancing Script', cursive;
				text-align: center;
				margin-top: 150px;
				font-size: 50px;
				color: white;
			}
	
			.dasar {
				width: 100%;
				background-color: rgba(246, 8, 91,0.3);
				height: 655px;
			}
			.kotak {
				width: 450px;
				height: 600px;
				background-color: rgba(246, 8, 91,0.7);
				position: absolute;
				left: 425px;
				top: 30px;
			}
			.isi {
				margin-top: 90px;
			}
			.isi ul li {
				text-align: center;
				list-style: none;
				margin-top: 20px;
				color: white;
			}
			.isi a {
				color: white;
				text-decoration: none;
			}
			p{
				text-align: center;
				color: white;
				position: absolute;
				top: 250px;
				left: 45px;
			}
			button {
				font-family: sans-serif;
				font-size: 18px;
				color: white;
				background: #E00434;
				padding: 7px 15px;
				margin-top: 40px;
				margin-left: 185px;
			}
	</style>
	<title>Halaman Login</title>
</head>
<body>
	<div class="dasar">
		<div class="kotak">
			<h2>Selamat Datang</h2>

			<?php
				if (isset($_GET['PESAN'])) {
					if ($_GET['PESAN']=='GAGAL') { ?>
					<p>Maaf,username atau password yang anda masukan salah. <br> Silahkan ketikan ulang!</p>
					<?php }
				}
			?>

			<form class="isi" action="" method="POST">
				<ul>			
					<li>
						<label>username :</label>
						<input size="25" type="text" name="username">
					</li>
					<li>
						<label>password :</label>
						<input size="25" type="password" name="password">
					</li>
					<li>
						<a href="buat.php">Belum memiliki akun?</a>
					</li>
				</ul>
				<button type="submit" name="login">Login</button>
			</form>

			<?php
	
	//ketika tombol login di pencet
	if (isset($_POST['login'])) {
		//ini bagian menangkap data dari form
		$username=$_POST['username'];
		$password=$_POST['password'];

		//mencocokan username dan password pada database
		$data=mysqli_query($koneksi,"SELECT * FROM user
			WHERE username='$username'
			and password='$password' ");

		//menghitung jika ada data yang ditemukan
		if (mysqli_num_rows($data)>0) {
			header('location:utama.php');
		} else {
			header('location:login.php?PESAN=GAGAL');
		}
	}
?>
		</div>
	</div>

</body>
</html>