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

    $movies = array(
      "Barça" => array("Messi", "Luis Suarez", "Paulinho"),
      "Madrid" => array("Ronaldo", "Bale", "Isco"),
      "Atleti" => array("Griezzman", "Torres", "Gabi", "Coke"),
      "2DAW" => array("Pablo", "Fran", "Manolo")
    );

   function imprimir($a){
    foreach ($a as $k => $v) {
        echo $k, ':<br>';
        imprimirValores($v);
        echo '<br><br>';
    }
  }

  function imprimirValores($a){
      foreach ($a as $k => $v){
          echo $v;
          echo '<br>';
          }
  }

  imprimir($movies);

   ?>

 </body>

</html>
