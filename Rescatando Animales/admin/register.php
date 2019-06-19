<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registrar</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nombre de usuario</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Contraseña</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirmar contraseña</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Registrar</button>
		</div>
		<p>
			¿Ya eres un miembro? <a href="login.php">Inicia sesión</a>
		</p>
		<FORM NAME="buttonbar">
	<INPUT TYPE="button" VALUE="Volver" onClick="history.back()">
	</FORM>
	</form>
</body>
</html>