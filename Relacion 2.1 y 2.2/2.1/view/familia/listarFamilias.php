<?php
include '../header.php';
$selection=$_POST['select'];

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dbtiendas;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
	

/*foreach($pdo->query('SELECT familia_cod	familia_nombre FROM familia') as $row) {
  echo '<option value="'.$row['familia_cod'].'">'.$row['familia_nombre'].'<option/>';
}*/
echo '<h1>Categoria Familia: '.$selection.'</h1>';
echo"<div class='table-responsive'> ";
echo '<table class="table">';
foreach($pdo->query('SELECT producto_nombrecorto,producto_descripcion,producto_pvp FROM producto where producto_familia="'.$selection.'"') as $row) {
	echo"<tr>";
		echo '<td> '.$row['producto_nombrecorto'].'"</td><td> '.$row['producto_descripcion'].'"</td><td>'.$row['producto_pvp'].'</td>';
	echo"</tr>";
}


echo '</table>';
echo '</div>';
?>

</body>



</html>
