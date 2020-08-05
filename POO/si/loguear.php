<?php
require '../database/database.php';
session_start();
#reciviendo los value de los inputs correo y clave
$correo_numero = $_POST['correo_numero'];
$clave = $_POST['clave'];
#haciendo consulta en la base de datos
$query = ("SELECT * FROM cliente WHERE Email = '$correo_numero' AND Contrasena = '$clave'");
$consulta = mysqli_query($con, $query);
$array = mysqli_fetch_array($consulta);
$query2 = ("SELECT * FROM telefono WHERE Numero_Persona = '$correo_numero'");
$consulta2 = mysqli_query($con, $query2);
$array2 = mysqli_fetch_array($consulta2);
$query3 = ("SELECT * FROM cliente WHERE Contrasena = '$clave'");
$consulta3 = mysqli_query($con, $query3);
$array3 = mysqli_fetch_array($consulta3);
#validando que el correo y la clave existan y esten ligados
if(($array['Email'] != '' && $array['Contrasena'] != '')||($array2['Numero_Persona'] != '' && $array3['Contrasena'] != '')){
	$_SESSION['username'] = $correo_numero;
	$_SESSION['sesion'] = $array['Documento'];
	if($_SESSION['sesion'] == ''){
		$_SESSION['sesion'] = $array2['Cliente_Documento'];
	}
	$_SESSION['logeo_incorrecto'] = "no";
	$_SESSION['datos_incorrectos'] = "no";
	header("location: ../../index.php");
}else{
	$_SESSION['logeo_incorrecto'] = "si";
	header("location: ../views/login.php");
}

?>