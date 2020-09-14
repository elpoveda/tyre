<?php

	$host = "localhost";
	$user = "esolutio_tyre";
	$clave = "Tyreagencia2020";
	$bd = "esolutio_bdtyre";
	$con = new mysqli($host, $user, $clave, $bd);
	$mysqli = new mysqli($host, $user, $clave, $bd);
	$conectar = mysqli_connect($host, $user, $clave, $bd);
	if ($con->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	}
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	}
	if ($conectar->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	}
?>