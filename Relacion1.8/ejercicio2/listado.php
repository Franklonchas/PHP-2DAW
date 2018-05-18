<html>
<head>
<meta charset="UTF-8">
<meta name="Generator" content="EditPlus®">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>Ejercicio 2</title>
</head>
<body>

		<?php

		/*Realiza una página llamada listado.php en el que muestre el contenido de un directorio. Muestre la
			fecha de la última modificación de cada elemento. En el caso de que sean archivos que muestre
			además su tamaño en bytes. A continuación modifíquelo (llama a la nueva página listado2.php) para
			que no aparezcan los directorios.*/

			$directorio = opendir('.');
			while ($archivo = readdir($directorio)){
				if (is_dir($archivo)){		//Comprueba si es un directorio
					echo "[".$archivo."]<br>";
				}
				else {
					echo "<br />";
					echo "Ultima modificación de: ".$archivo." - ".date("F d Y H:i:s.",filemtime($archivo));
					echo " - Tamaño: ".filesize($archivo).' bytes.';
				}
			}


		?>

	</body>

</html>
