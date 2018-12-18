<?php 
	//activar su cuenta con la clave enviada via correo electronico
	require_once '../../core/config/Connection.php';
	require_once '../../core/class/Autoload.php';

	$perfil = new PerfilAdministrador;

	if ($_POST['email'] == true && $_POST['clave'] == true) {
		$data = $perfil->viewDataForEmail($key,$_POST['email']);
		foreach ($data as $colPerfil) {}
		if ($_POST['clave']== $colPerfil->id_cuenta) {
			if ($colPerfil->estado_cuenta == 'inactive') {
				//activamos su cuenta y redirigimos al login
				$perfil->enableService($key,$colPerfil->clave);	
				print '<meta http-equiv="REFRESH" content="0; url=../iniciar-sesion.php">';
			}else{
				//su cuenta ya está activa redirigir al login
				print '<meta http-equiv="REFRESH" content="0; url=../iniciar-sesion.php">';
			}
		}else{
			print '<meta http-equiv="REFRESH" content="0; url=../activar-cuenta.php?w=true&e=2&email='.$_POST['email'].'">';
		}
	}else{
		print '<meta http-equiv="REFRESH" content="0; url=../activar-cuenta.php?w=true&e=1&email='.$_POST['email'].'">';
	}
?>
