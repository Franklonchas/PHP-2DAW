<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="EditPlus®">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title>Calculadora Ejercicio 8</title>
</head>

	<body>
		<h1>Calculadora</h1>

		<form method="post">
      <input type="hidden" name="total" value="cont" />
			<p>Introduce el primer numero:</p>
			<input type="text" name="num1">
			<p> Introduce el segundo numero:</p>
			<input type="text" name="num2"><br><br>

		<label>
				<input type="radio" name="operador" value="suma"> Suma
		</label>

		<label>
				<input type="radio" name="operador" value="resta"> Resta
		</label>

		<label>
				<input type="radio" name="operador" value="multiplicacion"> Multiplicación
		</label>

		<label>
				<input type="radio" name="operador" value="division"> División
		</label>

			<br><br>

			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">

		</form>
  </br>

		<?php

		/*8. Utiliza campos ocultos en el script creado en el ejercicio anterior para almacenar y mostrar el número
		de peticiones realizadas por el usuario.
		*/

    $fl= fopen("contador.txt","r"); //Abrimos el fichero para lectura
    $veces_enviado= fread($fl, filesize("contador.txt")); //Leemos el fichero y guardamos el contenido en una variable
    $veces_enviado= $veces_enviado + 1; //Sumamos uno
    fclose ($fl); //Cerramos el archivo

    //Guardamos el nuevo numero:
    $fl= fopen("contador.txt","w");
    fwrite ($fl, $veces_enviado);
    fclose ($fl);


		if ($_POST ["num1"] !="" and $_POST ["num2"]!=""){
		  if ($_POST["operador"] == "suma") {
		    print ($resultado = $_POST ["num1"] + $_POST ["num2"]);
		  }
		  elseif ($_POST["operador"] == "resta") {
		    print ($resultado = $_POST ["num1"] - $_POST ["num2"]);
		  }
		  elseif ($_POST["operador"] == "multiplicacion") {
		    print ($resultado = $_POST ["num1"] * $_POST ["num2"]);
		  }
		  elseif ($_POST["operador"] == "division") {
		    print ($resultado = $_POST ["num1"] / $_POST ["num2"]);
		  }
		}

		else {
		  print("Ingresa alg&uacute;n valor");
		}

		echo '</br>Has realizado '.$veces_enviado.' operaciones';

		?>

	</body>

</html>
