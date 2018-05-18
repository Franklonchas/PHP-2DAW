<?php
include_once 'database.php';

class stock
{
    private $pdo;

    public $stock_producto;
    public $stock_tienda;
    public $stock_unidades;

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

            $stm = $this->pdo->prepare("SELECT * FROM stock");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($stock_producto)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM stock WHERE stock_producto = ?");


            $stm->execute(array($stock_producto));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($stock_producto)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM stock WHERE stock_producto = ?");

            $stm->execute(array($stock_producto));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE stock SET
						stock_producto = ?,
						stock_tienda = ?,
						stock_unidades = ?

				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->stock_producto,
                        $data->stock_tienda,
                        $data->stock_unidades
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(stock $data)
    {
        try {
            $sql = "INSERT INTO stock (stock_producto,stock_tienda,stock_unidades)
		        VALUES (?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->stock_nombre,
                        $data->stock_tienda,
                        $data->stock_unidades
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>
