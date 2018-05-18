<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio6</title>
 </head>
 <body>

	<?php

	/*1. Crea un array $dias con los días de la semana y muestra todas sus parejas
  índices/valores mediante un bucle foreach y for.*/

  $dias = array('pablo'=>'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

/*for ($i=0; $i<count($dias); $i++){
    echo each($dias).': '.$dias[$i];
    echo '</br>';
  }*/

  foreach ($dias as $clave => $valor) {
    echo "{$clave} => {$valor} ";
    print_r($dias);
  }




	?>

 </body>
</html>
