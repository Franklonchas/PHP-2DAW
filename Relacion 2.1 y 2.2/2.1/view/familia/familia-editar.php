<h1 class="page-header">
    <?php echo $familia->familia_cod != null ? $familia->familia_nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
    <li><a href="?c=familia">familia</a></li>
    <li class="active"><?php echo $familia->familia_cod != null ? $familia->familia_nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=familia&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="cod" value="<?php echo $familia->familia_cod; ?>"/>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $familia->familia_nombre; ?>" class="form-control"
               placeholder="Ingrese su nombre" required>
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