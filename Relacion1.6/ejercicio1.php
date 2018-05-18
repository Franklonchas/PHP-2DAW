<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio 1</title>
 </head>
 <body>

   <!-- Ejercicio 1
   Crea un formulario que solicite el nombre, el apellido y el teléfono móvil del usuario. Crea un script php
   que guarde esta información en un fichero (‘agenda.txt’). -->


  <form method="post" />

    <p>Nombre: <input type="text" name="nombre"/>
    <p>Apellidos: <input type="text" name="apellidos"/>
    <p>Teléfono móvil: <input type="text" name="movil"/>

    <p><input type="submit" value="Comprobar el formulario">
       <input type="reset" value="borrar todo">
    </p>

  </form>


  <?php

    $nombre="";
    if (!empty($_POST['nombre'])){
    $nombre=$_POST['nombre'];
    }

    $apellidos="";
    if (!empty($_POST['apellidos'])){
    $apellidos=$_POST['apellidos'];
    }

    $movil="";
    if (!empty($_POST['movil'])){
    $movil=$_POST['movil'];
    }


    $archivo="datos.txt";

    $file=@fopen($archivo,"a");
    fwrite($file,$nombre.'-'.$apellidos.'-'.$movil."\r\n");
    fclose($file);

  ?>


 </body>

</html>
