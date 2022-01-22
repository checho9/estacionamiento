<?php
//validamos datos del servidor
//$user = "root";
//$pass = "";
//$host = "localhost";

//conexion a base de datos
//$connection = mysqli_connect($host,$user,$pass);

//Hacemos llamado al input
$fecha = $_POST['fecha'];
$no_placa = $_POST['no_placa'];
$hora_entrada = $_POST['hora_entrada'];
$tipo = $_POST['tipo'];
$hora_salida = $_POST['hora_salida'];
$cantidad_pagar = $_POST['cantidad_pagar'];
$tiempo_estacionado = $_POST['tiempo_estacionado'];

//conexion a la base de datos
if(!$connection)
		{
			echo "No se ha podido conectar con el servidor" . mysql_error();
		}
	else
		{
			echo "<b><h2> Se ha conectado al servidor </h2></b>";
		}
		//Nombre de la BD
		$database = "estacionamiento";
		$databased = mysqli_select_database($connection,$database);

		if(!$databased)
		{
			echo "No se ha encontrado la tabla";
		}
		else
		{
			echo "<h3>Haz seleccionado una tabla</h3>";
		}
		$instruccion_SQL = "INSERT INTO usuario (fecha,no_placa,hora_entrada,tipo,hora_salida, cantidad_pagar, tiempo_estacionado) VALUES ($fecha, $no_placa, $hora_entrada, $tipo, $hora_salida, $cantidad_pagar, $tiempo_estacionado)";

		$resultado = mysqli_query($connection, $instruccion_SQL);
		$consulta = "SELECT * FROM usuario";

	$result = mysqli_query($connection, $consulta);
	if(!$result)
	{
		echo "No se ha podido realizar la consulta";
	}
	echo "<table>";
	echo "<tr>";
	echo "<th><h1>Id</h1></th>";
	echo "<th><h2>fecha</h2></th>";
	echo "<th><h2>no_placa</h2></th>";
	echo "<th><h2>hora_entrada</h2></th>";
	echo "<th><h2>tipo</h2></th>";
	echo "<th><h2>hora_salida</h2></th>";
	echo "<th><h2>cantidad_pagar</h2></th>";
	echo "<th><h2>tiempo_estacionado</h2></th>";
	echo "<tr>";

	while ($colum = mysqli_fetch_array($result)) 
	{
		echo "<tr>";
		echo "<th><h1>".$colum['id']."Id</h1></th>";
		echo "<th><h1>".$colum['fecha']."Id</h1></th>";
		echo "<th><h1>".$colum['no_placa']."Id</h1></th>";
		echo "<th><h1>".$colum['hora_entrada']."Id</h1></th>";
		echo "<th><h1>".$colum['tipo']."Id</h1></th>";
		echo "<th><h1>".$colum['hora_salida']."Id</h1></th>";
		echo "<th><h1>".$colum['cantidad_pagar']."Id</h1></th>";
		echo "<th><h1>".$colum['tiempo_estacionado']."Id</h1></th>";
		echo "<tr>";
	}
	echo "</table>";

	mysqli_close($connection);

	echo '<a href="index.html"> Atras</a>';
?>