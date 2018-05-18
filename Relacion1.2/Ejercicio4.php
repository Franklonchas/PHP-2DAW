<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio4</title>
 </head>
 <body>

	<?php

	/*4. Realiza una página PHP en la que se introduzca una frase en una variable. Muestra por pantalla
  las dos primeras palabras de esa frase.
  */


  $frase = "Fran no sabe PHP";
  $dividida = strtok($frase, " ");

  for ($i=1; $i<3; $i++){
    echo "$dividida ";
    $dividida = strtok(" ");
  }

	?>

 </body>
</html>
