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
  <h2>Paso 3: La variable ya ha sido destruida y su valor se ha perdido</h2>

  <?php
  print("Valor de la variable de sesión: ");
  if ($SESSION['nombre']){
    print($_SESSION["nombre"]);
  }
  ?>
  <br/>
  <a href="Ejercicio3-1.php">Volver al paso 1</a>
</body>
</html>
