<!DOCTYPE html>
<html style="
    background: url(../assets/img/fondo.jpg) no-repeat;
    background-size: cover;">
<head>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>registro</title>
    <link href="../assets/elementos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script src="../assets/elementos/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets\css\stylesR.css">
    <link href="https://fonts.googleapis.com/css2?family=Bubbler+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
<?php 
include("../database/database.php");
session_start();
$datos_incorrectos = $_SESSION['datos_incorrectos'];
session_destroy();
?>
</head>
<header>
    <li>
        <a href="../../index.php"><img style="width:50px;transform: rotate(-90deg); margin-top: 30px; margin-left: 10px; " src="../assets/img/next.png"></a>
    </li>
</header>
<body>
    <div style="margin-left: 500px;" id="registration-form">
        <div >
            <h1  style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 70px; " >REGISTRO</h1>
            <form action="../si/registrar.php" method="POST">
                <div  class="class col-md-12">
                    <div class="row">
                        <div class="class col-md-6">
                            <div class="form-group">
                                <label style="color:#ffff">Nombre De La Empresa:</label>
                                <input type="text" class="form-control" id="Nombre_empresa" name="Nombre_empresa" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Nombre Solicitante</label>
                                <input type="text" class="form-control" id="Nombre_solicitante" name="Nombre_solicitante" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Correo Electrónico</label>
                                <input type="email" class="form-control" id="Email" name="Email">
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Teléfono Personal</label>
                                <input type="number" class="form-control" id="Telefono_personal" name="Telefono_personal" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Teléfono De La Empresa</label>
                                <input type="number" class="form-control" id="Telefono_empresa" name="Telefono_empresa" required>
                            </div>
                        </div>
                        <div class="class col-md-6">
                            <div class="form-group">
                                <label style="color:#ffff"> NIT</label>
                                <input type="text" class="form-control" id="Nit" name="Nit">
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Actividad Economica</label>
                                <input type="text" class="form-control" id="Actividad_economica" name="Actividad_economica" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Documento</label>
                                <input type="number" class="form-control" id="Documento" name="Documento" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Contraseña</label>
                                <input type="password" class="form-control" id="Contrasena" name="Contrasena" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="Contrasena_confirmar" name="Contrasena_confirmar" required>
                                <?php if($datos_incorrectos == "si"){
                                    ?><h4 style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 15px; ">Error Confirmar Contraseña diferente</h4><?php
                                }else{
                                    ?><?php
                                } ?>
                            </div>
                        
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg"><strong>REGISTRARSE</strong></button>
                                <h4 style="color: #ffff; padding-top: 10px"><u>Olvidaste Tu Contraseña?</u></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
