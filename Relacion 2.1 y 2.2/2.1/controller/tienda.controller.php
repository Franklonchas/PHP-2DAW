<?php
require_once 'model/tienda.php';

class tiendaController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new tienda();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/tienda/tienda.php';

    }

    public function Crud()
    {
        $tienda = new tienda();

        if (isset($_REQUEST['cod'])) {
            $tienda = $this->model->Obtener($_REQUEST['cod']);
        }

        require_once 'view/header.php';
        require_once 'view/tienda/tienda-editar.php';

    }

    public function Guardar()
    {
        $tienda = new tienda();

        $tienda->tienda_cod = $_REQUEST['cod'];
        $tienda->tienda_nombre = $_REQUEST['nombre'];
        $tienda->tienda_tlf = $_REQUEST['tlf'];


        $tienda->tienda_cod > 0
            ? $this->model->Actualizar($tienda)
            : $this->model->Registrar($tienda);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['cod']);
        header('Location: index.php');
    }


}