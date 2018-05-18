<?php
require_once 'model/stock.php';

class stockController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new stock();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/stock/stock.php';

    }

    public function Crud()
    {
        $stock = new stock();

        if (isset($_REQUEST['cod'])) {
            $stock = $this->model->Obtener($_REQUEST['cod']);
        }

        require_once 'view/header.php';
        require_once 'view/stock/stock-editar.php';

    }

    public function Guardar()
    {
        $stock = new stock();

        $stock->stock_cod = $_REQUEST['cod'];
        $stock->stock_nombre = $_REQUEST['nombre'];
        $stock->stock_nombrecorto = $_REQUEST['nombrecorto'];
        $stock->stock_descripcion = $_REQUEST['descripcion'];
        $stock->stock_pvp = $_REQUEST['pvp'];
        $stock->stock_stock = $_REQUEST['stock'];


        $stock->stock_cod > 0
            ? $this->model->Actualizar($stock)
            : $this->model->Registrar($stock);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['cod']);
        header('Location: index.php');
    }

    public function Obtener()
    {
        $this->model->Obtener($_REQUEST['buscador']);
    }
}