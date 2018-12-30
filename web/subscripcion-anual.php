<?php 
	require_once '../core/config/Connection.php';
	require_once '../core/class/Autoload.php';

	$fechaExpiracion = $_SESSION['expiration'];
	$fechaRenovacion = strtotime('+12 month',strtotime($fechaExpiracion));
	$fechaRenovacion = date('Y-m-j',$fechaRenovacion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../public/images/tribu-logo.ico"/>
	<title>Tribu - WebApp</title>
	<link rel="stylesheet" href="../public/bulma/bulma.css">
	<link rel="stylesheet" href="../public/main/main.css">
</head>
<body>
	<div class="container" id="app">
		<section class="hero is-fullheight">
			<div class="hero-body">
				<div class="container has-text-centered">
					<div class="column is-10 is-offset-1">
						<h3 class="title has-text-grey">Adquiere tu plan</h3>
						<p class="subtitle has-text-grey">Sigue disfrutando por 12 meses más</p>
						<div class="box">
							<article class="message is-warning">
								<div class="message-body has-text-left">
									Para seguir disfrutando de los beneficios de <strong>Tribu Platform</strong>, deberás generar el formato de pago y cubrir el costo de la subscripción anual.<br>
									<div class="columns">
										<div class="column is-9">
											<strong>ID: </strong> <?php echo $_SESSION['id']; ?> <br>
											<strong>Nombre: </strong> <?php echo $_SESSION['user']; ?> <br>
											<strong>Email: </strong> <?php echo $_SESSION['email']; ?> <br>
											<strong>Fecha de registro: </strong> <?php echo $_SESSION['created']; ?> <br>
											<strong>Fecha de vencimiento: </strong> <?php echo $_SESSION['expiration']; ?> <br>
											<strong>Fecha a renovar: </strong><?php echo $fechaRenovacion; ?> <br>
										</div>
										<div class="column is-3">
											<h2 class="price is-size-1 has-text-centered has-text-primary"> 
												$389.00 <small class="is-size-4 has-text-grey">MX / Anual</small>
											</h2>
										</div>
									</div>
								</div>
							</article>
							<p class="is-size-7 margin-min">
								Deberás enviar un correo para confirmar el pago, en caso de no activarse de forma automática en un periodo de 24 horas.
							</p>
							<div class="columns has-text-left">
								<div class="column is-6">
									<?php 
										echo '<a href="formato-pago.php?id='.$_SESSION['id'].'&usuario='.$_SESSION['user'].'&email='.$_SESSION['email'].'&creacion='.$_SESSION['created'].'&vencimiento='.$_SESSION['expiration'].'&renovacion='.$fechaRenovacion.'" class="button is-success is-medium">Descargar formato de pago</a>';?>
									
								</div>
								<div class="column is-6 has-text-right">
									<a href="admin/index.php" class="button is-medium">Omitir</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="../public/bulma/bulma.js"></script>
	<script src="../public/vue/vue.js"></script>
	<script src="../public/main/main.js"></script>
</body>
</html>