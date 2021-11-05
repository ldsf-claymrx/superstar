<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <title>Inicio de Sesion Admin</title>
    </head>
    <body>
        <?=$navbar;?>

        <div class="container" id="configuracion"><br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Configuracion del negocio</h5>
                    <form method="post" action="<?=base_url('admin/negocio/actualizar'); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$negociodatos['id'];?>">
                        <div class="form-group">
                        <?php
                            if($negociodatos['estado'] == 1):
                        ?>
                                <label for="estado">Status de Super Star ==>> <b>Abierto</b></label>
                        <?php
                            elseif ($negociodatos['estado'] == 2):
                        ?>
                                <label for="estado">Status de Super Star ==>> <b>Cerrado</b></label>
                        <?php
                            elseif($negociodatos['estado'] == 3):
                        ?>
                                <label for="estado">Status de Super Star ==>> <b>Cerrado completo</b></label>
                        <?php
                            elseif ($negociodatos['estado'] == 4):
                        ?>
                                <label for="estado">Status de Super Star ==>> <b>Descansando</b></label>
                        <?php
                            elseif ($negociodatos['estado'] == 5):
                        ?>
                                <label for="estado">Status de Super Star ==>> <b>Contratiempo</b></label>
                        <?php
                            elseif($negociodatos['estado'] == 6):
                        ?>
                                <label for="estado">Status de Super Star ==>> <b>Mantenimiento</b></label>
                        <?php
                            endif;
                        ?>      
                            
                            <select id="estado" class="form-control" name="estado">
                                <option value="1">1. Abierto</option>
                                <option value="2">2. Cerrado</option>
                                <option value="3">3. Cerrado Completo</option>
                                <option value="4">4. Descansando</option>
                                <option value="5">5. Contratiempo</option>
                                <option value="6">6. Mantenimiento</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="listanormal">Lista Normal</label>
                            <input id="listanormal" class="form-control" type="text" name="listanormal" value="<?=$negociodatos['listanormal']?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="listarapida">Lista Rapida</label>
                            <input id="listarapida" class="form-control" type="text" name="listarapida" value="<?=$negociodatos['listarapida']?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="listaespera">Lista Espera</label>
                            <input id="listaespera" class="form-control" type="text" name="listaespera" value="<?=$negociodatos['listaespera']?>">
                        </div>
                        <br>
                        <button class="btn btn-warning" type="submit">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>


        <br><br><br>
        <div class="container" id="configuraciones"><br>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Configuraciones Banners | Inhabilitado</h5>
                    <!--<a class="btn btn-success" href="<?=base_url('admin/banners/crear');?>">Agregar Primeros Banners</a>
                    <a href="<?=base_url('admin/dashboard');?>" class="btn btn-primary" type="button">Ir a la parte superior</a>-->
                    <form method="post" action="<?=base_url('admin/banners/actualizar'); ?>" enctype="multipart/form-data">
                        <br>
                        <input type="hidden" name="id" value="<?=$config['id'];?>">
                        <div class="form-group">
                            <label for="bannerOne">Imagen BannerOne (Selecciones para actualizar)</label>
                            <br>
                            <img class="img-thumbnail" src="<?=base_url()?>/images/<?=$config['bannerOne'];?>" width="100" alt="">
                            <input id="bannerOne" class="form-control-file" type="file" name="bannerOne">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="bannerTwo">Imagen BannerTwo (Seleccione para actualizar)</label>
                            <br>
                            <img class="img-thumbnail" src="<?=base_url()?>/images/<?=$config['bannerTwo'];?>" width="100" alt="">
                            <input id="bannerTwo" class="form-control-file" type="file" name="bannerTwo">
                        </div>
                        <br>
                        <!--<button class="btn btn-warning" type="submit">Actualizar banner (eso solo es cuando ya hay banners creados)</button>-->
                    </form>
                </div>
            </div>
        </div>

        

        <br><br><br>
        <div class="container" id="productos">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Catalogo de productos</h5>
                    <a class="btn btn-success" href="<?=base_url('admin/productos/crear');?>">Agregar Producto</a>
                    <a href="<?=base_url('admin/dashboard');?>" class="btn btn-primary" type="button">Ir a la parte superior</a>
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($productos as $producto): ?>
                            <tr>
                                <td><?=$producto['id'];?></td>
                                <td><?=$producto['nombre'];?></td>
                                <td><?=$producto['descripcion'];?></td>
                                <td>$ <?=$producto['precio'];?> MXN</td>
                                <td><img class="img-thumbnail" src="<?=base_url()?>/images/<?=$producto['imagen'];?>" width="100" alt=""></td>
                                <td>
                                    <a href="<?=base_url('admin/productos/editar/'.$producto['id']); ?>" class="btn btn-warning" type="button">Editar</a>
                                    <a href="<?=base_url('admin/productos/eliminar/'.$producto['id']); ?>" class="btn btn-danger" type="button">Borrar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <br><br><br>
        <div class="container" id="preguntas">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Catalogo de preguntas</h5>
                    <a class="btn btn-success" href="<?=base_url('admin/pregunta/crear');?>">Agregar pregunta</a>
                    <a href="<?=base_url('admin/dashboard');?>" class="btn btn-primary" type="button">Ir a la parte superior</a>
                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>bootstrapid</th>
                                <th>pregunta</th>
                                <th>respuesta</th>
                                <th>collapseid</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($preguntas as $pregunta): ?>
                            <tr>
                                <td><?=$pregunta['id'];?></td>
                                <td><?=$pregunta['bootstrapid'];?></td>
                                <td><?=$pregunta['pregunta'];?></td>
                                <td><?=$pregunta['respuesta'];?></td>
                                <td><?=$pregunta['collapseid'];?></td>
                                <td>
                                    <a href="<?=base_url('admin/pregunta/editar/'.$pregunta['id']); ?>" class="btn btn-warning" type="button">Editar</a>
                                    <a href="<?=base_url('admin/pregunta/eliminar/'.$pregunta['id']); ?>" class="btn btn-danger" type="button">Borrar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script src="<?=base_url();?>/js/jquery-3.6.0.min.js"></script>
</html>