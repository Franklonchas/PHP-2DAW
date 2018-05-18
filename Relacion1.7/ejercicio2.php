<html>
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>Ejercicio 2</title>
</head>
<body>
<form action="" method="post">
		usuario: <input type="text" name="usuario"><br/>
		password: <input type="passwordword" name="password"><br/>
		<input type="checkbox" name="recordar" value="yes" checked="checked"> Recordar<br>
		<input type="submit" value="Enviar">
</form>
</body>
</html>

		<?php

		if (isset($_POST['recordar']) && $_POST['recordar'] == 'yes') {
		    if (isset($_POST['usuario']) && isset($_POST['password'])) {
		        setcookie("usuario", $_POST['usuario'], time() + 60 * 60 * 24 * 100, "/");
		        setcookie("password", $_POST['password'], time() + 60 * 60 * 24 * 100, "/");
		    }
		}
		?>

		<?php print_r($_COOKIE); ?>


	</body>

</html>
