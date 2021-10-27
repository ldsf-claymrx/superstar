<!DOCTYPE html>
<html lang="es">
    <head>
        <?=$links;?>
        <link rel="stylesheet" href="css/preguntas.css">
        <meta name="description" content="Consulta nuestras preguntas mas frecuentes y salte de las dudas:)">
        <title>Super Star | Preguntas Frecuentes</title>
    </head>
    <body>
        <?=$navbar;?>
        <div class="container">
            <h1 class="preguntas">Preguntas Frecuentes</h1>
            <div class="accordion" id="accordionExample">
            <?php foreach($preguntas as $pregunta): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="<?=$pregunta['bootstrapid']?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?=$pregunta['collapseid'];?>" aria-expanded="true" aria-controls="<?=$pregunta['collapseid'];?>">
                        <?=$pregunta['pregunta']?>
                    </button>
                    </h2>
                    <div id="<?=$pregunta['collapseid'];?>" class="accordion-collapse collapse show" aria-labelledby="<?=$pregunta['bootstrapid']?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?=$pregunta['respuesta']?>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
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
</html>