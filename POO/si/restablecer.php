<?php 
require '../database/database.php';
session_start(); 
if(isset($_POST['nueva_contra'])){
    $contra = $_POST['nueva_contra'];
    $documento = $_POST['documento'];
    $query = ("UPDATE cliente SET Contrasena = '$contra' WHERE Documento = '$documento'");
    $consulta = mysqli_query($con, $query);
    header("location: ../../index.php");
}
?>