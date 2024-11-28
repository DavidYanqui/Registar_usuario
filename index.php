<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, inicial-scale=1.0">
	<title> Login y Registro - Sistema de Autentificación</title>
	<link rel="stylesheet" type="text/css" href="EstiloExterno/css/estilos.css">
</head>

<body>
	<main>

		<!--Es un contenedor donde se va a realizar el inicio de sesión o el registro. -->

		<div class="contenedor_todo">
			<div class="caja_trasera">
				<div class="caja_trasera_login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>Inicia Sesión para ingresar a la página</p>
					<button id="btn_iniciar-sesion"> Iniciar Sesión</button>
				</div>
				<div class="caja_trasera_registrarse">
					<h3>¿Aún no tengo una cuenta?</h3>
					<p>Registrate para iniciar sesión</p>
					<button id="btn_iniciar-registrarse"> Regístrarse</button>
				</div>
			</div>
			
			<!--Es un contenedor donde se va a realizar los formularios de registro. -->

			<div class="contenerdo_login-registrarse">
				<!--Pertenece al login-->
				<form action="php/login_usuario.php" method="POST" class="formulario_login">		
					<h2>Iniciar Sesión</h2>
					<input type="text" placeholder="Correo Electronico" name="correo">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<button>Entrar</button>
				</form>	

				<!--Pertenese al Regístro-->
				<form action="php/registro_usuario.php" method="POST" class="formulario_registrarse">
					<h2>Regístrate</h2>
					<input type="text" placeholder="Nombre Completo" name="nombre_completo">
					<input type="text" placeholder="Correo Electronico" name="correo">
					<input type="text" placeholder="Usuario" name="usuario">
					<input type="password" placeholder="Contraseña" name="contrasena">
					<button>Regístrase</button>
				</form>	

			</div>


		</div>

	</main>
	<script src="EstiloExterno/js/script.js"></script>






</body>
</html>