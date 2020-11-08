<?php
require '../database/database.php';
session_start();

$captchaSecretKey = "6LdYucwZAAAAALDXDym_u4NHxMzWCMpzXnfnQoWB";
//reCAPTCHA validation
if (isset($_POST['g-recaptcha-response'])) {

	$postData = array(
		'secret' => $captchaSecretKey,
		'response' => $_POST['g-recaptcha-response']
    );
    $url = "https://www.google.com/recaptcha/api/siteverify";

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postData));
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$serverResponse = curl_exec($curl);

	if(json_decode($serverResponse,true)['success'] == 1)
	{
		if (isset($_POST['email'])){
            $email = $_POST['email'];
            $query = ("SELECT * FROM cliente WHERE Email = '$email'");
            $consulta = mysqli_query($con, $query);
            $array = mysqli_fetch_array($consulta);
            $registros = mysqli_num_rows($consulta);
            if($registros > 0){
                $name = $array['Nombre'];
                $documento = $array['Documento'];
                $query2 = ("DELETE FROM tokens WHERE cliente_documento = '$documento'");
                $consulta2 = mysqli_query($con, $query2);
                $j = 1;
                for($i = 0; $i < $j; $i++){
                    $pin = random_int(1001, 9999);
                    $query3 = ("SELECT * FROM tokens WHERE token = '$pin'");
                    $consulta3 = mysqli_query($con, $query3);
                    if(mysqli_num_rows($consulta3) > 0){
                        $j++;
                    }
                }
                $query4 = ("INSERT INTO tokens (token, cliente_documento, utilizado) VALUES ('$pin', '$documento','0')");
                $consulta4 = mysqli_query($con, $query4);
            
                $to = "saenz292761@gmail.com";
                //$to = $array['Email'];
                $from = "noreply@tyreagencia.com";
                $s = 'Recuperar Contraseña';
                $m = '<strong>Señor/a: </strong>'.$name.'<br/> Por favor ingrese a este link: https://tyreagencia.com/POO/views/ingresar_pin.php <br/>Ingrese este pin para poner restablecer su contraseña:'.$pin;
                $h .= 'Content-type: text/html; charset=UTF-8' . PHP_EOL;
                $h .= "from: TyreAgencia\n";
                $h .= "MIME-Version: 1.1\n";
                $h .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

                if ( mail($to, $s, $m, $h)){
                    echo "success";
                }else{
                    echo"there is a problem";
                }
                $_SESSION['token_recuperar'] = "si";
            }
        }
	
	}
	else
	{
		echo '<b>Captcha</b> Validation Required!';
	
	}	
}


?>