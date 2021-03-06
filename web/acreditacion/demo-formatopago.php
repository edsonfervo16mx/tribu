<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../../public/images/tribu-logo.ico"/>
	<title>Tribu - WebApp</title>
</head>
<body>
	<script src="../../public/jspdf/jspdf.min.js"></script>
	<script src="../../public/jspdf/jspdf.plugin.autotable.js"></script>
	<script>
		var pdf = new jsPDF();

		/**/
		var logo = new Image();
		logo.src = '../../public/images/tribu-logo.png';
		pdf.addImage(logo, 'PNG',35,30,40,40);
		/**/
		pdf.text('FORMATO DE PAGO TRIBU PLATFORM',20,20);
		pdf.setFontSize(8);
		pdf.text('2018-12-28',182,20);
		pdf.setDrawColor(0);
		pdf.setFillColor(255,231,0);
		pdf.rect(100, 25, 100, 50, 'F');
		pdf.setTextColor(255,255,255);
		pdf.text(110,38,'Total a pagar');
		pdf.setFontSize(32);
		pdf.text(110,53,'$ 389.00 MX');
		pdf.setFontSize(8);
		pdf.text('La comisión por recepción del pago varía de acuerdo a los terminos\n y condiciones que cada cadena comercial establece.',105,64);

		//Datos del usuario
		pdf.setTextColor(66,66,66);
		pdf.setFontSize(16);
		pdf.text('DATOS DEL USUARIO',20,80);
		pdf.setFontSize(10);
		pdf.setFontType('bold');
		pdf.text('Email: ',20,85);
		pdf.setFontType('');
		pdf.text('pedro@gmail.com',20,90);

		var columns = ["Fecha de registro", "Fecha de vencimiento", "Fecha de renovación"];
		var data = [
		["2018-10-22", "2018-12-22", "2019-12-22"]
		];
		 
		pdf.autoTable(columns,data,
		{ 
			margin:{ top: 93,horizontal: 20 },
			theme: 'plain',
		}
		);

		//vamos con detalle del recibo
		pdf.setTextColor(66,66,66);
		pdf.setFontSize(16);
		pdf.text('DETALLE DEL RECIBO',20,120);
		pdf.setDrawColor(0);
		pdf.setFillColor(244,244,244);
		pdf.rect(20, 130, 180, 25, 'F');
		pdf.setTextColor(40,40,40);
		pdf.setFontSize(12);
		pdf.text('Para que el pago sea aceptado, es necesario introducir exactamente el monto,\nconcepto y CLABE.',25,140);

		//Vamos con los pasos
		pdf.setTextColor(66,66,66);
		pdf.setFontSize(16);
		pdf.text('PASOS PARA REALIZAR EL PAGO',20,170);
		pdf.setDrawColor(0);
		pdf.setFillColor(244,244,244);
		pdf.rect(20, 175, 180, 55, 'F');
		pdf.setTextColor(40,40,40);
		pdf.setFontSize(14);
		pdf.setFontType('bold');
		pdf.text('Desde PractiCaja o Ventanilla',25,185);
		pdf.setFontSize(12);
		pdf.text('CLABE: ',25,195);
		pdf.setFontType('');
		pdf.text('012804027156343859',25,200);
		pdf.setFontType('bold');
		pdf.text('Importe: ',25,205);
		pdf.setFontType('');
		pdf.text('$ 389.00 MX',25,210);
		pdf.setFontType('bold');
		pdf.text('Concepto: ',25,215);
		pdf.setFontType('');
		pdf.text('3 ',25,220);
		pdf.text('NOTA: El titular de la cuenta aparecerá como "Edson Fernando Ventura Oropeza".',25,225);

		//
		pdf.setFontSize(12);
		pdf.text('Por favor, valide que su pago sea acreditado en la plataforma en un plazo de 24 horas.\nSi este no se ve reflejado automáticamente en nuestro sistema, contactenos a tribu@iclounder.com',20,240);
		pdf.text('Ahora también puedes contactarnos vía WhatsApp (+52) 933-153-9379.',20,250);

		
		pdf.setFontSize(10);
		pdf.text('Si tiene alguna duda comuníquese a Tribu Platform al teléfono (+52) 933-153-9379 o al correo tribu@iclounder.com',25,270);
		pdf.setFontType('bold');
		pdf.text('Tribu Platform',95,275);
		pdf.text('2018',103,280);


		pdf.output('save','formato-pago.pdf');
		/**/
	</script>
</body>
</html>