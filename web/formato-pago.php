<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../public/images/tribu-logo.ico"/>
	<title>Tribu - WebApp</title>
</head>
<body>
	<script src="../public/jspdf/jspdf.min.js"></script>
	<script>

		function getParameterByName(name) {
			name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
			var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
			return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}

		var pdf = new jsPDF();
		/**/
		var idServicio = getParameterByName('id');
		var nombreUsuario = getParameterByName('usuario');
		var eMail = getParameterByName('email');
		var fechaCreada = getParameterByName('creacion');
		var fechaVencimiento = getParameterByName('vencimiento');
		var fechaRenovacion = getParameterByName('renovacion');
		/**/
		/**/
		var logo = new Image();
		logo.src = '../public/images/tribu-logo.png';
		pdf.addImage(logo, 'PNG', 15, 15,20,20);
		pdf.text(50,20,'Servicio : '+idServicio);
		pdf.text(50,30,'Nombre : '+nombreUsuario);
		pdf.text(50,40,'Email : '+eMail);
		pdf.text(50,50,'Fecha de creación de la cuenta : '+fechaCreada);
		pdf.text(50,60,'Fecha de vencimiento : '+fechaVencimiento);
		pdf.text(50,70,'Fecha de renovación : '+fechaRenovacion);
		pdf.text(50,80,'Monto de pago : $ 350.00 MX');



		pdf.save('formato-pago-'+idServicio+'.pdf');
		/**/
	</script>
	<?php print '<meta http-equiv="REFRESH" content="0; url=subscripcion-anual.php">'; ?>
</body>
</html>