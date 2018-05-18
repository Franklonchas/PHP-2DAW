<?php 
include '../header.php';
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dbtiendas;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

echo '<h1>Categoria Familia</h1>';
echo '<form method="post" action="listarFamilias.php">';
echo '<select name="select">';
foreach($pdo->query('SELECT familia_cod,familia_nombre FROM familia') as $row) {
  echo '<option value="'.$row['familia_nombre'].'">'.$row['familia_nombre'].'<option/>';
}
echo '</select><input type="submit"</input>';

echo '</form>';
?>

</body>



</html>