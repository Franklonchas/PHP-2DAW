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

  /*Dada la frase "Bienvenidos a la aventura de aprender PHP en 30 horas" utilizar funciones de cadena para:*/

  $frase = "Bienvenidos a la aventura de aprender PHP en 30 horas";

  //Mostrar la parte central de la frase.
  function parteCentral($frase){
    return substr($frase, (strlen($frase)/2) - 10, 21);
  }
  echo 'Parte central de la frase: '.parteCentral($frase);
  echo '</br>';

  //Averiguar la posición de la palabra PHP.
  function posicionPHP($frase){
    return strpos($frase, 'PHP');
  }
  echo 'Posición de la palabra "PHP": '.posicionPHP($frase);
  echo '</br>';

  //Reemplazar la palabra "aventura" por la cadena "<b>misión</b>".
  function reemplazo($frase){
    return str_replace('aventura', '<b>misión</b>', $frase);
  }
  echo 'Frase con el reemplazo": '.reemplazo($frase);
  echo '</br>';


	?>

 </body>
</html>
