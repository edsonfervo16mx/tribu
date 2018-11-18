<?php 
	require_once 'core/config/Connection.php';
	require_once 'core/class/Autoload.php';
	/**/
	$perfil = new PerfilAdministrador;
	$datos = $perfil->schema($key);
	print_r($datos);
	/**/
?>