<?php


 // Guardamos el mes actual en una variable
    // Ejemplo de formato: "03"
    $mesActual = date('m');
 
    // Si estamos entre el 1 de junio y el 31 de septiembre (incluidos)
    if ( $mesActual >= '03' && $mesActual <= '09' ) {
 
         require "view/ficha.view.php";
 
    // Para cualquier otra fecha
    } else {
 
        return 'Horario de invierno...';
 
    }
?>


