function fuc_tiempo_real(){
    /*============= Completado ============= */
    /* Funcion terminada, determina el estado actual del negocio
    y muestra el mensaje diseรฑado para ello cada ocaciรณn. */
    $.ajax({
        url: 'https://superstarweb.com.mx/validacion-tiempo-real',
        success: function(data) {
            if(data == 1) {
                window.location = "https://superstarweb.com.mx/pedidos-tiempo-real";
            } else if(data == 2) {
                //alert("Esta cerrado");
                Swal.fire({
                    icon: 'info',
                    title: 'Super Star esta cerrado ๐',
                    text: 'Abrimos a las 7:00 PM y Cerramos a la 01:00AM (Aprox.), te esperamos con mucho gusto ๐๐๐ญ'
                })
            } else if(data == 3) {
                //alert("Hoy no se abrira");
                Swal.fire({
                    icon: 'error',
                    title: 'Super Star no abrira hoy ๐ฅ',
                    text: 'Lamentamos informarte que no abriremos el dia de hoy ๐ฅ, pero maรฑana te esperamos con muchisimo gusto ๐๐๐ญ'
                })
            } else if(data == 4) {
                //alert("Descansando");
                Swal.fire({
                    icon: 'info',
                    title: 'Super Star se encuentra descansando ๐ด',
                    text: 'Nos alegra mucho que pienses en venir, pero hoy es descanso amigo(a), Muchas Gracias por tu comprensiรณn ๐ด๐๐๐ญ'
                })
            } else if(data == 5) {
                //alert("Se nos hizo tarde");
                Swal.fire({
                    icon: 'info',
                    title: 'Super Star tiene un contratiempo โ',
                    text: 'Super Star si va abrir hoy โ, pero estamos en un contratiempo โ, en un rato mas estaremos llegando y con mucho gusto te estaremos atendiendo ๐๐๐ญ'
                })
            } else if(data == 6) {
                //alert("Mantenimiento");
                Swal.fire({
                    icon: 'info',
                    title: 'Super Star se encuentra en manteniento ๐?๏ธ',
                    text: 'Super Star se encuentra en mantenimiento ๐?๏ธ๐ฅ por lo que; el dia de hoy no se abrirรก. Muchas gracias por tu comprensiรณn ๐๐๐ญ'
                })
            }
        }
    });
}