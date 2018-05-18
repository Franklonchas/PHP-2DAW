<?php
require_once 'model/familia.php';

class familiaController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new familia();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/familia/familia.php';

    }

    public function Crud()
    {
        $familia = new familia();

        if (isset($_REQUEST['cod'])) {
            $familia = $this->model->Obtener($_REQUEST['cod']);
        }

        require_once 'view/header.php';
        require_once 'view/familia/familia-editar.php';

    }

    public function Guardar()
    {
        $familia = new familia();

        $familia->familia_cod = $_REQUEST['cod'];
        $familia->familia_nombre = $_REQUEST['nombre'];


        $familia->familia_cod > 0
            ? $this->model->Actualizar($familia)
            : $this->model->Registrar($familia);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['cod']);
        header('Location: index.php');
    }

}