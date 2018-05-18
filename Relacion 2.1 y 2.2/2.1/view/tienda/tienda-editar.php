<h1 class="page-header">
    <?php echo $tienda->tienda_cod != null ? $tienda->tienda_nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=tienda">tienda</a></li>
    <li class="active"><?php echo $tienda->tienda_cod != null ? $tienda->tienda_nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=tienda&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="cod" value="<?php echo $tienda->tienda_cod; ?>"/>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $tienda->tienda_nombre; ?>" class="form-control"
               placeholder="Ingrese su nombre" required>
    </div>
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="tlf" value="<?php echo $tienda->tienda_tlf; ?>" class="form-control"
               placeholder="Ingrese el telefono">
    </div>


    <hr/>

    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function () {
        $("#frm-alumno").submit(function () {
            return $(this).validate();
        });
    })
</script>