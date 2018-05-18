<html>
<head>
	<meta charset="UTF-8">
	<meta name="Generator" content="EditPlus®">
	<meta name="Author" content="">
	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<title>Ejercicio 4</title>
	<style>

	h1 {color: blue;}
	table {background-color: #FEFECC;}
	th { background-color: #C3C;}
	#viajes td {width: 120px; height: 20px;}

	</style>
</head>
<body>

	<h1>Agencia de viaje travelmas</h1>

	</form>

	<form method="post" />
		<table border="1">
			<tr>
				<td>Introduzca el nombre del circuito</td>
				<td><input type="text" name="nombre"/></td>
			</tr>
			<tr>
				<td>Introduzca el destino</td>
				<td><input type="text" name="destino"/></td>
			</tr>
			<tr>
				<td>Introduzca la duración</td>
				<td><input type="text" name="duracion"/></td>
			</tr>
			<tr>
				<td>Introduzca el dia salida</td>
				<td><input type="text" name="dias"/></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
			</tr>
		</table>
	</form>

		<?php

		/*Realiza una pequeña aplicación para una agencia de viajes llamada TRAVELMAS. Esta aplicación
			consistirá en un formulario como el que aparece a continuación en el que el vendedor introduce los
			destinos. Si ya hay destinos incluidos en la misma página aparecerá un listado de los mismos. Los
			destinos se guardan en un fichero llamado viajes.txt separando los campos por ":". Así en el
			momento que se refleja en la figura el fichero sería:
			Gran Turqia:turquia:24 dias:lunes
			Abu Simbel:Egipto:8días:martes,miércoles
			Al enviar se añadirá una fila al fichero y se mostrará en la tabla un destino más*/

			//EJERCICIO CON CLASES

			echo "<table border='1'>";
  		echo '<tr id="titulos"><th>nombre</th><th>destino</th><th>duración</th><th>salida</th></tr>';

			$nombre = @$_POST['nombre'];
	    $destino = @$_POST['destino'];
	    $duracion = @$_POST['duracion'];
	    $dias = @$_POST['dias'];

	    class Fila{
	        var $nombre;
	        var $destino;
	        var $duracion;
	        var $dias;

	        function Fila($nombre,$destino,$duracion,$dias){
	          $this->nombre=$nombre;
	          $this->destino=$destino;
	          $this->duracion=$duracion;
	          $this->dias=$dias;
	        }

	        function escribe(){
	          $escribir = $this->nombre.' '.$this->destino.' '.$this->duracion.' '.$this->dias.' ';
	          $archivo = fopen("viajes.txt",'a');
	          if (($this->nombre != '') && ($this->destino != '') && ($this->duracion != '') && ($this->dias != '')) {
	            fputs($archivo, $escribir."\r\n");
	          }
	          fclose($archivo);
	        }

	        function muestra_contenido(){
	          $archivo = fopen("viajes.txt",'r');
	          while ($linea = fgets($archivo)) {
	              $partes = explode(" ",$linea);
	              echo '<tr class="partes">
	                     <td>'.$partes[0].'</td>
	                     <td>'.$partes[1].'</td>
	                     <td>'.$partes[2].'</td>
	                     <td>'.$partes[3].'</td>
	                   </tr>';
	          }
	          echo '</table>';
	        }
	      }


	      $bar = new Fila($nombre, $destino, $duracion, $dias);
	      $bar -> escribe();
	      $bar -> muestra_contenido();


			//EJERCICIO SIN CLASES

			// //CREACIÓN FICHERO DE DATOS
			// $nombre = @$_POST['nombre'];	//Con @ antes de recoger los datos, evitamos el primer erro al estar el campo vacío
			// $destino = @$_POST['destino'];
			// $duracion = @$_POST['duracion'];
			// $salida = @$_POST['salida'];
      //
		 	// $archivo = "viajes.txt";
      //
			// $file=fopen($archivo,"a");
			// if ($nombre != '') {	//Comprobamos que no se han introducido datos vacíos.
			// 	fwrite($file, $nombre.':'.$destino.':'.$duracion.':'.$salida."\r\n");
			// }
			// fclose($file);
      //
			// //CREACIÓN TABLA
			// $file = fopen('viajes.txt', 'r');
      //
			// echo '<table id="viajes" border="1">';
			// echo '<tr><th>Nombre</th><th>Destino</th><th>Duracion</th><th>Salida</th></tr>';
		  // while (!feof($file)){	//Lee un fichero linea a linea
			// 	$linea = fgets($file).'<br>';
			// 	$lista = explode(":", $linea); //Convierte la línea en un array
			// 	echo '<tr>';
			// 	for ($i=0; $i < count($lista); $i++) {
			// 		echo '<td>'.$lista[$i].'</td>';
			// 	}
			// 	echo '</tr>';
		  // }
			// echo '</table>';

			?>

	</body>

</html>
