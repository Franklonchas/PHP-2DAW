<?php

/*2. Crea un Formulario como el siguiente (llama a la página ejercicio2.php) Al pulsar sobre el botón Buscar
  debe llevar a la página ejercicio1-resultados.php en la que se debe mostrar lo que ha introducido el
  2 usuario en el formulario y un botón que permita volver a la página de búsqueda.
  Suponiendo que el usuario ha buscado el texto “best” en el “Nombre de álbum “ debería
  mostrar algo así:
  realiza una página llamada ejercicio3.php. Al enviar el formulario envíalo a la propia página y
  comprueba que el texto a buscar no está vacío, si lo está muestra una advertencia en rojo en el
  propio formulario.*/

  $titulo = @$_POST['titulo'];
  $busqueda = @$_POST['contact'];
  $genero = @$_POST['genero'];


  class Canciones{
      var $titulo;
      var $busqueda;
      var $genero;


      function Canciones($titulo=null,$busqueda=null,$genero=null){
        $this->titulo=$titulo;
        $this->busqueda=$busqueda;
        $this->genero=$genero;
      }

      function mostrarError() {
        $dom = new DOMDocument();
        $dom->loadHTMLFile("ejercicio2.html");
        $element = $dom->getElementById('contenedor');
        $element->nodeValue = '¡Debe introducir el texto de búsqueda!';
        echo $dom->saveHTML();
      }

      function correcto() {
        $dom = new DOMDocument();
        $dom->loadHTMLFile('ejercicio2-1.html');
        $texto = $dom->getElementById('texto');
        $bus = $dom->getElementById('bus');
        $gen = $dom->getElementById('gen');
        $texto->nodeValue = 'Texto de búsqueda: '.$this->titulo;
        $bus->nodeValue = 'Buscar en album: '.$this->busqueda;
        $gen->nodeValue = 'Género: '.$this->genero;
        echo $dom->saveHTML();
      }
    }

    if ($titulo == '') {
      $bar = new Canciones($titulo, $busqueda, $genero);
      $bar->mostrarError();
    } else {
      $bar = new Canciones($titulo, $busqueda, $genero);
      $bar->correcto();
    }



  ?>
