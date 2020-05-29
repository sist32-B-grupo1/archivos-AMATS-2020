<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="login-box">
		<center><img class="logo" src="fotos/logo.jpg">
			<h3>Inicio de sesion</h3></center><br>
			<form method="post" action="../php/login.php">
				<!--username-->
				<label>Username:&nbsp;&nbsp;&nbsp;</label><input type="text" name="username" placeholder="ingrese username">
				<!--contraseña-->
				<label>Contraseña:&nbsp;</label> <input type="password" name="contrasena" placeholder="ingrese contraseña"><br>
				<center><button type="submit" name="ingresar" value="ingresar">Ingresar</button></center>
			</form>
			<br>
			<center><a href="#">ir al inicio</a></center>
	</div>
</body>
</html>