<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	<style type="">

		* {
			padding: 0;
			margin: 0;
		}
		.logo {
			position: absolute;
			top: 8px;
			right: 50px;
			font-family: 'Dancing Script', cursive;
		}
		.topbar {
			width: 100%;
			background-color: #F6085B;
			height: 40px;
			padding-top: 7px;
		}
		.list {
			background-color: #F6CEDC;
			width: 20%;
			height: 610px;
			border-right: solid rgba(246, 8, 91,0.4);
		}
		.logot a {
			font-size: 20px;
			color: black;
			text-decoration: none;
		}
		.logot {
			border: 1px solid;
			width: 60px;
			padding: 5px 5px;
			text-align: center;
			margin-left: 10px;
			top: 5px;	
		}

		.list a {
			text-decoration: none;
			font-size: 20px;
		}
		.list li {
			border-bottom: solid rgba(246, 8, 91,0.4);
			padding: 5px 5px;
		}
	</style>
	<title>Halaman Utama</title>
</head>
<body>

	<h2 class="logo">Ruang Pengetahuan</h2>

	<div class="topbar">
		<div class="logot">
			<a href="indeks.php">Logout</a>
		</div>
	</div>

	<iframe class="frame" align="right" frameborder="0" width="1050" height="610" src="materi.php" name="materi"></iframe>

	<div class="list">
		<ul>
			<li>
				<a href="tambah/prinsip.html" target="materi">Paradigma dan prinsip interaksi</a>
			</li>
			<li>
				<a href="tambah/dialog.html" target="materi">Notasi dialog dan desain</a>
			</li>
			<li>
				<a href="tambah/cscw.html" target="materi">CSCW</a>
			</li>
		</ul>
	</div>

</body>
</html>