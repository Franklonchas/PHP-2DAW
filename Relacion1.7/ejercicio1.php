<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="EditPlus®">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title>Ejercicio 1</title>
</head>

	<body>

  </br>

		<?php
		
  if(isset($_COOKIE['contador']))
  {
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); //caduca en un año
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador'];
  }
  else
  {
    setcookie('contador', 2, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Bienvenido';
  }

	echo $mensaje;

	?>


	</body>

</html>
