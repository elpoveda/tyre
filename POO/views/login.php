<?php 
include("../database/database.php");
require_once ('../../mobile/Mobile_Detect.php');
$detect = new Mobile_Detect();
session_start();
$logeo_incorrecto = '';
if(isset($_SESSION['logeo_incorrecto'])){
    $logeo_incorrecto = $_SESSION['logeo_incorrecto'];
}
session_destroy();
?>
<!DOCTYPE html>
<?php if($detect->isMobile() == true){?>
<html style="
    background: url(../assets/img/fondo-login-movil.jpg) no-repeat;
    background-size: cover;">
<?php
}else{
?>
<html style="
    background: url(../assets/img/fondo.jpg) no-repeat;
    background-size: cover;">
<?php
} 
?>
<head>
<meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Inicio de Sesión</title>
    <link href="../assets/elementos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script src="../assets/elementos/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets\css\stylesR.css">
    <link href="https://fonts.googleapis.com/css2?family=Bubbler+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
</head>
<header>
    <a href="../../index.php"><img style="width:50px;transform: rotate(-90deg); margin-top: 7px; margin-left: 7px; " src="../assets/img/next.png"></a>
</header>
<body>
    <?php if($detect->isMobile() == true){?>
    <div id="registration-form">
         <div style="margin-top: 30vw;">
            <center>
                <h1  style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 30px; margin-bottom: 3vw;" >Inicio De Sesión</h1>
                <?php if($logeo_incorrecto == "si"){
                    ?><h5 style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 20px;">Datos Incorrecto</h5><?php
                }else{
                ?><?php
                } ?>
           
            <form action="../si/loguear.php" method="POST">
                <div class="form-group">
                    <label style="color:#ffff; font-size: 20px;" for="username">Correo electrónico o número de teléfono</label>
                    <input style="height: 10vw; width: 80vw;" type="text" class="form-control" id="correo_numero" name="correo_numero">
                </div>
                <div class="form-group">
                    <label style="color:#ffff; font-size: 20px; border" for="username">Contraseña</label>
                    <input style="height: 10vw; width: 80vw;" type="password" class="form-control" id="clave" name="clave">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" style="width: 24vw;"><strong>INICIAR</strong></button>
                    <a href="#"><h4 style="color: #ffff; padding-top: 10px; font-size: 20px;"><u>Olvidaste Tu Contraseña?</u></h4></a>
                    <a href="../views/register.php"><h4 style="color: #ffff; padding-top: 10px; font-size: 20px;"><u>Aun no tienes cuenta?</u></h4></a>
                </div>
            </form>
            </center>
        </div>
    </div>
    <?php 
    }else{     
    ?>
    <div style="margin-left: 40vw;" id="registration-form">
        <div >
            <center>
                <h1  style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 50px; " >Inicio De Sesión</h1>
                <?php if($logeo_incorrecto == "si"){
                    ?><h5 style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 20px; ">Datos Incorrecto</h5><?php
                }else{
                ?>
                <?php
                } 
                ?>
            <form action="../si/loguear.php" method="POST">
                <div class="form-group">
                    <label style="color:#ffff" for="username">Correo electrónico o número de teléfono</label>
                    <input type="text" class="form-control" id="correo_numero" name="correo_numero">
                </div>
                <div class="form-group">
                    <label style="color:#ffff" for="username">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg"><strong>INICIAR</strong></button>
                    <a href="#"><h4 style="color: #ffff; padding-top: 10px;"><u>Olvidaste Tu Contraseña?</u></h4></a>
                    <a href="../views/register.php"><h4 style="color: #ffff; padding-top: 10px;"><u>Aun no tienes cuenta?</u></h4></a>
                </div>
            </form>
            </center>
        </div>
    </div>
    <?php
    }
    ?>
        
</body>
</html>
