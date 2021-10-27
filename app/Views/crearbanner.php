<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <title>Crear Banners</title>
    </head>
    <body>
        <?=$navbar;?>
        <br><br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Crear los primeros Banners | Super Star</h5>
                    <p class="card-text">
                        <form method="post" action="<?=base_url('admin/banners/guardar'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="bannerOne">Banner One (Primera Imagen)</label><br>
                                <input id="bannerOne" class="form-control-file" type="file" name="bannerOne">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="bannerTwo">Banner Two (Segunda Imagen)</label><br>
                                <input id="bannerTwo" class="form-control-file" type="file" name="bannerTwo">
                            </div>
                            <br>
                            <button class="btn btn-success" type="submit">Guardar Banners</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>