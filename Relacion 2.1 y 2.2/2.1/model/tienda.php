<?php
include_once 'database.php';

class tienda
{
    private $pdo;

    public $tienda_cod;
    public $tienda_nombre;
    public $tienda_tlf;

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

            $stm = $this->pdo->prepare("SELECT * FROM tienda");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($tienda_cod)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM tienda WHERE tienda_cod = ?");


            $stm->execute(array($tienda_cod));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($tienda_cod)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM tienda WHERE tienda_cod = ?");

            $stm->execute(array($tienda_cod));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE tienda SET
						tienda_nombre = ?,
						tienda_tlf = ?

				    WHERE tienda_cod = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->tienda_cod,
                        $data->tienda_nombre,
                        $data->tienda_tlf
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(tienda $data)
    {
        try {
            $sql = "INSERT INTO tienda (tienda_nombre,tienda_tlf)
		        VALUES (?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->tienda_nombre,
                        $data->tienda_tlf
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>
