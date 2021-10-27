<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <title>Crear Pregunta</title>
    </head>
    <body>
        <?=$navbar;?>
        <br><br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Crear una nueva pregunta | Super Star</h5>
                    <p class="card-text">
                        <form method="post" action="<?=base_url('admin/pregunta/guardar');?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="bootstrapid">Bootstrap ID</label>
                                <input id="bootstrapid" class="form-control" type="text" name="bootstrapid">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="collapseid">Collapse ID</label>
                                <input id="collapseid" class="form-control" type="text" name="collapseid">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="pregunta">Pregunta</label>
                                <input id="pregunta" class="form-control" type="text" name="pregunta">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="respuesta">Respuesta</label>
                                <input id="respuesta" class="form-control" type="text" name="respuesta">
                            </div>
                            <br>
                            <button class="btn btn-success" type="submit">Guardar Pregunta</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>