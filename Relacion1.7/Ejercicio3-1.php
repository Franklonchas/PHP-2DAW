<?php
session_name("ejercicio3");
session_start();
if (!isset($_SESSION["nombre"])) {
    $_SESSION["nombre"] = "Francisco";
}
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
  <h2>Paso 1: Se crea la variable de sesión y se almacena</h2>
  <?php
  print("Valor de la variable de sesión: ");
  print($_SESSION["nombre"]);
  ?>

  <br/>
  <a href="Ejercicio3-2.php">Paso 2</a>
</body>
</html>
