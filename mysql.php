<?php
	$servidor = "localhost";
	$usuario = "marcadores";
	$passw = "marcadores";
	$basedatos = "marcadores";


	/**
	 * comenzar conexión
	 */
	$conexion = mysql_connect($servidor,$usuario,$passw);

	//fallo de conexión

	if (!$conexion){
		die("no se ha podido conectar: " .mysql_error());
	}
	else {
		echo "Te has conectado a la base de datos";
	}

	/**
	 * Crear TABLAS en la base de datos
	 */

	// // 1.- Seleccionar la base de datos
	mysql_select_db($basedatos, $conexion);

	// // 2.- preparar comando
	$sql = "CREATE TABLE Agenda
			(
			personaID int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(personaID),
			Nombre varchar(15),
			Apellido varchar(15),
			Edad int,
			Telefono int
			)";

	// // 3.- ejecutar la query

	mysql_query($sql, $conexion);



	/**
	 * terminar conexión
	 */
	mysql_close($conexion);


	/**
	 * Crear una BASE DE DATOS
	 */
	function creaBaseDatos(){
	if (mysql_query("CREATE DATABASE primeraBase", $conexion)) {
		# code...
		echo "Se ha creado la Base de Datos";
	}
	else {
		echo "No se ha podido crear la base de datos por el siguiente error:" .mysql_error();

	}
	}

 ?>
