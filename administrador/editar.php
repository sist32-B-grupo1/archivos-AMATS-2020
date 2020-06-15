<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/registro.css">
</head>
<body style="background: #cfb82b;">

<?php
require_once("menuadmin.php");

require_once('../clases/clases.php');

$conn= new BaseDatos();

$idusuario=$_GET["id"];
$datos=$conn->BusquedaPorCondicion("usuario","idusuario='$idusuario'");
?>

<center>
		<br>
		<div class="registro-box">
			<br>
				<h3 style="font-family: 'gisha'; text-align: center;"><b>Editar usuario</b></h3> 
			<br>
			<form method="post">
				<input type="hidden" name="idusuario" value="">
				<label><b>Usuario:</b></label>
				<input type="text" name="usuarionuevo"><br><br>
			<label><b>Ingresar el tipo de usuario:</b></label><br>
			<select  id="" name="rolnuevo">
				<!--aqui lo que se esta haciendo es llamar los roles desde la base de datos para que se muesten en el select, usando la consulta buscar-->
				<?php
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
			<center><button type="submit" name="editar">Editar</button></center>
			</form>
		</div>
	</center>

<a href="ingresousuarios.php" style="text-decoration: none; text-align: left; font-size: 30px; color: white; "><-- ir atras</a>
<?php
   
    $usuarionuevo="";
	$rolnuevo="";

if (isset($_POST["editar"])) {
	$usuarionuevo=$_POST["usuarionuevo"];
	$rolnuevo=$_POST["rolnuevo"];
	$idusuario=$_POST["idusuario"];

	$editar=$conn->actualizar("usuario","usuario='$usuarionuevo',idrol='$rolnuevo'","idusuario='$idusuario'");
	if ($editar) 
	{
		echo "modificacion exitosa";
		header("location:ingresousuarios.php");
	}else{
		echo "error al modificar";
	}

}

echo "<br><br><br><br><br><br><br><br><br><br>";
require_once("../include/pie.php");
?>
</body>
</html>
