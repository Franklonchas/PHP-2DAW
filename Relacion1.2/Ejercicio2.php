<!doctype html>
<head>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio2</title>
 </head>
 <body>

	<?php

	/*2. Realiza una página PHP que permita chequear si en una caja de texto se introduce una dirección
  de correo válida. Una dirección de correo válida debe tener presentes los caracteres ‘@’ y ‘.’ Si
  la dirección es válida escribe por un lado el nombre de usuario y por otro el dominio de dicha
  dirección.*/

  function correoValido($email){
      $emailPartido = explode("@", $email);
      if (count($emailPartido) != 1 && strpos($emailPartido[1], ".")){
          echo "Nombre: ".$emailPartido[0]."</br>";
          echo "Dominio: ".$emailPartido[1];
      }
      else
          echo "Dirección no válida.";
  }

  correoValido("pmb.daw2.dwes@gmail.com");

	?>

 </body>
</html>
