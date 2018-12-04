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
	<section class="hero is-light is-light is-medium">
		<div class="hero-body">
			<div class="columns">
				<div class="column is-three-fifths">
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
									<label class="label">Correo electronico</label>
									<div class="control">
										<input class="input" type="text" placeholder="Ingrese su nombre de usuario">
									</div>
								</div>
							</form>
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
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
					  </div>
					</article>
					<article class="message">
					  <div class="message-body">
					    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
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
							<button class="delete is-large" aria-label="delete"></button>
						</div>
						<div class="message-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla.Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus.
						</div>
					</article>
				</div>
				<div class="column">
					<article class="message is-large">
						<div class="message-header">
							<p>Plan anual</p>
							<button class="delete is-large" aria-label="delete"></button>
						</div>
						<div class="message-body">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla.Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus.
						</div>
					</article>
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