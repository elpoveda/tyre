<!DOCTYPE html>
<html style="
    background: url(../assets/img/fondo.jpg) no-repeat;
    background-size: cover;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Inicio De Sesión</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets\css\stylesL.css">
    <link href="https://fonts.googleapis.com/css2?family=Bubbler+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <link href="../assets/elementos/boxicons/css/boxicons.min.css" rel="stylesheet">
</head>
<header>
    <li>
        <a href="../../index.php"><img style="width:50px;transform: rotate(-90deg); margin-top: 30px; margin-left: 10px; " src="../assets/img/next.png"></a>
    </li>
<?php 
include("../database/database.php");

session_start();
$logeo_incorrecto = $_SESSION['logeo_incorrecto'];
?>
</header>
<body>
    <div class="container" id="registration-form">

        <div class="frms">
            <center>
            <h1  style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 50px; " >Inicio De Sesión</h1>
            <?php if($logeo_incorrecto == "si"){
                ?><h5 style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 20px; margin-right: 40px; ">Datos Incorrecto</h5><?php
            }else{
               ?><?php
            } ?>
            </center>
            <form action="../si/loguear.php" method="POST">
               <div class="form-group">
                    <label style="color:#ffff" for="username">Correo electrónico o número de teléfono</label>
                    <input type="text" class="form-control" id="correo_numero" name="correo_numero">
                </div>
                <div class="form-group">
                    <label style="color:#ffff" for="username">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave">
                </div>
                <div class="form-group" style="margin-left: 20pc;">
                    <button type="submit" class="btn btn-success btn-lg"><strong>INICIAR</strong></button>
                    <a href="#"><h4 style="color: #ffff; padding-top: 10px; margin-left:-50px "><u>Olvidaste Tu Contraseña?</u></h4></a>
                    <a href="../views/register.php"><h4 style="color: #ffff; padding-top: 10px; margin-left: -33px;"><u>Aun no tienes cuenta?</u></h4></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
