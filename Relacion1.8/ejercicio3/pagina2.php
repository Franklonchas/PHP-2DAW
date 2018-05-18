<html>
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>Ejercicio 3</title>
</head>
<body>

		<?php

		/*Realiza una pequeña aplicación para recoger los comentarios de los usuarios sobre tu página web.
      En una primera página pagina1.php mostrarás un formulario que pida el nombre de usuario y un
      comentario:
      Al pulsar enviar se mandan los datos a la pagina2.php en la que guardan los datos en un fichero
      datos.txt y se muestra un mensaje del tipo:*/

	
			$nombre = $_POST['nombre'];
			$comentario = $_REQUEST['comentario'];
			$linea = "--------------------------------------------------------";

			$array = [$nombre, $comentario, $linea];

			echo "Los datos se guardaron correctamente:<br>";
			echo $linea.'<br>';

		 	$archivo = "datos.txt";

			for ($i=0; $i < count($array); $i++) {
					echo $array[$i];
					echo '<br>';
					$file=fopen($archivo,"a");
					fwrite($file, $array[$i]."\r\n");
					fclose($file);
			}

			?>

	</body>

</html>
