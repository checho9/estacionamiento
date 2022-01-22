<?php
	//conexion con el servidor
	$conectar= mysql_connect('localhost','root', '');
	//verificacion de la conexion
	if (!$conectar) {
		echo "no se pudo conectar con el servidor";
	} else{
		$base=mysql_select_db('estacionamiento');
		if (!$base) {
			echo "no se encontro la base de datos";
		}
	}
	//se traen la variables
	$fecha = $_POST['fecha'];
	$no_placa = $_POST['no_placa'];
	$hora_entrada = $_POST['hora_entrada'];
	$tipo = $_POST['tipo'];
	$hora_salida = $_POST['hora_salida'];
	$tiempo_estacionado = $_POST['tiempo_estacionado'];
	$cantidad_pagar = $_POST['cantidad_pagar'];
	

	//sentencia sql
	$sql="INSERT INTO usuario VALUES('$fecha','$no_placa','$hora_entrada','$tipo','$hora_salida','$cantidad_pagar', '$tiempo_estacionado')";
	
	//Ejecucion de la sentencia
	$ejecutar=mysql_query($sql);
	//verificacion
	if (!$ejecutar) {
		echo "ocurrio un error";
	} else { 
		echo"Los datos se guardaron correctamente<br><a href='index.html'>Atras</a>";
	}
?>