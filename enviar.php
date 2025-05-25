<?php
	$datos = $_POST["datos"];
	$nombre = $datos[1];
	$mail = $datos[2];
	$asunto = $datos[3];
	$comentario = $datos[4];
	
	$header = 'From: ' . $mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
	$mensaje .= "Su e-mail es: " . $mail . " \r\n";
	$mensaje .= "Mensaje: " . $comentario . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$para = 'miguel.fernandez@salesianoslosboscos.com';

	mail($para, $asunto, utf8_decode($mensaje), $header);
	echo "Consulta enviada. Gracias por tu comentario.";
?>