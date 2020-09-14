<?php 
require '../database/database.php';
session_start();

$nombre_contactanos = $_POST['name_contactanos'];
$correo_contactanos = $_POST['email_contactanos'];
$asunto_contactanos = $_POST['subject_contactanos'];
$texto_contactanos = $_POST['text_contactanos'];
$query = ("INSERT INTO contactanos (name_contactanos, email_contactanos, subject_contactanos, text_contactanos) VALUES ('$nombre_contactanos','$correo_contactanos','$asunto_contactanos','$texto_contactanos')");
$consulta = mysqli_query($con, $query);

echo("OK");

?>