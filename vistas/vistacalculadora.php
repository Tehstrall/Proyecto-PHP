<?php
    //<!==============================================================!>
    //Instanciar las clases
    //<!==============================================================!>
    
    include "../controladores/controladorcalculadora.php";

    //Llamar al objeto
    $ControladorCalculadora = new ControladorCalculadora();

    //Harcodeo Todos los elementos que recibire del lado del front end
    $operadorUno = $_POST['operadorUno'];
    $operadorDos = $_POST['operadorDos'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case '+':
            $resultado = $ControladorCalculadora -> sumar($operadorUno,$operadorDos);
            break;
        case '-':
            $resultado = $ControladorCalculadora -> restar($operadorUno,$operadorDos);
            break;
        case '*':
            $resultado = $ControladorCalculadora -> multiplicar($operadorUno,$operadorDos);
            break;
        case '/':
            $resultado = $ControladorCalculadora -> dividir($operadorUno,$operadorDos);
            break;
        default:
            $resultado = "error";
            break;
    }
    echo "El resultado de la operacion es: ".$resultado;

    //llamar metodo de la calculadora (a través de un objeto)
    // echo $ControladorCalculadora->sumar(34,56);

?>