<?php

  session_start();
  $_SESSION['nombre'] = $_POST['nombre'];

  /* Si no hay una sesión creada, redireccionar al index.*/
    if(empty($_SESSION['nombre'])) {
        header('Location: ejercicioB.html');
    }

  echo session_status();

    class Datos{
        var $username;
        var $comentario;

        function Datos($username, $comentario) {
          $this->nick = $username;
          $this->comentario = $comentario;
        }
      }

      class DB {
        var $query;
        var $servername;
        var $usuario;
        var $pwd;
        var $dbname;
        var $conexion;

        function DB () {
          $this->servername = "localhost";
          $this->usuario = 'root';
          $this->pwd = '1331Ap1331';
          $this->query;
          $this->dbname = 'librovisitas';
          $this->conexion;
        }

        function conectar() {
          $this->conexion = new PDO ("mysql:dbname=$this->dbname;host=$this->servername", $this->usuario, $this->pwd);
          $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        }

        function updateDB($username, $comentario) {
          $this->query = "INSERT INTO visitas (Usuario, Comentario) VALUES (:nick, :comentario)";
          $instruccion = $this->conexion->prepare($this->query);
          $instruccion->bindParam(':nick', $username);
          $instruccion->bindParam(':comentario', $comentario);
          $instruccion->execute();
        }
      }


      class controlador {
        var $vista;
        var $DB;
        var $visita;

        function controlador() {
          $this->BD = new DB();
          $this->vista = new Vista($this);
          $this->visita;
          $this->BD -> conectar();
        }

        function nuevavisita ($username, $comentario) {
          $this->visita = new Datos($username, $comentario);
          $this->BD -> updateDB($this->visita -> nick, $this->visita -> comentario);
        }

        function mostrar() {
          $this->vista -> show();
        }
      }


      class Vista {
        var $controlador;

        function Vista($controlador) {
          $this->controlador = $controlador;
        }

        function show() {
          $sql = "SELECT * from visitas";
          $stm = $this->controlador->BD->conexion->prepare($sql);
          $stm->execute();
          echo '<table border="1">';
          foreach ($stm as $row){
            echo '<tr width="50px" heigth="20px"><td>'.$row[0].'</td><td>'.$row[1].'</td></tr>';
          }
          echo '</table>';
        }

      }

    $username = @$_REQUEST['nombre'];
    $comentario = @$_REQUEST['comentario'];

   if (($username != '') && ($comentario != '')) {
     $var = new controlador();
     $var -> nuevavisita($username, $comentario);
     $var -> mostrar();
   }

  ?>
