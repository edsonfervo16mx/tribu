<?php 
/* Prueba de envio de correo de verificación*/
	//Teste separado de la aplicación
	ini_set( 'display_errors', 1 );
	error_reporting( E_ALL );
	$from = "tribu@iclounder.com";
	$to = "edson55_@hotmail.com";
	$subject = "Prueba de envio de email con PHP";
	$message = "Esto es un email de prueba enviado con PHP";
	$headers = "From:" . $from;
	mail($to,$subject,$message, $headers);
	echo "Email enviado!!";
/**/
?>