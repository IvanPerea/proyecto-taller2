<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Iniciar sesión</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nombre de usuario</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Contraseña</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Iniciar sesión</button>
		</div>
		<p>
		¿Todavía no eres miembro? <a href="register.php">Regístrate</a>
		</p>
	</form>


</body>
</html>