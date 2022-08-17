<?php 
	$numeroUno = 100;
	$numeroDos = 33;
	$numeroTres = 40;

	if ($numeroUno > $numeroDos && $numeroUno > $numeroTres){
		echo "<h1> El numero mayor es el numero uno: ".$numeroUno."</h1>";
	}
	
	elseif ($numeroDos > $numeroUno && $numeroDos > $numeroTres) {
		echo "<h1> El numero mayor es el numero dos: ".$numeroDos."</h1>";
	}  

	else{
		echo "<h1> El numero mayor es el numero tres: ".$numeroTres."</h1>";
	}
	
	

 ?>