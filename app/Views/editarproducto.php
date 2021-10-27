<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <title>Editar Producto</title>
    </head>
    <body>
        <?=$navbar;?>
        <br><br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Editar datos del producto | Super Star</h5>
                    <p class="card-text">
                        <form method="post" action="<?=base_url('admin/productos/actualizar'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$producto['id']; ?>">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" value="<?=$producto['nombre']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <input id="descripcion" class="form-control" type="text" name="descripcion" value="<?=$producto['descripcion']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input id="precio" class="form-control" type="text" name="precio" value="<?=$producto['precio']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <br>
                                <img class="img-thumbnail" src="<?=base_url()?>/images/<?=$producto['imagen'];?>" width="100" alt="">
                                <input id="imagen" class="form-control-file" type="file" name="imagen">
                            </div>
                            <br>
                            <button class="btn btn-success" type="submit">Actualizar producto</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>