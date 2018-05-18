<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="EditPlus®">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title>Ejercicio 9</title>
</head>

	<body>

		<form method="post" />

	    <p>Numero: <input type="text" name="adivina"/>
			<p><input type="hidden" name="num"/ value=$num>
			<p><input type="hidden" name="intentos"/>

	    <p><input type="submit" value="Comprobar el formulario">
	       <input type="reset" value="borrar todo">
	    </p>

	  </form>
  </br>

		<?php

		/*9. Crea un script que genera un número aleatoriamente (menor que 100) y un formulario que invita al
			usuario a adivinar dicho número, al enviar su pronóstico infórmale de si es mayor o menor que el
			número generado. Felicítalo cuando acierte, indicando el número de intentos que ha realizado.
			Pista: investiga $_SERVER[“PHP_SELF”].
		*/

		function setRandom(){
		   $res = rand(0, 100);
		   setcookie("random", $res, time() + 60 * 60 * 24 * 100, "/");
		   return $res;
		}

		$random = isset($_COOKIE['random']) ? $_COOKIE['random'] : setRandom();
		echo $random.'</br>';

	  if (!empty($_POST['adivina'])){
	  $num = $_POST['adivina'];
			if ($random > $num) print('El numero es mayor.'.$num);
			elseif ($random < $num) print('El numero es menor.'.$num);
			elseif ($random == $num) print('Enhorabuena, ese es el numero correcto.');
    }

		?>

	</body>

</html>
