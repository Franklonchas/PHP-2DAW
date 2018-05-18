<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio 6</title>
 </head>
 <body>

	<?php

  /*Ejercicio 6
  Crea un script de cuenta atrás para el cumpleaños de tu pareja/amig@, de modo que partiendo de un
  mes, y un año introducidos, se muestre un mensaje que le indique al usuario cuántos días, horas,
  minutos y segundos quedan para el gran día.*/

  function dateTo($str, $t1, $t2 = false) {
    // Si nos dan un segundo parámetros calculamos el tiempo entre dos fechas
    $t = $t1-($t2?$t2:time());

    // Un array con todos los reemplazos que vamos a usar
    $p = array(
        '{s}'=>1,
        '{i}'=>60,
        '{h}'=>60*60,
        '{d}'=>60*60*24,
        '{w}'=>60*60*24*7,
        '{m}'=>60*60*24*30,
        '{y}'=>60*60*24*365
    );

    // Obtenemos todos los tiempos que fueron provistos en la string
    preg_match_all("/\{[sihdwmy]\}/", $str, $ma);

    // Creamos un array ordenado del mayor al menor tiempo requerido
    $found = Array();
    foreach ($ma[0] as &$m) {
        $found[$m] = $p[$m];
    }
    arsort($found);

    // Reemplazamos la string con los tiempos
    foreach ($found as $i => &$fo) {
        $str = str_replace($i, (int) ($t/$fo), $str);
        $t = $t % $fo;
    }

    return $str;
  }


  echo(dateTo("Faltan {y} años, {m} meses, {w} semanas, {d} días, {h} horas, {i} minutos y {s} segundos para el cumpleaños de mi novia", strtotime("2018-06-11")));


/*OTRA FORMA

if (isset($_POST['mes']) && isset($_POST['dia'])) calcularDiferencia($_POST['dia'], $_POST['mes']);

function calcularDiferencia($dia, $mes)
{
    $anyo = date('Y');
    if ((date('m') > $mes) || (date('d') > $dia && date('m') == $mes)) $anyo = date('Y', strtotime('+1 year'));

    $fechaActual = new DateTime();
    $fechaCumple = new DateTime($anyo . '-' . $mes . '-' . $dia);
    $diferencia = $fechaCumple->diff($fechaActual);
    $cumple = $diferencia->format('%a días, %H horas, %i minutos y %s segundos');
    echo "Te quedan $cumple para tu cumpleaños";
}
*/

	?>

 </body>

</html>
