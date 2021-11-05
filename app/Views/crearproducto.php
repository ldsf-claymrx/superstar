<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <title>Crear Producto</title>
    </head>
    <body>
        <?=$navbar;?>
        <br><br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Crear un producto nuevo | Super Star</h5>
                    <p class="card-text">
                        <form method="post" action="<?=base_url('admin/productos/guardar'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <input id="descripcion" class="form-control" type="text" name="descripcion">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input id="precio" class="form-control" type="text" name="precio">
                            </div>
                            <br>
                            <!--<div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input id="imagen" class="form-control-file" type="file" name="imagen">
                            </div>
                            <br>-->
                            <button class="btn btn-success" type="submit">Guardar Producto</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>