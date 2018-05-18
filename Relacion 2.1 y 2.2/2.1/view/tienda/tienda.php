<h1 class="page-header">Categoria Tienda</h1>


<a class="btn btn-primary pull-right" href="?c=tienda&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
    <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Código de Tienda</th>
        <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre de Tienda</th>
        <th style="width:180px; background-color: #5DACCD; color:#fff">Teléfono de Tienda</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->tienda_cod; ?></td>
            <td><?php echo $r->tienda_nombre; ?></td>
            <td><?php echo $r->tienda_tlf; ?></td>
            <td>
                <a class="btn btn-warning" href="?c=tienda&a=Crud&cod=<?php echo $r->tienda_cod; ?>">Editar</a>
            </td>
            <td>
                <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
                   href="?c=tienda&a=Eliminar&cod=<?php echo $r->tienda_cod; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<label for="buscador">Buscar tienda: </label>
<input type="text" id="buscador" name="buscador">

<a class="btn btn-success" href="?c=tienda&a=Obtener&buscador=<?php echo $r->tienda_cod; ?>">Buscar</a>


</body>
<script src="assets/js/datatable.js">

</script>


</html>