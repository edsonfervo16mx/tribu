<?php 
	require_once '../core/config/Connection.php';
	require_once '../core/class/Autoload.php';
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
					<div class="column is-6 is-offset-3">
						<h3 class="title has-text-grey">Activar cuenta</h3>
						<p class="subtitle has-text-grey">Ingresar la clave de activación para verificar su cuenta.</p>
						<div class="box">
							<figure class="avatar">
								<img src="../public/images/tribu-logo.png">
							</figure>
							<form action="acreditacion/cuenta-activate.php" method="POST">
								<div class="field">
									<div class="control">
										<input type="email" name="email" placeholder="Ingrese su correo electrónico"  v-model="acEmailValue" v-bind:class="acEmailInput" v-on:keyup="acValidateEmail()">
											<p v-bind:class="acEmailBoxAlert">{{acEmailAlert}}</p>
									</div>
								</div>
								<div class="field">
									<div class="control">
										<input type="password" name="clave" placeholder="Ingresar clave de activación"  v-model="acIdValue" v-bind:class="acIdInput" v-on:keyup="acValidateId()">
											<p v-bind:class="acIdBoxAlert">{{acIdAlert}}</p>
									</div>
								</div>
								<div class="field">
									<?php 
										if (@$_GET['w'] == true) {
											echo '
												<article class="message is-danger" v-if="!acIdStatus || !acEmailStatus">
													<div class="message-body">
														Error, intente de nuevo
													</div>
												</article>
											';
										}
									?>
									<p class="is-size-7 margin-min">
										Para activar su cuenta, deberás ingresar la clave de activación enviada por correo electrónico.
									</p>
								</div>
								<button class="button is-block is-warning is-large is-fullwidth" v-bind:disabled="actButtonDisabled">Activar</button>
							</form>
							<form action="acreditacion/email-verificacion.php" method="POST">
								<input type="email" name="emaildestino" v-model="acEmailValue" required hidden>
								<p class="is-size-7 margin-min">
									No he recibido la clave de activación, enviar de nuevo.
								</p>
								<button class="button is-small is-text" v-bind:disabled="!acEmailStatus">Reenviar clave</button>
							</form>
						</div>
						<p class="has-text-grey">
							<a href="iniciar-sesion.php">Iniciar sesión</a> &nbsp;·&nbsp;
							<a href="../">Registrarme</a>
						</p>
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