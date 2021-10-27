<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <title>Editar Pregunta</title>
    </head>
    <body>
        <?=$navbar;?>
        <br><br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Editar datos de una pregunta | Super Star</h5>
                    <p class="card-text">
                        <form method="post" action="<?=base_url('admin/pregunta/actualizar'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?=$pregunta['id']; ?>">
                            <div class="form-group">
                                <label for="bootstrapid">bootstrapid</label>
                                <input id="bootstrapid" class="form-control" type="text" name="bootstrapid" value="<?=$pregunta['bootstrapid']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="pregunta">pregunta</label>
                                <input id="pregunta" class="form-control" type="text" name="pregunta" value="<?=$pregunta['pregunta']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="respuesta">respuesta</label>
                                <input id="respuesta" class="form-control" type="text" name="respuesta" value="<?=$pregunta['respuesta']; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="collapseid">collapseid</label>
                                <input id="collapseid" class="form-control" type="text" name="collapseid" value="<?=$pregunta['collapseid']; ?>">
                            </div>
                            <br>
                            <button class="btn btn-success" type="submit">Actualizar pregunta</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>