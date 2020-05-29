<!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuarios</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/registro.css">
</head>
<body>
	<?php 
    require_once('menuadmin.php');  
    ?>
    <center>
		<br>
		<div class="registro-box">
			<br>
			<center>
				<h3>Registro de Usuarios</h3>
			</center> 
			<br>
			<br>
			<form method="post">
				<label>Usuario</label>
				<input type="text" name="usuario">
				<label>Contraseña</label>
				<input type="password" name="contrasena">
			<label>Ingresar el tipo de usuario:</label>
			<select name="rol" id="">
				<?php
				require_once("../clases/clases.php");
				$conn= new BaseDatos();
				$consultar = $conn->busqueda('rol');

				foreach ($consultar as $campo){
					$idrol=$campo["idrol"];
					$rol=$campo["nombrerol"];
				?>
				<option value="<?php echo $idrol; ?>"><?php echo $rol; ?></option>
			<?php
			}
			?>	
			</select>
			<br><br>
			<center><button type="submit" name="agregar">Agregar</button></center>
			
		
		</form>
		</div>
	</center>
	<br><br>
	
	<form method="post" action="ingresousuarios.php">
		<center><button type="submit" name="visualizar" style="border: none; outline: none; width: 300px; height: 40px; background: #fe3686; color: white; font-size: 15px; border-radius: 10px; cursor: pointer;">Visualizar usuarios</button></center>
	</form>
</body>
</html>