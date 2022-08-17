<?php 

	// Cambio formato a la inicial
	$timestamp_inicial = date('Y-m-d H:i:s',$timestamp_session);
	// Cambio formato a la final, es decir, la actual
	$timestamp_final = date('Y-m-d H:i:s',$timestamp_ahora);
	// Y las resto:
	$tiempo_segundos = strtotime($timestamp_final) - strtotime($timestamp_inicial);
	
	echo $tiempo_segundos;
 ?>