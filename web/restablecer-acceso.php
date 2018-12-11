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
						<h3 class="title has-text-grey">Restablecer contraseña</h3>
						<p class="subtitle has-text-grey">Ingresar sus datos para poder restablecer tu acceso.</p>
						<div class="box">
							<figure class="avatar">
								<img src="../public/images/tribu-logo.png">
							</figure>
							<form>
								<div class="field">
									<div class="control">
										<input type="email" placeholder="Ingrese su correo electrónico"  v-model="upEmailValue" v-bind:class="upEmailInput" v-on:keyup="upValidateEmail()">
										<p v-bind:class="upEmailBoxAlert">{{upEmailAlert}}</p>
									</div>
								</div>
								<div class="field">
									<div class="control">
										<input type="text" placeholder="Ingresar clave de recuperación"  v-model="upClaveValue" v-bind:class="upClaveInput" v-on:keyup="upValidateClave()">
										<p v-bind:class="upClaveBoxAlert">{{upClaveAlert}}</p>
									</div>
								</div>
								<div class="field">
									<div class="control">
										<input type="password" placeholder="Ingresar nueva contraseña"  v-model="upPasswordValue" v-bind:class="upPasswordInput" v-on:keyup="upValidatePassword()">
										<p v-bind:class="upPasswordBoxAlert">{{upPasswordAlert}}</p>
									</div>
								</div>
								<div class="field">
									<div class="control">
										<input type="password" placeholder="Repetir contraseña"  v-model="upPassword2Value" v-bind:class="upPassword2Input" v-on:keyup="upValidatePassword2()">
										<p v-bind:class="upPassword2BoxAlert">{{upPassword2Alert}}</p>
									</div>
								</div>
								<div class="field">
									<p class="is-size-7 margin-min">
										Escribe una nueva contraseña para acceder a la plataforma.
									</p>
								</div>
								<button class="button is-block is-success is-large is-fullwidth" v-bind:disabled="upButtonDisabled">Restablecer</button>
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