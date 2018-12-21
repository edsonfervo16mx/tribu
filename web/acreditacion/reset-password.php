<?php
	if (@$_POST['email'] == true || @$_POST['clave'] == true || @$_POST['password'] == true || @$_POST['password_c'] == true) {

		require_once '../../core/config/Connection.php';
		require_once '../../core/class/Autoload.php';

		$perfil = new PerfilAdministrador;

		$data = $perfil->viewDataForEmail($key,$_POST['email']);
		foreach ($data as $colPerfil) {}

		if ($colPerfil->id_cuenta == $_POST['clave']) {
			//procedemos a resetear el password del usuario
			if ($_POST['password'] == $_POST['password_c']) {
				$atr = array(
							'clave' => $colPerfil->clave,
							'correo' => $_POST['email'],
							'id_cuenta' => $_POST['clave'],
							'password' => md5($_POST['password']),
							 );
				//Reset password
				$perfil->changePassword($key,$atr);
				//generamos nuevas claves de recuperación
				$generador_id = rand(10000,99999);
				$perfil->changeId($key,$colPerfil->clave,$generador_id);
				print '<meta http-equiv="REFRESH" content="0; url=../iniciar-sesion.php?m=true&email='.$_POST['email'].'">';
			}else{
				print '<meta http-equiv="REFRESH" content="0; url=../restablecer-acceso.php?w=true&e=1&email='.$_POST['email'].'">';
			}
		}else{
			print '<meta http-equiv="REFRESH" content="0; url=../restablecer-acceso.php?w=true&e=2&email='.$_POST['email'].'">';
		}
	}else{
		print '<meta http-equiv="REFRESH" content="0; url=../restablecer-acceso.php?w=true&e=3&email='.$_POST['email'].'">';
	}
?>