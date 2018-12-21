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
					<div class="column is-4 is-offset-4">
						<h3 class="title has-text-grey">Iniciar sesión</h3>
						<p class="subtitle has-text-grey">Ingresar sus datos para acceder.</p>
						<div class="box">
							<figure class="avatar">
								<img src="../public/images/tribu-logo.png">
							</figure>
							<form action="acreditacion/login.php" method="POST">
								<div class="field">
									<div class="control">
										<div class="control">
											<input type="text" name="email" placeholder="Ingrese su correo electrónico"  v-model="logEmailValue" v-bind:class="logEmailInput" v-on:keyup="logValidateEmail()">
											<p v-bind:class="logEmailBoxAlert">{{logEmailAlert}}</p>
										</div>
									</div>
								</div>
								<div class="field">
									<div class="control">
										<div class="control">
											<input type="password" name="password" placeholder="Ingrese su contraseña" v-model="logPasswordValue" v-bind:class="logPasswordInput" v-on:keyup="logValidatePassword()">
											<p v-bind:class="logPasswordBoxAlert">{{logPasswordAlert}}</p>
										</div>
									</div>
								</div>
								<div class="field">
									<?php
										if (@$_GET['m'] == true) {
											echo '
												<article class="message is-success" v-if="!logPasswordValue">
													<div class="message-body">
														Ya puedes, iniciar sesión
													</div>
												</article>
											';
										}
									?>
									<p class="is-size-7 margin-min">
										Si no tienes una cuenta en tribu, deberás <a href="../">registrarte</a>, para poder disfrutar de los beneficios de la plataforma.
									</p>
								</div>
								<button class="button is-primary is-medium is-fullwidth" v-bind:disabled="logButtonDisabled">Iniciar sesión</button>
							</form>
						</div>
						<p class="has-text-grey">
							<a href="../">Regresar</a> &nbsp;·&nbsp;
							<a href="recuperar-cuenta.php">Recuperar contraseña</a>
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