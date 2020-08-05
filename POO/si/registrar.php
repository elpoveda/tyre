<?php
    require '../database/database.php';
    session_start();
    #reciviendo datos mendiante post
    $nombre_empresa = $_POST['Nombre_empresa'];
    $nombre_solicitante = $_POST['Nombre_solicitante'];
    $email = $_POST['Email'];
    $telefono_personal = $_POST['Telefono_personal'];
    $telefono_empresa = $_POST['Telefono_empresa'];
    $nit = $_POST['Nit'];
    $actividad_economica = $_POST['Actividad_economica'];
    $documento = $_POST['Documento'];
    $contrasena = $_POST['Contrasena'];
    $contrasena_confirmar = $_POST['Contrasena_confirmar'];
    if($contrasena == $contrasena_confirmar){
        $query = ("INSERT INTO cliente (Documento, Nombre, Email, Contrasena) VALUES ('$documento','$nombre_solicitante','$email','$contrasena')");
        $consulta = mysqli_query($con, $query);
        $query2 = ("INSERT INTO empresa (Nit, Nombre, Actividad_eco, Galeria_idGaleria, Cliente_Documento) VALUES ('$nit','$nombre_solicitante','$actividad_economica',1,'$documento')");
        $consulta2 = mysqli_query($con, $query2);
        $query3 = ("INSERT INTO telefono (Numero_persona, Tipo_telefono_idTipo_telefono1, Cliente_Documento, Empresa_Nit, Numero_Empresa) VALUE ('$telefono_personal',1,'$documento','$nit','$telefono_empresa')");
        $consulta3 = mysqli_query($con, $query3);
        $_SESSION['datos_incorrectos'] = "no";
        header("location: ../../index.php");
    }else{
        $_SESSION['datos_incorrectos'] = "si";
	    header("location: ../views/register.php");
    }
?>