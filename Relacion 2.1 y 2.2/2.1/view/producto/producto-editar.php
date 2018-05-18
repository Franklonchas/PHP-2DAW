<h1 class="page-header">
    <?php echo $producto->producto_cod != null ? $producto->producto_nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto">Producto</a></li>
  <li class="active"><?php echo $producto->producto_cod != null ? $producto->producto_nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=producto&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="cod" value="<?php echo $producto->producto_cod; ?>" />
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $producto->producto_nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>Nombre corto</label>
        <input type="text" name="nombrecorto" value="<?php echo $producto->producto_nombrecorto; ?>" class="form-control" placeholder="Ingrese su nombre corto" required>
    </div>
    
    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" value="<?php echo $producto->producto_descripcion; ?>" class="form-control" placeholder="Ingrese la descripcion" required>
    </div>
    
    <div class="form-group">
        <label>PVP</label>
        <input type="text" name="pvp" value="<?php echo $producto->producto_pvp; ?>" class="form-control" placeholder="Ingrese el PVP" required>
    </div>
     <div class="form-group">
        <label>Familia</label>
        <input type="text" name="familia" value="<?php echo $producto->producto_familia; ?>" class="form-control" placeholder="Ingrese la familia" required>
    </div>
        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>