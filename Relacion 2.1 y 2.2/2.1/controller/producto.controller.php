<?php
require_once 'model/producto.php';

class productoController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new producto();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';

    }

    public function Crud()
    {
        $producto = new producto();

        if (isset($_REQUEST['cod'])) {
            $producto = $this->model->Obtener($_REQUEST['cod']);
        }

        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';

    }

    public function Guardar()
    {
        $producto = new producto();

        $producto->producto_cod = $_REQUEST['cod'];
        $producto->producto_nombre = $_REQUEST['nombre'];
        $producto->producto_nombrecorto = $_REQUEST['nombrecorto'];
        $producto->producto_descripcion = $_REQUEST['descripcion'];
        $producto->producto_pvp = $_REQUEST['pvp'];
        $producto->producto_familia = $_REQUEST['familia'];


        $producto->producto_cod > 0
            ? $this->model->Actualizar($producto)
            : $this->model->Registrar($producto);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['cod']);
        header('Location: index.php');
    }

}