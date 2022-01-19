<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasi</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		p{
			color: white;
			position: absolute;
			top: 220px;
			margin-left: 90px;
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
			margin-top: 260px;
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
		button {
			font-family: sans-serif;
			font-size: 18px;
			color: white;
			background: #E00434;
			padding: 7px 15px;
			margin-left: 175px;
			margin-top: 40px;
		}
	</style>
</head>
<body>
	<div class="dasar">
		<div class="kotak">
			<form class="isi" action="" method="POST">
				<ul>
					<li>
						<label>Masukan Username :</label>
						<input type="text" name="usern">
					</li>
					<li>
						<label>Masukan password :</label>
						<input type="password" name="passw">
					</li>	
				</ul>
				<button type="submit" name="daftar">Daftar</button>
			</form>
			<?php
				
				if (isset($_POST["daftar"])) {
					$usern=$_POST['usern'];
					$passw=$_POST['passw'];

					mysqli_query($koneksi,"INSERT INTO user VALUES ('','$usern','$passw')");

					if (mysqli_affected_rows($koneksi)>0) { ?>
						<p> Anda berhasil mendaftar silahkan <a href="login.php">login!</a></p>
					<?php } else {
						echo "gagal";
						echo "<br>";
						echo mysqli_error($koneksi);
					}
				} 
			?>
		</div>
	</div>

</body>
</html>