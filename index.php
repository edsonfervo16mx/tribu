<?php 
	require_once 'core/config/Connection.php';
	require_once 'core/class/Autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="public/images/tribu-logo.ico"/>
	<title>Tribu - WebApp</title>
	<link rel="stylesheet" href="public/bulma/bulma.css">
	<link rel="stylesheet" href="public/main/main.css">
</head>
<body>
	<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-item" href="#inicio">
				<img src="public/images/bulma.png" width="112" height="28">
			</a>
			<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>
		<div id="navbarBasicExample" class="navbar-menu">
			<div class="navbar-start">
				<a class="navbar-item" href="#inicio">
					Inicio
				</a>
				<a class="navbar-item" href="#funciones">
					Funciones
				</a>
				<a class="navbar-item" href="#planes">
					Planes
				</a>
				<a class="navbar-item" href="#clientes">
					Clientes
				</a>
				<div class="navbar-item has-dropdown is-hoverable">
					<a class="navbar-link">
						Ayuda y aprendizaje
					</a>
					<div class="navbar-dropdown">
						<a class="navbar-item">
							¿Por qué Tribu?
						</a>
						<hr class="navbar-divider">
						<a class="navbar-item">
							Manual de uso
						</a>
					</div>
				</div>
			</div>
			<div class="navbar-end">
				<div class="navbar-item">
					<div class="buttons">
						<a class="button is-primary" onclick="registro()">
							<strong>Regístrate</strong>
						</a>
						<a class="button is-light" href="web/iniciar-sesion.php">
							Iniciar sesión
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<section class="hero is-light" id="inicio">
		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column is-two-thirds">
						<div class="has-text-centered">
							<h1 class="title is-size-1 heading">Tribu</h1>
							<h2 class="subtitle is-size-2">
								Siéntete organizado sin esfuerzo
							</h2>
							<div class="columns">
								<div class="column is-one-third"></div>
								<div class="column">
									<figure class="image">
										<img class="is-rounded" src="public/images/tribu-logo.png">
									</figure>
								</div>
								<div class="column"></div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="card">
							<div class="card-content" id="app">
								<form action="web/acreditacion/cuenta-add.php" method="POST">
									<div class="field">
										<?php echo '<input type="text" name="acreditacion" value="'.rand(1899,1991).'" hidden>'; ?>
									</div>
									<div class="field">
										<label class="label">Nombre de Usuario</label>
										<div class="control">
											<input id="usuario" name="usuario" type="text" placeholder="Ingrese su nombre de usuario" autofocus v-model="usuario" v-bind:class="inputUsuario" v-on:keyup="validarUsuario" required>
											<p v-bind:class="messageUsuario">{{infoUsuario}}</p>
										</div>
									</div>
									<div class="field">
										<label class="label">Correo electrónico</label>
										<div class="control">
											<input type="email" name="email" placeholder="Ingrese su correo electrónico"  v-model="email" v-bind:class="inputEmail" v-on:keyup="validarEmail" required>
											<p v-bind:class="messageEmail">{{infoEmail}}</p>
										</div>
									</div>
									<div class="field">
										<label class="label">Contraseña</label>
										<div class="control">
											<input type="password" name="password" placeholder="Ingrese su contraseña" v-model="password" v-bind:class="inputPassword" v-on:keyup="validarPassword" required>
											<p v-bind:class="messagePassword">{{infoPassword}}</p>
										</div>
									</div>
									<?php 
										if (@$_GET['w'] == true && @$_GET['e']==2) {
											echo '
												<article class="message is-danger" v-if="!statusUsuario || !statusEmail || !statusPassword">
													<div class="message-body">
														Error, el correo electrónico ya tiene una cuenta asociada.
													</div>
												</article>
											';
										}
										if (@$_GET['w'] == true && @$_GET['e']==1) {
											echo '
												<article class="message is-danger" v-if="!statusUsuario || !statusEmail || !statusPassword">
													<div class="message-body">
														Error, intente de nuevo.
													</div>
												</article>
											';
										}
									?>
									<p class="is-size-7 margin-min">
										Asegúrese de que su contraseña tenga al menos 8 caracteres, incluido números y letras. Son buenas prácticas de contraseñas seguras.
									</p>
									<button class="button is-primary is-medium is-fullwidth" v-bind:disabled="isButtonDisabled">Registrarme</button>
									<p class="is-size-7 margin-min">
										Al hacer clic en "Registrarse en Tribu", usted acepta nuestros términos de servicio y declaración de privacidad.
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- pendiente el modal -->
	<div class="modal" id="info">
		<div class="modal-background"></div>
		<div class="modal-content">
			<div class="box">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt repellat, ab, perferendis earum delectus nulla esse, adipisci iure accusantium deleniti voluptatibus quasi quas architecto quos. Non, vero. Porro, numquam, soluta.
			</div>
		</div>
		<button class="modal-close is-large" aria-label="close"></button>
	</div>
	<!-- -->
	<section id="funciones">
		<h1 class="title is-size-1 has-text-centered heading">Funciones</h1>
		<div class="container">
			<div class="columns">
				<div class="column is-two-thirds">
					<article class="message">
					  <div class="message-body">
					    <strong>Módulo de administrador</strong>, administra de manera fácil y rapida el personal de tu organización. Planifica reuniones y eventos, crea asignaciones y/o comisiones, publica información general, avisos, circulares y notas. Gestiona el personal por departamentos o equipos. Genera la calendarización de la empresa con un solo clic.
					  </div>
					</article>
					<article class="message">
					  <div class="message-body">
					    <strong>Módulo de empleado</strong>, consulta información general de la empresa tales como: reuniones, eventos, asignaciones, comisiones y notas. Además podras descargar calendarios personalizados para tu departamento o equipo de trabajo. Además de recibir notificaciones vía correo electronico. 
					    Estar al día nunca fue tan sencillo, optimiza tu tiempo y disfruta de grandes beneficios.
					  </div>
					</article>
				</div>
				<div class="column">
					<figure class="image is-4by3">
						<img class="" src="public/images/funcion2.png">
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section id="planes">
		<h1 class="title is-size-1 has-text-centered heading">Planes</h1>
		<div class="container">
			<div class="columns">
				<div class="column">
					<article class="message is-large">
						<div class="message-header">
							<p>Prueba gratis</p>
						</div>
						<div class="message-body">
							Registrate y obten 3 meses gratis, del uso completo de la plataforma.
							<h1 class="price is-size-1 has-text-centered has-text-primary"> Gratis <small class="is-size-4 has-text-grey"> / 3 meses</small></h1>
							<a class="button is-primary is-rounded is-large is-fullwidth margin-medium">Registrar</a>
						</div>
					</article>
				</div>
				<div class="column">
					<article class="message is-large">
						<div class="message-header">
							<p>Plan anual</p>
						</div>
						<div class="message-body">
							Disfruta de los beneficios de la plataforma a un increible precio.
							<h1 class="price is-size-1 has-text-centered has-text-primary"> $389.00 <small class="is-size-4 has-text-grey">MX / Anual</small></h1>
							<a class="button is-primary is-rounded is-large is-fullwidth margin-medium">Registrar</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<section class="hero is-dark margin-medium" id="clientes">
		<div class="hero-body">
			<div class="container has-text-centered">
				<h1 class="title is-size-1 has-text-centered heading">Clientes</h1>
				<div class="columns">
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="public/images/256x256.png">
						</figure>
					</div>
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="public/images/256x256.png">
						</figure>
					</div>
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="public/images/256x256.png">
						</figure>
					</div>
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="public/images/256x256.png">
						</figure>
					</div>
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="public/images/256x256.png">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="content has-text-centered">
			<p>
				<strong>2018 Tribu WebApp</strong> desarrollado por <a href="https://twitter.com/EdsonFOropeza" target="_blank">Edson Fernando VO</a>.
			</p>
		</div>
	</footer>
	<?php 
		/*
		$tmp = new VinculoAviso;
		$datos = $tmp->schema($key);
		print_r($datos);
		/**/
	?>
	<script src="public/bulma/bulma.js"></script>
	<script src="public/vue/vue.js"></script>
	<script src="public/main/main.js"></script>
</body>
</html>