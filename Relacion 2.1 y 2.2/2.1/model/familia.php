<?php
include_once 'database.php';

class familia
{
    private $pdo;

    public $familia_cod;
    public $familia_nombre;


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

            $stm = $this->pdo->prepare("SELECT * FROM familia");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($familia_cod)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM familia WHERE familia_cod = ?");


            $stm->execute(array($familia_cod));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($familia_cod)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM familia WHERE familia_cod = ?");

            $stm->execute(array($familia_cod));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE familia SET
						familia_nombre          = ?,

				    WHERE (familia_cod) = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->familia_nombre,
                        $data->familia_cod
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(familia $data)
    {
        try {
            $sql = "INSERT INTO familia (familia_nombre)
		        VALUES (?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->familia_nombre,

                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>
