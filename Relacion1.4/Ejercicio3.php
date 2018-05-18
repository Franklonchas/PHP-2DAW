<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio3</title>
 </head>
 <body>

	<?php

  /*Mostrar por pantalla el siguiente fragmento html con una sentencia PHP
      <a href="/arbol/prueb.php" class="prueba" onmouseOver="status='hola';
      return true;>pruebade\enlace</a>"
  */

  $cad = '<a href="/arbol/prueb.php" class="prueba" onmouseOver="status="hola"";
  return true;>pruebade\enlace</a>';

  echo $cad;

	?>

 </body>
</html>
