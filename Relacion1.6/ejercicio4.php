<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio4</title>
 </head>
 <body>

   <?php

   $opinion = $_REQUEST['comentario'];

   $archivo="libroVisitas.txt";
   $file=@fopen($archivo,"a");
   fwrite($file,$opinion."\r\n");    //poner el \r\n con comillas DOBLES
   fclose($file);
   echo 'Se ha guardado el comentario en el libro de visitas';

   ?>



 </body>

</html>
