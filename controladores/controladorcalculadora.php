<?php

    //Creo una clase
    class ControladorCalculadora{
        function sumar($operador1, $operador2){
            return $operador1 + $operador2;
        }

        function restar($operador1, $operador2){
            return $operador1 - $operador2;
        }

        function multiplicar($operador1, $operador2){
            return $operador1 * $operador2;
        }

        function dividir($operador1, $operador2){
            return $operador1 / $operador2;
        }
    }

?>