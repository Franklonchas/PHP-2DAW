<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio1</title>
 </head>
 <body>

	<?php

  /*1. Dada la frase “Este texto contiene una buena cantidad de letras” muestra, utilizado funciones de
  cadenas:*/
  $cad = 'Este texto contiene una buena cantidad de letras';

  //o La posición de la primera ocurrencia de la letra ‘a’.
  function ocurrenciaA($cad){
    return strpos($cad, 'a');
  }
  echo 'Primera ocurrencia de la letra "a": '.ocurrenciaA($cad);
  echo '</br>';

  //o La posición de la primera ocurrencia de la letra ‘m’.
  function ocurrenciaM($cad){
    return strpos($cad, 'm');
  }
  echo 'Primera ocurrencia de la letra "m": '.ocurrenciaM($cad);
  echo '</br>';

  //o La posición de la primera ocurrencia de la palabra “cantidad”.
  function ocurrenciaCantidad($cad){
    return strpos($cad, 'cantidad');
  }
  echo 'Primera ocurrencia de la palabra "cantidad": '.ocurrenciaCantidad($cad);
  echo '</br>';

  //o La primera ocurrencia desde el final de la letra ‘e’.
  function ocurrenciaE($cad){
    return strrpos($cad, 'e');
  }
  echo 'Primera ocurrencia de la letra "e": '.ocurrenciaE($cad);
  echo '</br>';

  //o La frase desde la aparición de la palabra “texto” hasta el final.
  function ocurrenciaTexto($cad){
    return substr($cad, strrpos($cad, 'texto'));
  }
  echo 'Frase desde la palabra "texto": '.ocurrenciaTexto($cad);
  echo '</br>';

  //o La cadena desde el carácter 15 hasta el final.
  function caracter15($cad){
    return substr($cad, 15);
  }
  echo 'Frase desde la posición 15": '.caracter15($cad);
  echo '</br>';

  //o La cadena devolviendo 6 caracteres desde el carácter 18.
  function seisCaracteres($cad){
    return substr($cad, 18, 6);
  }
  echo 'Seis caracteres desde la posicion 18": '.seisCaracteres($cad);
  echo '</br>';

  //o La cadena devolviendo los 9 últimos caracteres.
  function nueveUltimos($cad){
    return substr($cad, strlen($cad) - 9);
  }
  echo 'Nueve últimos caracteres": '.nueveUltimos($cad);
  echo '</br>';

  //o La cadena empezando en el carácter 4 y terminando en el 7 desde atrás.
  function otroArray($cad){
    return substr($cad, 4, strlen($cad) - 7);
  }
  echo 'Empezando en 4 y acabando en 7 antes del final": '.otroArray($cad);
  echo '</br>';

	?>

 </body>
</html>
