<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <meta name="description" content="Disfruta de nuestro delicioso menu, tenemos hamburguesas, hotdogs, flautas, etc. Te esperamos con mucho gusto">
        <link rel="stylesheet" href="css/productos.css">
        <title>Super Star | Productos</title>
    </head>
    <body>
        <?=$navbar;?>
        <div class="productos">
            <div class="card-group">
                <?php foreach($productos as $producto): ?>
                    <div class="card-p">
                        <div class="imgBx">
                            <img src="images/<?=$producto['imagen']?>" alt="<?=$producto['nombre']?>">
                        </div>
                        <div class="contentBx">
                            <h3><?=$producto['nombre'];?></h3>
                            <h2 class="price">$ <?=$producto['precio'];?> MXN</h2>
                            <p class="des">
                                <?=$producto['descripcion']?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <?=$footer;?>
    </body>

    <script>
        const bdark = document.querySelector("#DarkM");
        const body = document.querySelector("body");

        load();

        bdark.addEventListener("click", e => {
            body.classList.toggle("DarkMode");
            store(body.classList.contains("DarkMode"));
        });


        function load(){
            const DarkMode = localStorage.getItem("DarkMode");

            if(!DarkMode) {
                store("false");
            } else if(DarkMode == "true") {
                body.classList.add("DarkMode");
            }
        }

        function store(value){
            localStorage.setItem("DarkMode", value);
        }
    </script>
</html>