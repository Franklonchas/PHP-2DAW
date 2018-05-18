<?php
session_name("ejercicio3");
session_start();
?>

<html>
<head>
  <meta charset="UTF-8">
	<meta name="Generator" content="EditPlus®">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
  <title>Ejercicio 3</title>
  <style>
   h1{color: rgb(13, 102, 222);}
   h2{font-weight: bold;}
  </style>
</head>

<body>
  <h1>Manejo de sesiones</h1>
  <h2>Paso 2: Se accede a la variable de sesion y se destruye</h2>

  <?php
  print("Valor de la variable de sesión: ");
  print($_SESSION["nombre"]);
      session_destroy();
  ?>

  <br/>
  <a href="Ejercicio3-3.php">Paso 3</a>
</body>
</html>
