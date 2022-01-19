<?php

	if (isset($_POST["daftar"])) {
		var_dump($_POST);
	}
	
?>

<form method="post">
	<ul>
		<li>
			<input type="text" name="user">
		</li>
		<li>
			<input type="password" name="pass">
		</li>
	</ul>
			<button type="submit" name="daftar">daftar</button>
</form>