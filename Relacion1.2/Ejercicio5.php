<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio5</title>
 </head>
 <body>

	<?php

	/*5. Realizar una página PHP en la que introduzca una frase en una variable y a continuación
  muestre el número de letras ‘a’ en esa cadena de la siguiente forma:
       ‘La bala mata la vaca’ → muestra: 8
       ‘El oso osó asir a la osa’ → muestra: 4*/

  $frase = "A Fran le encanta PHP";
  $contador = 0;

  for ($i=0; $i < strlen($frase); $i++){
    if ($frase[$i] == "a" || $frase[$i] == "A")
      $contador += 1;
  }

  echo 'La frase "'.$frase.'" tiene '.$contador.' a/aes'

	?>

 </body>
</html>
