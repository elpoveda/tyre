<?php 
include("../database/database.php");
require_once ('../../mobile/Mobile_Detect.php');
$detect = new Mobile_Detect();
session_start();
if(!isset($_SESSION['restablecer'])){
    header("location: ../../index.php");
}
$documento = $_SESSION['documento'];
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
    <title>RESTABLECER CONTRASEÑA</title>
    <link href="../assets/elementos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script src="../assets/elementos/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets\css\stylesR.css">
    <link href="https://fonts.googleapis.com/css2?family=Bubbler+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
</head>
<header>
    <a href="../../index.php"><img style="width:50px;transform: rotate(-90deg); margin-top: 30px; margin-left: 10px; " src="../assets/img/next.png"></a>
</header>
<body>
    <?php if($detect->isMobile() == true){?>
    <div  id="registration-form">
        <div >
            <h1  style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 50px; margin-bottom: 3vw;" >REGISTRO</h1>
            <form action="../si/registrar.php" method="POST">
                <div  class="class col-md-12">
                    <div class="row">
                        <div class="class col-md-6">
                            <div class="form-group">
                                <label style="color:#ffff">Nombre De La Empresa:</label>
                                <input type="text" class="form-control" id="Nombre_empresa" name="Nombre_empresa" required>
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Nombre del Solicitante</label>
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
                                <label style="color:#ffff">Actividad Económica</label>
                                <select class="form-control" id="Actividad_economica" name="Actividad_economica" required>
                                    <option value="Agropecuario">Agropecuario</option>
                                    <option value="Servicios">Servicios</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Transporte">Transporte</option>
                                    <option value="Comercio">Comercio</option>
                                    <option value="Financiero">Financiero</option>
                                    <option value="Construcción">Construcción</option>
                                    <option value="Minero y energético">Minero y energético</option>
                                    <option value="Comunicaciones">Comunicaciones</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label style="color:#ffff">Documento de identidad</label>
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
                                <center>
                                <h4 style="color: #ffff; padding-top: 10px"><u>Olvidaste Tu Contraseña?</u></h4>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php 
    }else{     
    ?>
    <div style="margin-left: 40vw;" id="PIN-form">
        <div >
            <h1  style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 70px; " >RESTABLECER CONTRASEÑA</h1>
            <form action="../si/restablecer.php" method="POST">
                <div class="form-group">
                    <label style="color:#ffff"> Nueva Contraseña</label>
                    <input type="text" class="form-control" id="nueva_contra" name="nueva_contra" required>
                </div>
                <div class="form-group">
                    <label style="color:#ffff"> Confirmar Nueva Contraseña</label>
                    <input type="text" class="form-control" id="confirmar_nueva_contra" name="confirmar_nueva_contra" required>
                    <input type="hidden" id="documento" name="documento" value="<?php echo $documento; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg"><strong>Restablecer</strong></button>
                </div>
            </form>
        </div>
    </div>
    <?php
    }
    ?>
</body>

</html>
