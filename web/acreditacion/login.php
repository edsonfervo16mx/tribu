<?php 
	if (@$_POST['email']== true && @$_POST['password']) {
		require_once '../../core/config/Connection.php';
		require_once '../../core/class/Autoload.php';
		$perfil = new PerfilAdministrador;

		$data = $perfil->viewExist($key,$_POST['email']);
		foreach ($data as $colPerfil) {}

		if ($colPerfil->correo) {
			$data2 = $perfil->viewDataForEmail($key,$colPerfil->correo);
			foreach ($data2 as $colPerfilAdmin) {}
			if ($colPerfilAdmin->correo == $_POST['email'] && $colPerfilAdmin->password == md5($_POST['password'])) {
				$_SESSION['id']=md5($colPerfilAdmin->clave).'/'.$colPerfilAdmin->clave;
				$_SESSION['user']=$colPerfilAdmin->nombre;
				$_SESSION['email']=$colPerfilAdmin->correo;
				$_SESSION['created']=$colPerfilAdmin->inicio_cuenta;
				$_SESSION['expiration']=$colPerfilAdmin->vencimiento_cuenta;
				$_SESSION['status']=$colPerfilAdmin->estado_cuenta;

				if ($_SESSION['status'] == 'active') {
					if ($_SESSION['expiration'] >= date('Y-m-d')) {
						echo 'exito';
					}else{
						print '<meta http-equiv="REFRESH" content="0; url=../subscripcion-anual.php">';
					}
				}else{
					//inactiva
					session_destroy();
					print '<meta http-equiv="REFRESH" content="0; url=../activar-cuenta.php">';
				}
			}else{
				//error correo y/o password incorrecto
				session_destroy();
				print '<meta http-equiv="REFRESH" content="0; url=../iniciar-sesion.php?w=true&e=1&email='.$_POST['email'].'">';
			}
		}else{
			//error, el correo no tiene una cuenta vinculada
			session_destroy();
			print '<meta http-equiv="REFRESH" content="0; url=../iniciar-sesion.php?w=true&e=2&email='.$_POST['email'].'">';
		}
	}else{
		//error, no ha ingresado los datos
		session_destroy();
		print '<meta http-equiv="REFRESH" content="0; url=../iniciar-sesion.php?w=true&e=3&email='.$_POST['email'].'">';
	}
?>