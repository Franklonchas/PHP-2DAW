<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio3</title>
 </head>
 <body>

	<?php

	/*3. En algunas ocasiones tenemos que comprobar la validez de una cadena de caracteres para ver
  si contiene solamente aquellos que consideramos como válidos. Por ejemplo, si tuviéramos que
  validar el nombre de usuario anterior, podríamos permitir números, letras y ocasionalmente
  caracteres ‘-‘ o ‘’,_pero no otro tipo de caracteres como +‘’, ‘@’, ’,‘e&tc. Además, siendo un
  nombre de usuario, podemos tener fijados un máximo y mínimo número de caracteres. Realiza
  una comprobación para el nombre de usuario con dos partes, la primera para ver si la longitud
  de la cadena está permitida (entre 3 y 20 caracteres) y la segunda para asegurar que los
  caracteres utilizados están entre los permitidos(letras, números, guión alto, guión bajo).*/

    $usuario = 'pablo_castell85';
    $permitidos = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
    $permitido = true;

    if (strlen($usuario) >= 3 && strlen($usuario) <= 20) {
        for ($i = 0; $i < strlen($usuario); $i++){
            if (strpos($permitidos, $usuario[$i]) === false)
              $permitido = false;
        }
    }
    else
        $permitido = false;


    if($permitido)
      echo "Permitido";
    else
      echo "No Permitido";

	?>

 </body>
</html>
