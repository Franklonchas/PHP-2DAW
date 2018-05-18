<h1 class="page-header">Tienda proyecto</h1>


<a class="btn btn-primary pull-right" href="?c=stock&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
    <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Stock de producto</th>
        <th style="width:180px; background-color: #5DACCD; color:#fff">Stock de tienda</th>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Stock de unidades</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->stock_cod; ?></td>
            <td><?php echo $r->stock_nombre; ?></td>
            <td>
                <a class="btn btn-warning" href="?c=stock&a=Crud&id=<?php echo $r->stock_cod; ?>">Editar</a>
            </td>
            <td>
                <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
                   href="?c=stock&a=Eliminar&cod=<?php echo $r->stock_cod; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<label for="buscador">Buscar stock: </label>
<input type="text" id="buscador" name="buscador">

<a class="btn btn-success" href="?c=stock&a=Obtener&cod=<?php echo $r->stock_cod; ?>">Buscar</a>

</body>
<script src="assets/js/datatable.js">

</script>


</html>