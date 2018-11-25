<?php 
	require_once 'core/config/Connection.php';
	require_once 'core/class/Autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tribu - WebApp</title>
</head>
<body>
	<?php 
		/*
		$atr = array(
				'fecha' => date('Y-m-d'),
				'titulo' => utf8_decode('Conferencia de Software Libre'),
				'descripcion' => utf8_decode('Conferencia de Software Libre, en Villahermosa'),
				'adjunto' => '',
				'organizacion_clave' => 1,
				);
		/**/
		/**/
		$tmp = new RelPersonaNota;
		$datos = $tmp->schema($key);
		print_r($datos);
		#$tmp->listAll($key,1);
		#print_r($atr);
		/**/
		#print_r($atr);
	?>
</body>
</html>