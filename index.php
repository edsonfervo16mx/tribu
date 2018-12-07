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
	<title>Tribu - WebApp</title>
	<link rel="stylesheet" href="public/bulma/bulma.css">
	<link rel="stylesheet" href="public/main/main.css">
</head>
<body>
	<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-item" href="https://bulma.io">
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
				<a class="navbar-item">
					Inicio
				</a>
				<a class="navbar-item">
					Funciones
				</a>
				<a class="navbar-item">
					Planes
				</a>
				<a class="navbar-item">
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
						<a class="button is-success">
							<strong>Regístrate</strong>
						</a>
						<a class="button is-light">
							Iniciar sesión
						</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<section class="hero is-light">
		<div class="hero-body">
			<div class="container">
				<div class="columns">
					<div class="column is-two-thirds">
						<div class="has-text-centered">
							<h1 class="title">
								Title
							</h1>
							<h2 class="subtitle">
								Subtitle
							</h2>
						</div>
					</div>
					<div class="column">
						<div class="card">
							<div class="card-content">
								<form action="">
									<div class="field">
										<label class="label">Nombre de Usuario</label>
										<div class="control">
											<input class="input" type="text" placeholder="Ingrese su nombre de usuario">
										</div>
									</div>
									<div class="field">
										<label class="label">Correo electrónico</label>
										<div class="control">
											<input class="input" type="text" placeholder="Ingrese su correo electrónico">
										</div>
									</div>
									<div class="field">
										<label class="label">Contraseña</label>
										<div class="control">
											<input class="input" type="password" placeholder="Ingrese su contraseña">
										</div>
									</div>
									<p class="is-size-7 margin-min">
										Asegúrese de que tenga más de 15 caracteres, o al menos 8 caracteres, incluido un número y una letra minúscula. Son buenas prácticas de contraseña.
									</p>
									<a class="button is-success is-medium is-fullwidth">Registrarme</a>
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
	<section>
		<h1 class="title is-size-1 has-text-centered heading">Funciones</h1>
		<div class="container">
			<div class="columns">
				<div class="column">
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
						<img class="is-rounded" src="public/images/funcion1.jpg">
					</figure>
				</div>
			</div>
		</div>
	</section>
	<section>
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
							<h1 class="price is-size-1 has-text-centered has-text-success"> Gratis <small class="is-size-4 has-text-grey"> / 3 meses</small></h1>
							<a class="button is-success is-rounded is-large is-fullwidth margin-medium">Registrar</a>
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
							<h1 class="price is-size-1 has-text-centered has-text-success"> $389.00 <small class="is-size-4 has-text-grey">MX / Anual</small></h1>
							<a class="button is-success is-rounded is-large is-fullwidth margin-medium">Registrar</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<section class="hero is-dark margin-medium">
		<div class="hero-body">
			<div class="container has-text-centered">
				<h1 class="title is-size-1 has-text-centered heading">Clientes</h1>
				<div class="columns">
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
					</div>
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
					</div>
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
					</div>
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
					</div>
					<div class="column">
						<figure class="image">
						  <img class="is-rounded" src="https://bulma.io/images/placeholders/256x256.png">
						</figure>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
		/*
		$tmp = new VinculoAviso;
		$datos = $tmp->schema($key);
		print_r($datos);
		/**/
	?>
	<script src="public/bulma/bulma.js"></script>
</body>
</html>