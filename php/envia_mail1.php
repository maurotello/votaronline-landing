<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
	$emisor=$_POST['emisor'];
	$mensaje=$_POST['mensaje'];
	$asunto = "Consulta por: " . $_POST['asunto'];

        $destinatario = "info@votaronline.com.ar";

	
	$message = "
				<html>
				<head>
				<title>Nuevo Mensaje desde la web de VOTARONLINE</title>
				</head>
				<body>
				
				<h3>Enviado por: " . $emisor . " | email: " . $destinatario .  "</h3>
				<p> Mensaje: " . $mensaje .  " asunto: " . $_POST['asunto'] . "</p>
				</body>
				</html>";


	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


	//mando el correo...
	mail($destinatario, $asunto, $message,$headers)or die ("Su mensaje no pudo ser enviado");

	echo "<div style=\"float:left; margin-top: 10px; margin-bottom: 10px;  width: 100%; background-color: #48C857; color:#fff; font-weight:bold;  padding:8px; text-align:center;\">Mensaje Enviado !! </div>";
?>
