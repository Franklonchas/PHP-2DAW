<br>
<h1 class="page-header">Productos</h1>
<br>

<a class="btn btn-success pull-right" href="?c=producto&a=Crud">Agregar</a>
<br><br><br>

<table class="table table-bordered table-striped  table-hover" id="tabla">
    <thead>
    <tr class="table-primary">
        <th style="width:120px;">Código de Producto</th>
        <th style="width:180px;">Nombre del Producto</th>
        <th>Nombre abreviado</th>
        <th>Descripción</th>
        <th>PVP</th>
        <th>Familia</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->producto_cod; ?></td>
            <td><?php echo $r->producto_nombre; ?></td>
            <td><?php echo $r->producto_nombrecorto; ?></td>
            <td><?php echo $r->producto_descripcion; ?></td>
            <td><?php echo $r->producto_pvp; ?></td>
            <td><?php echo $r->producto_familia; ?></td>
            <td>
                <a class="btn btn-warning" href="?c=producto&a=Crud&cod=<?php echo $r->producto_cod; ?>">Editar</a>
            </td>
            <td>
                <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
                   href="?c=producto&a=Eliminar&cod=<?php echo $r->producto_cod; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
<script src="assets/js/datatable.js">

</script>


</html>