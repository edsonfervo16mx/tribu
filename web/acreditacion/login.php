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
			if ($colPerfilAdmin->correo == $_POST['email'] && $colPerfilAdmin->password == $_POST['password']) {
				$_SESSION['id']=$colPerfilAdmin->clave;
				$_SESSION['user']=$colPerfilAdmin->nombre;
				$_SESSION['email']=$colPerfilAdmin->correo;
				$_SESSION['expiration']=$colPerfilAdmin->vencimiento_cuenta;
				$_SESSION['status']=$colPerfilAdmin->estado_cuenta;

				if ($_SESSION['status'] == 'active') {
					if ($_SESSION['expiration'] < date('Y-m-d')) {
						echo 'exito';
					}else{
						echo 'vencida';
					}
				}else{
					echo 'inactiva';
				}
			}else{
				echo 'error, correo y/o password';
			}
		}else{
			echo 'error, el correo no tiene una cuenta vinculada';
		}
	}else{
		echo 'error, no ha ingresado los datos';
	}
?>