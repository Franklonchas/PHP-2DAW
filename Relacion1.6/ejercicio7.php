<?php

/*7.    Crea  un  script  calculadora,  de  modo  que  el  usuario  envíe  dos
números  y  elija  una  operación  (suma, resta, multiplicación o división) a realizar. */

if ($_POST ["num1"] !="" and $_POST ["num2"]!=""){
  if ($_POST["operador"] == "suma") {
    print ($resultado = $_POST ["num1"] + $_POST ["num2"]);
    print ('<br /><a href="ejercicio7.html">Volver</a>');
  }
  elseif ($_POST["operador"] == "resta") {
    print ($resultado = $_POST ["num1"] - $_POST ["num2"]);
    print ('<br /><a href="ejercicio7.html">Volver</a>');
  }
  elseif ($_POST["operador"] == "multiplicacion") {
    print ($resultado = $_POST ["num1"] * $_POST ["num2"]);
    print ('<br /><a href="ejercicio7.html">Volver</a>');
  }
  elseif ($_POST["operador"] == "division") {
    print ($resultado = $_POST ["num1"] / $_POST ["num2"]);
    print ('<br /><a href="ejercicio7.html">Volver</a>');
  }
}

else {
  print("Ingresa alg&uacute;n valor");
  print ('<br /><a href="calculadora.php">Volver</a>');
}

?>
