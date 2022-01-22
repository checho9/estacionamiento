<?php
	$servername = "localhost";
	$database = "estacionamiento";
	$fecha = $_POST['fecha'];
	$no_placa = $_POST['no_placa'];
	$hora_entrada = $_POST['hora_entrada'];
	$tipo = $_POST['tipo'];
	$hora_salida = $_POST['hora_salida'];
	$cantidad_pagar = $_POST['cantidad_pagar'];
	//$HS = $_POST['hora_salida'];
	//$HE = $_POST['hora_entrada'];
	//$TE = 0;

	//Creando la conexion
	$connection = mysqli_connect($fecha,$no_placa,$hora_entrada,$tipo,$hora_salida);
	// Checar la conexion
	if (!$connection) {
		die("Conexion fallida: " . mysqli_connect_error());
	}
	echo "Conexion exitosa";
	mysqli_close($connection);


	/*$HS = $_POST['hora_salida'];
	$HE = $_POST['hora_entrada'];
	$TE = 0;

	echo'<p> El tiempo estacionado fue: '.($HS-$HE)= $TE.'</p>';
	*/		
?>
