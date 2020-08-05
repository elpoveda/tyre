<?php

$accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
include("../database/database.php");
session_start();
$documento  = $_SESSION['sesion'];

$query3 = $mysqli->query("SELECT * FROM cliente WHERE Documento = '$documento'");
$sesion = mysqli_fetch_array($query3);

switch ($accion) {
	case 'agregar':
		$sentenciaSQL = ("INSERT INTO cita(Cliente_Documento)VALUES('$documento')");

		$consulta_prueba = mysqli_query($con, $sentenciaSQL);
		echo json_encode($consulta_prueba);
		break;
	case 'eliminar':
		$respuesta=false;
		if(isset($_POST['id'])){
			$sentenciaSQL = $mysqli->query("DELETE FROM evento WHERE id = :id");
			$respuesta = $sentenciaSQL->execute(array("id"=>$_POST['id']));
		}
		echo json_encode($respuesta);
		break;
	case 'modificar':
		$respuesta = false;
		if(isset($_POST['id'])){
			$sentenciaSQL = $mysqli->query("UPDATE evento SET title=:title, descripcion=:descripcion, color=:color, textColor=:textColor, start=:start, end=:end WHERE id = :id");
			$respuesta = $sentenciaSQL->execute(array(
				"id"=>$_POST['id'],
				"title" =>$_POST['title'],
				"descripcion" =>$_POST['descripcion'],
				"color" =>$_POST['color'],
				"textColor" =>$_POST['textColor'],
				"start" =>$_POST['start'],
				"end" =>$_POST['end'] 
			));
		}
		echo json_encode($respuesta);
		break;
	default:
		//seleccionar los eventos del calendario
		$sentenciaSQL = $mysqli->query("SELECT * FROM cita WHERE Cliente_Documento = '$sesion[id]'");
		$sentenciaSQL->execute();

		$resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($resultado);
		break;
}

?>
