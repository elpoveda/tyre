<?php
require '../database/database.php';
session_start(); 

if(isset($_POST['PIN'])){
    $pin = $_POST['PIN'];
    $query = ("SELECT * FROM tokens WHERE token = '$pin'");
    $consulta = mysqli_query($con, $query);
    $array = mysqli_fetch_array($consulta);
    $registros = mysqli_num_rows($consulta);
    if($registros > 0){
        $query2 = ("DELETE FROM tokens WHERE token = '$pin'");
        $consulta2 = mysqli_query($con, $query2);
        header("location: ../views/restablecer_contrasena.php");
        $_SESSION['restablecer'] = "si";
        $_SESSION['documento'] = $array['cliente_documento'];
    }else{
        header("location: ../../index.php");
    }
}


?>