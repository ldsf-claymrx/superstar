function fuc_tiempo_real(){
    /*============= Completado ============= */
    /* Funcion terminada, determina el estado actual del negocio
    y muestra el mensaje diseñado para ello cada ocación. */
    $.ajax({
        url: 'http://localhost:8080/validacion-tiempo-real',
        success: function(data) {
            if(data == 1) {
                window.location = "http://localhost:8080/pedidos-tiempo-real";
            } else if(data == 2) {
                //alert("Esta cerrado");
                Swal.fire({
                    icon: 'info',
                    title: 'Super Star esta cerrado 👀',
                    text: 'Abrimos a las 7:00 PM y Cerramos a la 01:00AM (Aprox.), te esperamos con mucho gusto 🍔🍟🌭'
                })
            } else if(data == 3) {
                //alert("Hoy no se abrira");
                Swal.fire({
                    icon: 'error',
                    title: 'Super Star no abrira hoy 😥',
                    text: 'Lamentamos informarte que no abriremos el dia de hoy 😥, pero mañana te esperamos con muchisimo gusto 🍔🍟🌭'
                })
            } else if(data == 4) {
                //alert("Descansando");
                Swal.fire({
                    icon: 'info',
                    title: 'Super Star se encuentra descansando 😴',
                    text: 'Nos alegra mucho que pienses en venir, pero hoy es descanso amigo(a), Muchas Gracias por tu comprensión 😴🍔🍟🌭'
                })
            } else if(data == 5) {
                //alert("Se nos hizo tarde");
                Swal.fire({
                    icon: 'info',
                    title: 'Super Star tiene un contratiempo ⌚',
                    text: 'Super Star si va abrir hoy ✅, pero estamos en un contratiempo ⌚, en un rato mas estaremos llegando y con mucho gusto te estaremos atendiendo 🍔🍟🌭'
                })
            } else if(data == 6) {
                //alert("Mantenimiento");
                Swal.fire({
                    icon: 'info',
                    title: 'Super Star se encuentra en manteniento 🛠️',
                    text: 'Super Star se encuentra en mantenimiento 🛠️😥 por lo que; el dia de hoy no se abrirá. Muchas gracias por tu comprensión 🍔🍟🌭'
                })
            }
        }
    });
}