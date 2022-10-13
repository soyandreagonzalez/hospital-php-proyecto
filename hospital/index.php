<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EPS</title>
</head>
<body>
<h2>Agenda tu cita</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Crear cuenta</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Usa tu correo para registrarte.</span>
			<input type="text" placeholder="Nombre" />
			<input type="email" placeholder="Correo" />
			<input type="password" placeholder="Contraseña" />
			<button>Registrar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Inicia sesión</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Usa el correo registrado.</span>
			<input type="email" placeholder="Correo" />
			<input type="password" placeholder="Contraseña" />
			<a href="#">¿Olvidaste tu contraseña?</a>
			<button>Iniciar sesión</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>¡Bienvenido!</h1>
				<p>¿Ya tienes una cuenta para agendar tus citas?</p>
				<button class="ghost" id="signIn">Inicia sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>¡Bienvenido!</h1>
				<p>¿Aún no tienes cuenta para agendar tu cita?</p>
				<button class="ghost" id="signUp">Registrate</button>
			</div>
		</div>
	</div>
</div>
<script src="appi.js"></script>
</body>
</html>