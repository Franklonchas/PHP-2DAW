<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio7</title>
 </head>
 <body>

	<?php

	/*7. Realiza una página PHP en la que se introduzca una frase en una variable y a continuación
  muestre la misma frase repitiendo todos sus caracteres. Así:
      CadenaOriginal
      CCaaddeennaaOOrriiggiinnaall*/

      $frase = 'CadenaOriginal';

      $fraseModificada = '';

      for ($i=0; $i<strlen($frase); $i++){
        $fraseModificada = $fraseModificada.$frase[$i].$frase[$i];
      }

      echo 'Esta es la Frase origianl: '.$frase.'</br> Y esta la frase modificada: ',$fraseModificada;

	?>

 </body>
</html>
