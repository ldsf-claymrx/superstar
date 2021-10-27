<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <link rel="stylesheet" href="css/mostrarpedidos.css">
        <meta name="description" content="Consulta tu(s) pedidos en tiempo real, desde la comodidad de tu casa; PROXIMAMENTE: Realizaras pedidos en linea.">
        <title>Super Star | Pedidos Tiempo Real</title>
    </head>
    <body>
        <?=$navbar;?>
        <div class="container">
            <h1 class="title">Pedidos en tiempo real | Super Star</h1><br>
            <center>
                <a href="#letras" class="btn btn-success">Ir a letras tiempo real</a>
            </center><br>
            <p class="realtime-description">
                <strong>Nota: </strong>Los pedidos que se muestran a continuación son pedidos que
                apenas estarán por salir en los proximos 5 min. <br><br>

                <strong>Lista Normal: </strong> En esta lista se mostrarán todos los pedidos con letras,
                este lleva el orden alfabetico (A - Z) y se vuelve a repetir. 
                Esta lista es para Hamburguesas y Hotdogs. El tiempo de salida dependera de la 
                cantidad de pedidos. <br><br>

                <strong>Lista Rapida: </strong>Esta lista se mostraran todos los pedidos con numeros estos
                llevan el orden (1 - 10) y se vuelve a repetir. Esta lista es unicamente para 1 o maximo 2
                hotdogs (sencillos, especiales o maximo 2 promociones). Aun asi el tiempo estimado para cada 
                pedido de lista rapida es de 10 a 15 minutos; no menos. <br><br>

                <strong>Lista en espera: </strong>Esta lista se mostraran los pedidos que ya estan listos,
                pero aun no han pasado a recoger (Tanto lista normal y lista rapida). <br><br>
            </p>
        </div>

        <div class="container" id="letras">
            <script>
                (function() {
                    'use strict';
                    var timer = setInterval(function() {
                        console.log('Actualizando Letras');
                        $("#letras").load("<?=base_url('/pedidos-tiempo-real');?> #letras");
                    }, 1500);
                })();
                $.ajaxSetup({ cache: false });
            </script>

            <div class="listanormal">
                <h1 class="h1-listanormal">Lista Normal (Tiempo Real)</h1>
                <p class="p-listanormal"><?=$realtime[0]['listanormal'];?></p>
                <div class="spinner-border text-warning" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>
            <br><br>
            <div class="listarapida">
                <h1 class="h1-listarapida">Lista Rapida (Tiempo Real)</h1>
                <p class="p-listarapida"><?=$realtime[0]['listarapida'];?></p>
                <div class="spinner-border text-warning" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>
            <br><br>
            <div class="listaespera">
                <h1 class="h1-listaespera">Lista Espera (Pedidos ya listos)</h1>
                <p class="p-listaespera"><?=$realtime[0]['listaespera'];?></p>
                <div class="spinner-border text-warning" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>
        </div>
        <?=$footer;?>
    </body>
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

    <script>
        (function() {
            'use strict';
            var timeer = setInterval(function() {
                console.log('Actualizando Pagina Completa');
                location.reload();
            }, 60000);
        })();
        $.ajaxSetup({ cache: false });
    </script>


    <script src="js/jquery-3.6.0.min.js"></script>
</html>