<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio2</title>
 </head>
 <body>

	<?php

  //EJERCICIO 1

  // Apartado a)

     function calcula_extension ($fichero)
     {
        $extension = stristr ($fichero, '.');
        $extension = ltrim ($extension, '.');
        $extension = strtoupper ($extension);
        return ($extension);
     }

  // Apartado b)

     function tipo_fichero ($extension)
     {
        if ($extension == 'PDF')
           $tipo = 'Documento Adobe PDF';
        else if ($extension == 'TXT')
           $tipo = 'Documento de texto';
        else if ($extension == 'HTML' || $extension == 'HTM')
           $tipo = 'Documento HTML';
        else if ($extension == 'PPT')
           $tipo = 'Presentación Microsoft Powerpoint';
        else if ($extension == 'DOC')
           $tipo = 'Documento Microsoft Word';
        else if ($extension == 'GIF')
           $tipo = 'Imagen GIF';
        else if ($extension == 'JPG')
           $tipo = 'Imagen JPG';
        else if ($extension == 'ZIP')
           $tipo = 'Archivo comprimido ZIP';
        else
           $tipo = "Archivo " . $extension;
        return ($tipo);
     }

    //Dibujando en pantalla

    $fichero = 'curriculum.pdf';
    $ext = calcula_extension($fichero);
    $tipo = tipo_fichero($ext);

    echo '<h1>Manejo de cadenas</h1>';
    echo '<h2>Ejemplo 1</h2>';
    echo 'El fichero '.$fichero.' es de tipo '.$tipo;


	?>

 </body>

</html>
