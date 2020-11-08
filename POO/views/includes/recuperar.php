<?php 
include("../database/database.php");
require_once ('../../mobile/Mobile_Detect.php');
$detect = new Mobile_Detect();
session_start();
$datos_incorrectos = '';
if(isset($_SESSION['datos_incorrectos'])){
    $datos_incorrectos = $_SESSION['datos_incorrectos'];
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
    <title>Registro</title>
    <link href="../assets/elementos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <script src="../assets/elementos/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets\css\stylesR.css">
    <link href="https://fonts.googleapis.com/css2?family=Bubbler+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<header>
    <a href="../../index.php"><img style="width:50px;transform: rotate(-90deg); margin-top: 30px; margin-left: 10px; " src="../assets/img/next.png"></a>
</header>

<!------ Include the above in your HEAD tag ---------->

<script type="text/javascript">
      var verifyCallback = function(response) {
        alert( response );
      };
      var widgetId1;
      var onloadCallback = function() {
        // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
        // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
        widgetId1 = grecaptcha.render('captchav2', {
          'sitekey' : '6Lcvhc4ZAAAAAAPMvUDwQ8yvLetUarwazNfCr4D8',
          'theme' : 'light'
        });
      };
</script> 




<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form id="contactfrm">
                        <!--Body-->
                        <h1  style="color:  #ffe000; font-family: 'Bungee Inline', cursive; font-size: 50px; margin-bottom: 3vw;" >REGISTRO</h1>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <center>
                            <div id="captchav2">
                            </div>
                        <center>
                        <div id="error_captchav2" name="error_captchav2" style="color:red;">El recaptcha no ha sido diligenciado, porfavor realizalo.</div>
                        <br/>
                        <div class="text-center">
                            <div id="status"></div>
                            <button type="submit" data-sitekey="6LdYucwZAAAAAPZUXj7hXT5qcW22hWD_V2sO15Tu" data-callback="onSubmit" data-action="submit" class="g-recaptcha btn btn-success btn-lg rounded-0 py-2"><strong>ENVIAR</strong></button>
                        </div>
                    </form>
                    <!--Form with header-->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>

<script>
        function onSubmit(token) {
        var formData = $("#contactfrm").serialize();
        var captcha = grecaptcha.getResponse(widgetId1);
        if(captcha == ''){
          $("#error_captchav2").show();
        }else{
            $("#error_captchav2").hide();
          $(".has-error").removeClass("has-error");
            $.ajax({
                type: "POST",
                url: '../si/enviar_recuperar.php',
                data: formData,
                success: function (data) {
                    window.location="ingresar_pin.php";
                }
            });
        }
        
        
        
    };
    $(document).ready(function (e) {
        $("#error_captchav2").hide();
    });

    
</script>


                </div>
	</div>
</div>

<!-- captcha -->
<script src="https://www.google.com/recaptcha/api.js"></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>