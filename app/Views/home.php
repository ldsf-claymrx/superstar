<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <meta name="description" content="Bienvenidos a nuestra pagina web oficial de Super Star tenemos en nuestro menú Hamburguesas, HotDogs, Ordenes de Flautas, Bebidas para que usted pueda disfrutar de una deliciosa cena en Altamira, Tamaulipas">
        <link rel="stylesheet" href="css/home.css">
        <title>Super Star | Inicio</title>
    </head>
    <body>
        <?=$navbar;?>
        <div data-bs-spy="scroll" data-bs-target="#navsuperstar" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/<?=$config['bannerOne'];?>" class="img-fluid d-block w-100" alt="Super Star | Banner Inicio">
                    </div>
                    <div class="carousel-item">
                        <img src="images/<?=$config['bannerTwo'];?>" class="img-fluid d-block w-100" alt="Super Star | Banner 2 Inicio">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>



        <div class="container" id="status-restaurant">
            <script>
                (function() {
                    'use strict';
                    var timer = setInterval(function() {
                        console.log('estoy actualizando');
                        $("#status-restaurant").load("<?=base_url();?> #status-restaurant");
                    }, 3500);
                })();
                $.ajaxSetup({ cache: false });
            </script>


            <div class="title-status">
                <h1 class="title">Super Star se encuentra</h1>
            </div>
            <div class="body-status">
                <?php
                    if ($realtime['estado'] == 1 || $realtime['estado'] == '1'):
                        echo '<p class="status">Abierto ✅</p><span class="description-status">¡Te esperamos con mucho gusto! 🍔🍟🌭</span>';
                    elseif($realtime['estado'] == 2 || $realtime['estado'] == '2'):
                        echo '<p class="status">Cerrado 👀</p><span class="description-status">Abrimos a las 7:00 PM y Cerramos a la 01:00AM (Aprox.), te esperamos con mucho gusto 🍔🍟🌭</span>';
                    elseif($realtime['estado'] == 3 || $realtime['estado'] == '3'):
                        echo '<p class="status">Cerrado por hoy 😥</p><span class="description-status">Lamentamos informarte que no abriremos el dia de hoy 😥, pero mañana te esperamos con muchisimo gusto 🍔🍟🌭</span>';
                    elseif($realtime['estado'] == 4 || $realtime['estado'] == '4'):
                        echo '<p class="status">Descansando 😴</p><span class="description-status">Nos alegra mucho que pienses en venir, pero hoy es descanso amigo(a), Muchas Gracias por tu comprensión 😴🍔🍟🌭</span>';
                    elseif($realtime['estado'] == 5 || $realtime['estado'] == '5'):
                        echo '<p class="status">en un Contratiempo ⌚</p><span class="description-status">Super Star si va abrir hoy ✅, pero estamos en un contratiempo ⌚, en un rato mas estaremos llegando y con mucho gusto te estaremos atendiendo 🍔🍟🌭</span>';
                    elseif($realtime['estado'] == 6 || $realtime['estado'] == '6'):
                        echo '<p class="status">Manteniento 🛠️</p><span class="description-status">Super Star se encuentra en mantenimiento 🛠️😥 por lo que; el dia de hoy no se abrirá. Muchas gracias por tu comprensión 🍔🍟🌭</span>';
                    elseif($realtime['estado'] == 7 || $realtime['estado'] == '7'):
                        echo '<p class="status">status-db-title</p><span class="description-status">description-status</span>';
                    endif;
                ?>
            </div>
        </div>



        <div class="container" id="opciones">
            <div class="opciones">
                <div class="box" id="DarkM">
                    <div class="content">
                        <img src="images/nocturno.png" alt="Super Star Nocturno">
                        <p>Modo Nocturno</p>
                    </div>
                </div>
                <div class="box" onclick="fuc_tiempo_real()">
                    <div class="content">
                        <img src="images/pedidos.png" alt="Pedido Tiempo Real Super Star">
                        <p>Pedidos en tiempo real</p>
                    </div>
                </div>
                <div class="box" onclick="location.href='<?=base_url('/productos'); ?>'">
                    <div class="content">
                        <img src="images/productos.png" alt="Productos Super Star">
                        <p>Visualiza nuestros productos</p>
                    </div>
                </div>
                <div class="box" onclick="location.href='https://www.facebook.com/HambSuperStar/'">
                    <div class="content">
                        <img src="images/facebook.png" alt="Facebook Super Star">
                        <p>Visítanos en Facebook y entérate de las nuevas promociones y productos</p>
                    </div>
                </div>
                <div class="box" onclick="location.href='<?=base_url('/preguntas-frecuentes');?>'">
                    <div class="content">
                        <img src="images/pregunta.png" alt="Preguntas Frecuentes Super Star">
                        <p>Revisa nuestra preguntas mas frecuentes</p>
                    </div>
                </div>
                <div class="box" onclick="location.href='https://maps.app.goo.gl/MJq96bb2F2ixumcv8'">
                    <div class="content">
                        <img src="images/google-maps.png" alt="Google Maps Super Star">
                        <p>Encuéntranos en Google Maps</p>
                    </div>
                </div>
            </div>
        </div>


        <?=$footer;?>
    </body>
    <script src="js/realtime.js"></script>
    <script>
        const bdark = document.querySelector('#DarkM');
        const body = document.querySelector('body');

        load();

        bdark.addEventListener('click', e => {
            body.classList.toggle('DarkMode');
            store(body.classList.contains('DarkMode'));
        });


        function load(){
            const DarkMode = localStorage.getItem('DarkMode');

            if(!DarkMode) {
                store('false');
            } else if(DarkMode == 'true') {
                body.classList.add('DarkMode');
            }
        }

        function store(value){
            localStorage.setItem('DarkMode', value);
        }
    </script>

    <script src="js/jquery-3.6.0.min.js"></script>
</html>