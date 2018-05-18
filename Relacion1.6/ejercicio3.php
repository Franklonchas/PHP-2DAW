<!doctype html>
<html lang="en">

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

    /*Ejercicio 3.
		Función que muestre el contenido de un directorio con readdir(). Escoge un directorio entre los
		existentes.*/

		$directorio = opendir("./Relacion1.1");	//Muestra los archivos que hay en la carpeta Relacion1.1
		while ($archivo = readdir($directorio)) {
		    if (is_dir($archivo)){
		        echo "[".$archivo . "]<br />";
				}
		    else
		        echo $archivo . "<br />";
		}

  	?>

	</body>

</html>
