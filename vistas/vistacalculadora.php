<?php
    //<!==============================================================!>
    //Instanciar las clases
    //<!==============================================================!>
    
    include "../controladores/controladorcalculadora.php";

    //Llamar al objeto
    $ControladorCalculadora = new ControladorCalculadora();

    //llamar metodo de la calculadora (a través de un objeto)
    echo $ControladorCalculadora->sumar(34,56);

?>