<?php
include_once 'database.php';

class producto
{
    private $pdo;

    public $producto_cod;
    public $producto_nombre;
    public $producto_nombrecorto;
    public $producto_descripcion;
    public $producto_pvp;
    public $producto_familia;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM producto");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($producto_cod)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM producto WHERE producto_cod = ?");


            $stm->execute(array($producto_cod));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($producto_cod)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM producto WHERE producto_cod = ?");

            $stm->execute(array($producto_cod));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE producto SET
						producto_nombre          = ?,
						producto_nombrecorto        = ?,
                        producto_descripcion        = ?,
                        producto_pvp        = ?,
                        producto_familia     = ?

				    WHERE producto_cod = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->producto_nombre,
                        $data->producto_nombrecorto,
                        $data->producto_descripcion,
                        $data->producto_pvp,
                        $data->producto_familia,
                        $data->producto_cod
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(producto $data)
    {
        try {
            $sql = "INSERT INTO producto (producto_nombre,producto_nombrecorto,producto_descripcion,producto_pvp,producto_familia)
		        VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->producto_nombre,
                        $data->producto_nombrecorto,
                        $data->producto_descripcion,
                        $data->producto_pvp,
                        $data->producto_familia

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>
