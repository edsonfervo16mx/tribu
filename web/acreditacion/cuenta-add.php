<?php 
	if (@$_POST['acreditacion']) {
		require_once '../../core/config/Connection.php';
		require_once '../../core/class/Autoload.php';

		$perfil = new PerfilAdministrador;
		//varificar si tu cuenta de correo ya está asociada a una cuenta 
		$emailList = $perfil->viewExist($key,$_POST['email']);
		foreach ($emailList as $colPerfil) {}
		#echo $colPerfil->correo;
		if ($_POST['email'] != $colPerfil->correo) {
			/**/
			//Generando el id, y las fechas de la subscripcion
			$generador_id = rand(10000,99999);
			$fechaActual = date('Y-m-j');
			$fechaVencimiento = strtotime('+3 month',strtotime($fechaActual));
			$fechaVencimiento = date('Y-m-j',$fechaVencimiento);

			$datosRegistro = array('nombre' => $_POST['usuario'],
									'correo' => $_POST['email'],
									'password' => md5($_POST['password']),
									'id_cuenta' => $generador_id,
									'inicio_cuenta' => $fechaActual,
									'vencimiento_cuenta' =>$fechaVencimiento
							);
			#print_r($datosRegistro);
			$perfil->insert($key,$datosRegistro);
			//Enviar correo de verificación

			ini_set( 'display_errors', 1 );
			error_reporting( E_ALL );
			$from = "tribu@iclounder.com";
			$to = $_POST['email'];
			$subject = "Clave para activar tu cuenta Tribu Platform";
			$message = "Para activar tu cuenta, ingresa la siguiente clave: ".$generador_id;
			$headers = "From:" . $from;
			mail($to,$subject,$message, $headers);
			/**/
			//redireccionar
			print '<meta http-equiv="REFRESH" content="0; url=../activar-cuenta.php?email='.$_POST['email'].'">';
		}else{
			print '<meta http-equiv="REFRESH" content="0; url=../../index.php?w=true&e=2&usuario='.$_POST['usuario'].'&email='.$_POST['email'].'">';
		}
	}else{
		print '<meta http-equiv="REFRESH" content="0; url=../../index.php?w=true&e=1">';
	}
?>