<?php 
	if (@$_POST['emaildestino']) {
		require_once '../../core/config/Connection.php';
		require_once '../../core/class/Autoload.php';
		$perfil = new PerfilAdministrador;
		$data = $perfil->viewExist($key,$_POST['emaildestino']);
		foreach ($data as $colPerfil) {}
		$generador_id = $colPerfil->id_cuenta;
		ini_set( 'display_errors', 1 );
		error_reporting( E_ALL );
		$from = "tribu@iclounder.com";
		$to = $_POST['emaildestino'];
		$subject = "Clave para activar tu cuenta Tribu Platform";
		$message = "Para activar tu cuenta, ingresa la siguiente clave: ".$generador_id;
		$headers = "From:" . $from;
		mail($to,$subject,$message, $headers);
		print '<meta http-equiv="REFRESH" content="0; url=../activar-cuenta.php?email='.$_POST['emaildestino'].'">';
	}else{
		print '<meta http-equiv="REFRESH" content="0; url=../activar-cuenta.php">';
	}
?>