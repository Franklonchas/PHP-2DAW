<?php

  echo 'La cadena a buscar es '.($_POST['cadena']);
  echo '<br>';
  echo 'El sexo del usuario es '.$_REQUEST['sexo'];
  echo '<br>';

  $lugar = $_REQUEST['lugar'];
  if (is_array($lugar) || is_object($lugar)){
    foreach ($lugar as $sitio){
        echo 'Ha marcado la casilla '.$sitio;
        echo '<br>';
    }
  }

  echo 'La contraseña introducida es '.$_REQUEST['password'];
  echo '<br>';
  echo 'El usuario ha seleccionado '.$_REQUEST['color'];
  echo '<br>';

  $idiomas = $_REQUEST['idioma'];
  if (is_array($idiomas) || is_object($idiomas)){
    foreach ($idiomas as $idioma){
      echo "El usuario ha seleccionado estos idiomas ".$idioma;
      echo '<br>';
    }
  }

  echo 'En el comentario ha introducido lo siguiente: '.$_REQUEST['comentario'];


  ?>
