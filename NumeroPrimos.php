<?php 
	/*Crear una funcion llamada esPrimo que reciba un parametro y devuelva true si es primo y false si no lo es.*/
	/*Crear una página HTML que llame el script PHP*/

	function esPrimo($numero){
		if ($numero == 2)
			return false;
		for ($i=2; $i<=$numero/2 ; $i++) { 
			if ($numero % $i ==0)
				return false;
		}
		return true;

	}
	// Driver Code
$numero = 883;
$flag = esPrimo($numero);
if ($flag == true)
    echo "Es primo";
else
    echo "No es primo"
	

 ?>