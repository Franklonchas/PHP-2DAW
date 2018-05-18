<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Ejercicio A</title>

  <style media="screen">
  #boton {
    margin-left: 200px;
  }

  .tabla {
    padding: 2%;
  }

  </style>
 </head>
 <body>

<div>
   <form method="post" />
   <table>
     <tr>
       <td>Nombre</td>
       <td><input type="text" name="nombre" value=""></td>
     </tr>
     <tr>
       <td>Apellidos</td>
       <td><input type="text" name="apellidos" value=""></td>
     </tr>
     <tr>
       <td>Email</td>
       <td><input type="text" name="email" value=""></td>
     </tr>
     <tr>
       <td>Telefono</td>
       <td><input type="text" name="telefono" value=""></td>
     </tr>
     <tr>
       <td>Tutor</td>
       <td><input type="text" name="tutor" value=""></td>
     </tr>
     <tr>
       <td>Grupo</td>
       <td><input type="text" name="grupo" value=""></td>
     </tr>
     <tr>
       <td>FechaDeInicio</td>
       <td><input type="text" name="fecha" value=""></td>
     </tr>
     <tr>
       <td>IdEstudiante</td>
       <td><input type="text" name="id" value=""></td>
     </tr>
   </table>

     <br>
     <input id="boton" type="submit" value="Enviar">
     <br>
     <br>


     </form>
</div>

  <?php

  $nombre = @$_POST['nombre'];
  $apellidos = @$_POST['apellidos'];
  $email = @$_POST['email'];
  $telefono = @$_POST['telefono'];
  $tutor = @$_POST['tutor'];
  $grupo = @$_POST['grupo'];
  $fecha = @$_POST['fecha'];
  $id = @$_POST['id'];
  $query = '';


  class Modelo{
      var $nombre;
      var $apellidos;
      var $email;
      var $telefono;
      var $tutor;
      var $grupo;
      var $fecha;
      var $id;

      function Modelo($nombre, $email, $telefono, $tutor, $grupo, $fecha, $id, $apellidos) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->tutor = $tutor;
        $this->grupo = $grupo;
        $this->fecha = $fecha;
        $this->id = $id;

      }
    }

    class ModeloBD {
      var $query;
      var $servername;
      var $usuario;
      var $pwd;
      var $dbname;
      var $con;

      function ModeloBD () {
        $this->servername = "localhost";
        $this->usuario = 'root';
        $this->pwd = 'root';
        $this->query;
        $this->dbname = 'instituto';
        $this->con;
      }

      function conectar() {
        $this->con = new PDO ("mysql:dbname=$this->dbname;host=$this->servername", $this->usuario, $this->pwd);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      }

      function modificarBD($controlador) {
        $this->query = "INSERT INTO estudiante (Nombre, Apellidos, Email, Telefono, Tutor, Grupo, FechaDeInicio, IdEstudiante) VALUES (:nombre, :apellidos, :email, :telefono, :tutor, :grupo, :fecha, :id)";
        $sentencia = $this->con->prepare($this->query);
        $sentencia->bindParam(':nombre', $controlador->alumno->nombre);
        $sentencia->bindParam(':apellidos', $controlador->alumno->apellidos);
        $sentencia->bindParam(':email', $controlador->alumno->email);
        $sentencia->bindParam(':telefono', $controlador->alumno->telefono);
        $sentencia->bindParam(':tutor', $controlador->alumno->tutor);
        $sentencia->bindParam(':grupo', $controlador->alumno->grupo);
        $sentencia->bindParam(':fecha', $controlador->alumno->fecha);
        $sentencia->bindParam(':id', $controlador->alumno->id);
        $sentencia->execute();
      }

    }


    class Controlador {
      var $vista;
      var $BD;
      var $alumno;

      function Controlador() {
        $this->BD = new ModeloBD();
        $this->vista = new Vista($this);
        $this->alumno;
        $this->BD -> conectar();
      }

      function nuevoAlumno ($nombre, $email, $telefono, $tutor, $grupo, $fecha, $id, $apellidos) {
        $this->alumno = new Modelo($nombre, $email, $telefono, $tutor, $grupo, $fecha, $id, $apellidos);
        $this->BD -> modificarBD($this);
      }

      function mostrarDatos() {
        $this->vista -> nombreYapellidos();
        $this->vista -> tabla();

      }

    }

    //VISTA --------------------------------------------------

    class Vista {
      var $controlador;

      function Vista($controlador) {
        $this->controlador = $controlador;
      }

      function nombreYapellidos() {
        $sql = "SELECT * from estudiante";
        $stm = $this->controlador->BD->con->prepare($sql);
        $stm->execute();
        foreach ($stm as $row){
          echo 'Nombre: '.$row[0].' - Apellidos: '.$row[1];
          echo '<br>';
        }
        echo '<br>';
      }

      function tabla() {
        $sql = "SELECT * from estudiante ORDER BY Apellidos";
        $stm = $this->controlador->BD->con->prepare($sql);
        $stm->execute();
        echo "<table>";
        echo '<tr id="titulos">
               <td>Nombre</td>
               <td>Apellidos</td>
               <td>Email</td>
               <td>Telefono</td>
               <td>Tutor</td>
               <td>Grupo</td>
               <td>FechaDeInicio</td>
               <td>IdEstudiante</td>
             </tr>';
        foreach ($stm as $row){
          echo '<tr class="tabla">
                 <td>'.$row[0].'</td>
                 <td>'.$row[1].'</td>
                 <td>'.$row[2].'</td>
                 <td>'.$row[3].'</td>
                 <td>'.$row[4].'</td>
                 <td>'.$row[5].'</td>
                 <td>'.$row[6].'</td>
                 <td>'.$row[7].'</td>
               </tr>';
        }
        echo '</table>';
      }
    }

    if (($nombre != '') && ($apellidos != '') && ($email != '') && ($telefono != '') && ($tutor != '') && ($grupo != '') && ($fecha != '') && ($id != '')) {
      $bar = new Controlador();
      $bar -> nuevoAlumno($nombre, $email, $telefono, $tutor, $grupo, $fecha, $id, $apellidos);
      $bar -> mostrarDatos();
    }

  ?>

 </body>

</html>
