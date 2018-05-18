<!doctype html>
<html lang="en">
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
$archi = "Agenda.txt";
$file = @fopen($archi, "r");
$num_lineas = 0;
$peso = filesize($archivo);
while (($linea = fgets($file)) !== false) {
    echo "$linea . <br/>";
    $num_lineas++;
}
echo "Número de lineas = " . $num_lineas;
echo "Tamaño del archivo = " . $peso;
fclose($file);
?>

 </body>

</html>
