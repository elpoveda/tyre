<?php
	/*
	$con = new mysqli("databasetyre.cask5u8rcuvt.us-east-1.rds.amazonaws.com","admin","admin123","proyecto");
	if ($con->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	}
	*/

	$host = "localhost";
	$user = "id14532289_root";
	$clave = "8gDPQ1zX{I&?8Z_P";
	$bd = "bdtyre";
	$con = new mysqli($host, $user, $clave, $bd);
	$mysqli = new mysqli($host, $user, $clave, $bd);
	$conectar = mysqli_connect($host, $user, $clave, $bd);
	if ($con->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	}
?>