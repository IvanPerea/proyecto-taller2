<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap login/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php login/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Logueo</h2>

		<form role="form" name="login" action="php login/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Admin</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contraseña</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
		  </div>

		  <button type="submit" class="btn btn-default">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>