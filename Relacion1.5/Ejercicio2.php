<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio2</title>
 </head>
 <body>

	<?php

  /*Ejercicio 2*/

  $texto = "uno-dos-tres-cuatro-cinco";

  $lista = explode('-', $texto);

  echo '<h1>Manejo de cadenas</h1>';
  echo '<h2>Ejemplo 2</h2>';
  echo '<ul>';
  foreach ($lista as $valor){
    echo '<li>'.$valor.'</li>';
  };

  echo '</ul>';

	?>

 </body>

</html>
