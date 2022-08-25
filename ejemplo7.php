<?php
    $arraysNumeros = $_GET['arraysNumeros'];

    $tamañoCicloUno = count($arraysNumeros)-1;

    for ($i=0; $i < $tamañoCicloUno; $i++) { 
        for ($j=$i+1; $j < count($arraysNumeros); $j++) { 
            $numeroUno = $arraysNumeros[$i];
            $numeroDos = $arraysNumeros[$j];

            if (esPrimoRelativo($numeroUno, $numeroDos))
                echo $numeroUno.' y '.$numeroDos.' Son primos relaitivos <br>';
        }
    }

    function esPrimoRelativo($numeroUno, $numeroDos){

        $esPrimoRelativo = true;

        if ($numeroUno%$numeroDos == 0 || $numeroDos%$numeroUno==0)

            $esPrimoRelativo = false;
   

        for ($i=2; $i < $numeroUno && $esPrimoRelativo; $i++) { 
            if ($numeroUno % $i == 0 && $numeroDos % $i == 0)
            $esPrimoRelativo = false;      
        }
        return $esPrimoRelativo;
    }
    
    echo var_export(esPrimoRelativo($numeroUno,$numeroDos));
    
?>