<!DOCTYPE html>
<html>
<head>
	<title>Registrar Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/registro.css">
	<link rel="stylesheet" type="text/css" href="../css/tabla.css">
</head>
<body>
	<?php 
    require_once('menuadmin.php');  
    ?>
    <center>
		<br>
		<div class="registro-box">
			<br>
				<h3 style="font-family: 'gisha'; text-align: center;"><b>Registro de Usuarios</b></h3> 
			<br>
			<form method="post" action="ingresousuarios.php">
				<label><b>Usuario:</b></label>
				<input type="text" name="usuario" id="usuario"><br><br>
				<label><b>Contraseña:</b></label>
				<input type="password" name="contrasena" id="contrasena">
			<label><b>Ingresar el tipo de usuario:</b></label><br>
			<select name="rol" id="">
				<!--aqui lo que se esta haciendo es llamar los roles desde la base de datos para que se muesten en el select, usando la consulta buscar-->
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

	<?php 
require_once('../clases/clases.php');
//INGRESAR DATOS A LA BASE DE DATOS 
$conn= new BaseDatos();
$usuario="";
$contrasena="";
$rol="";


if (isset($_POST['agregar'])) 
{
	$usuario=$_POST['usuario']; 
	$rol=$_POST["rol"];
	$contrasena=$_POST['contrasena'];

	//INCRIPTACION DE CONTRASEÑA
	$metodo = "aes-256-cbc";
	$iv = base64_decode("C9fBx11EWtYTL1/M8jfstw==");
	$encriptar = function ($valor) use ($metodo, $contrasena, $iv){

	return openssl_encrypt($valor, $metodo, $contrasena, false, $iv);

	};

	$contrasenaoriginal=$_POST['contrasena'];
    $contraencriptada= $encriptar($contrasenaoriginal); 

	$conn-> insertar("usuario(usuario,contrasena,idrol)","'$usuario','$contraencriptada','$rol'");
}

?>
	<form method="post" action="ingresousuarios.php">
		<center><button type="submit" name="visualizar" style="border: none; outline: none; width: 300px; height: 40px; background: #fe3686; color: white; font-size: 15px; border-radius: 10px; cursor: pointer;">Visualizar usuarios</button></center></form>

<br><br>



<?php

//MOSTRAR LOS DATOS QUE ESTAN EN LA BASE DE DATOS 
include_once('../clases/clases.php');


$conn=  new BaseDatos();

if (isset($_POST["visualizar"])) 
{
	echo "<center><h4>Lista de usuarios registrados</h4></center><br>";

	$datos= $conn->mostrar("usuario");

$tabla="<center><table class=diseño>
        <thead class=diseño><tr>
                  <th class=diseño>&nbsp;#</th>
                  <th class=diseño>&nbsp;Usuario</th>
                  <th class=diseño> &nbsp;Tipo de usuario</th>
                  <th class=diseño><center>Acción</center></th>


        </thead></tr>";

$datosTabla="";


foreach ($datos as $dato) 
{

	$datosTabla=$datosTabla.'<tbody><tr>

	                           <th class=diseño> &nbsp;'.$dato['idusuario'].'</th>
	                           <td class=diseño> &nbsp;'.$dato['usuario'].'</td>
	                           <td class=diseño> &nbsp; &nbsp;'.$dato['idrol'].'</td>
	                           <td>
	                           <button type=submit name=modificar style="border: none; outline: none; width: 99px; height: 40px; background: #fcfaf1; color: #343749; font-size: 15px; border-radius: 10px; cursor: pointer;">

	                      <a href="editar.php?id='.$dato['idusuario'].'">Editar</a> 
	                           </button>

	                           <button type=submit name=eliminar style="border: none; outline: none; width: 99px; height: 40px; background: #fcfaf1; color: #343749; font-size: 15px; border-radius: 10px; cursor: pointer;">
	        
	                   <a href="eliminar.php?id='.$dato['idusuario'].'">eliminar</a>
	                            </button></td>
	                         
	                         </tr></tbody>';
}

echo $tabla.$datosTabla."</table></center>";
}


echo "<br><br><br><br><br><br><br>";
require_once("../include/pie.php");
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>