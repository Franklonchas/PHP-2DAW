<html>
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>Ejercicio 1</title>
</head>
<body>

		<?php

		/*Realizar un contador de visitas en PHP.
       Crearemos un fichero de texto “visitas.txt” y escribiremos en él un 0.
       Crearemos un fichero contador.php e implementaremos en él las siguientesinstrucciones:
      1. Abrir el fichero en modo lectura / escritura.
      2. Leer del fichero 8 bytes (ó la cantidad deseada) y guardarlos en una variable que
       llamaremos $contador
      3. Escribir en pantalla: “Esta es la visita numero: $contador”
      4. Incrementar el contador en una unidad
      5. Colocar el puntero al principio del fichero
      6. Escribir el nuevo valor del contador en el fichero
      7. Cerrar el fichero*/

			$num = fopen('visitas.txt', 'r+');

			$cont = fgets($num, 8);

			echo "Esta es la visita número: ".$cont;

			$cont++;

			rewind($num);

			fputs($num, $cont);

			fclose($num);

		?>

	</body>

</html>
