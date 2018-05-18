<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio1</title>
 </head>
 <body>

	<?php

	/*1. Realiza una página PHP en la que introduzca dos palabras en dos variables y diga si riman o no.
  Si coinciden las tres últimas letras tiene que decir que riman. Si coinciden sólo las dos últimas
  tiene que decir que riman un poco y si no, que no riman. Recuerda que las palabras rimarán
  independientemente de que se escriban con mayúsculas o minúsculas.*/

  $var1 = "camino";
  $var2 = "pepino";

  function riman($var1, $var2){
      if (strcasecmp(substr($var1,-3), substr($var2,-3)) == 0)
        echo "Riman!!";
      else
        echo "No riman";
  }

  riman($var1, $var2);

	?>

 </body>
</html>
