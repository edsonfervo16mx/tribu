<?php 
	require_once 'core/config/Connection.php';
	require_once 'core/class/Autoload.php';
	/*
	$atr = array(
			'nombre' => 'iClounder',
			'eslogan' => 'Desarrollo de Software',
			'correo' => 'web@iclounder.com',
			'telefono' => '9331567533',
			'logo' => '',
			'descripcion' => 'Empresa de desarrollo de software, soluciones integrales',
			'perfil_administrador_clave' => 1,
			);
	/**/
	/**/
	$tmp = new Organizacion;
	$datos = $tmp->listAll($key,1);
	print_r($datos);
	#$tmp->modify($key,$atr);
	/**/
?>