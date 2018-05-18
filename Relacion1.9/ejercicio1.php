<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <style media="screen">
      #formulario { border: 2px solid lightblue;}
      h1 {color: blue;}
    </style>
  </head>
  <body>
    <div name="ocultar" >
      <h1>Subida de ficheros</h1>
      <h3>Insertar nueva noticia</h3>
      <div id="formulario">
      <form method="post">
        <table>
          <tr>
            <td style="width: 140px;">Título: *</td>
            <td><input type="text" name="titulo"/></td>
          </tr>
          <tr>
            <td style="width: 140px;">Texto: *</td>
            <td><textarea name="texto" rows="8" cols="80"></textarea></td>
          </tr>
          <tr>
            <td style="width: 140px;">Categoría:</td>
            <td><select name="categoria">
                  <option value="promociones">Promociones</option>
                  <option value="noticias">Noticias</option>
                </select>
            </td>
          </tr>
          <tr>
            <td style="width: 140px;">Imagen:</td>
            <td><input type="file" name="imagen"/></td>
          </tr>
          <tr>
            <td><input type="submit" value="Insertar noticia"></td>
          </tr>
        </table>
      </form>
    </div>
  </div>

  <?php

    /*1. Realiza un formulario en una página llamada ejercicio1.php.
    Al pulsar el botón “Insertar noticia” debe llevarte a la misma página y comprobar que los valores obligatorios
    no están vacíos, si alguno de ellos está vacío deberá mostrar en la página los errores producidos y mostrarle
    un enlace para volver al formulario:
    Si no hay errores debes guardar el fichero de imagen en una carpeta img que previamente debes haber creado
    dentro del mismo directorio que contiene la página ejercicio1.php y mostrar después los datos insertados. En
    el nombre del fichero debe poner un enlace de manera que al pulsarlo se muestre dicho fichero, así:
    */

    $titulo = isset($_POST['titulo']);
    $texto = isset($_POST['texto']);
    $categoria = isset($_POST['categoria']);
    $imagen = isset($_FILES['imagen']);
    print_r($_FILES);

    class Noticia {
      var $titulo;
      var $texto;
      var $categoria;
      var $imagen;

      function noticia($titulo="none", $texto="none", $categoria="none", $imagen="none"){
        $this->target_dir = "images/";
        $this->titulo = $titulo;
        $this->texto = $texto;
        $this->categoria = $categoria;
        $this->imagen = $imagen;
      }

      function error(){
        echo '<h1>Subida de ficheros. Resultados del formulario</h1>';
        echo '<h3>Resultado de la inserción de una nueva noticia</h3>';
        echo '<p>No se ha podido realizar la noticia debido a los siguientes errores:</p>';
        echo '<ul>';
        if (($this->titulo == "none") && ($this->texto == "none")){
          echo '<li>No has introducido título para la noticia</li>';
          echo '<li>No has introducido un texto para la noticia</li>';
        }
        if (($this->titulo == "none") && ($this->texto != "none")) {
          echo '<li>No has introducido título para la noticia</li>';
        }
        if (($this->titulo != "none") && ($this->texto == "none")) {
          echo '<li>No has introducido un texto para la noticia</li>';
        }
        echo '</ul>';
      }

      function sinError(){
        echo '<h1>Subida de ficheros. Resultados del formulario</h1>';
        echo '<h3>Resultado de la inserción de una nueva noticia</h3>';
        echo '<p>La noticia ha sido recibida correctamente:</p>';
        echo '<ul>';
        echo '<li>Título: '.$this->titulo.'</li>';
        echo '<li>Texto: '.$this->texto.'</li>';
        echo '<li>Categoría: '.$this->categoria.'</li>';
        echo '<li>Imagen: <a href="images/'.$this->imagen["name"].'">Abrir imágen</a></li>';
      }

      function cargarImagen() {
        $target_file = $this->target_dir.basename($this->imagen["name"]);
        move_uploaded_file($this->imagen["tmp_name"], $target_file);
      }

    }


    if (($titulo == '') && ($texto == '')) {
        $bar = new Noticia();
        $bar -> error();
      } elseif ($titulo == '') {
        $bar = new Noticia('none',$texto);
        $bar -> error();
      } elseif ($texto == '') {
        $bar = new Noticia($titulo,'none');
        $bar -> error();
      } elseif ($imagen != '') {
        $bar = new Noticia($titulo, $texto, $categoria, $imagen);
        $bar -> sinError();
        $bar -> cargarImagen();
      } else {
        $bar = new Noticia($titulo, $texto, $categoria, $imagen);
        $bar -> sinError();
      }


   ?>

  </body>
</html>
