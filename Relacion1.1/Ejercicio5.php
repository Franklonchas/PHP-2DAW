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

	/* Muestre una tabla de 4 por 4 que refleje las primeras 4 potencias de los números del uno
	1 al 4 (hacer una función que las calcule invocando la función pow).
	Recuerda:
	 en php las funciones hay que definirlas antes de invocarlas
	 los parámetros se indican con su nombre ($cantidad) si son por valor y
	precedidos de & (&$cantidad) si son por referencia.*/

	function potencias() {
		echo "<table cellspacing ='3' border = '0'>";
		for ($i=1; $i <= 4; $i++){
			echo "<tr>";
			for ($j=1; $j <= 4; $j++) {
				echo "<td height='50' width='50'>".pow($i, $j)."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	potencias();

	?>

 </body>
</html>