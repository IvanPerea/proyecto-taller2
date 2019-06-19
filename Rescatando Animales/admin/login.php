<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Iniciar sesión</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nombre usuario</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Contraseña</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Iniciar Sesión</button>
		</div>
		<p>
		¿Todavía no eres miembro? <a href="register.php">Regístrate</a>
		</p>
		<p>
		<a href="http://localhost/proyecto-taller2/Rescatando%20Animales/">Regresar a la página principal</a>
		</p>
	</form>


</body>
</html>