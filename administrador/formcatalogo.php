<?php 
require_once('../clases/clases.php');
//INGRESAR DATOS A LA BASE DE DATOS 
$conn= new BaseDatos();
$usuario="";
$contrasena="";
$rol="";


if (isset($_POST['enviar'])) 
{
    $idcatalogo=$_POST['tipo']; 
    $imagen=$_FILES['imagen'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];

if (is_uploaded_file ($_FILES['imagen']['tmp_name'])){ 
    $tmp_name = $_FILES["imagen"]["tmp_name"];

    $imagen = "fotoscat/".$_FILES["imagen"]["name"];
    $nombrearchivoSinExtension=substr($imagen,0,strpos($imagen, '.'));
    $extensionArchivo=substr(strrchr($imagen, '.'), 1);

    if (is_file($imagen)) {
      $idUnico=time();
      $imagen = "fotoscat/".$idUnico."-".$_FILES["imagen"]["name"];        
    }
 
    move_uploaded_file($tmp_name,$imagen);


      $conn-> insertar("foto","(idcatalogo,foto,precio,descripcion)","'$idcatalogo','$imagen','$precio','$descripcion'");
  }else{
      echo "<br>No se ha podido subir el formulario";
  }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Catálogo</title>

     <link rel="stylesheet" href="doc.css">
</head>
<?php
require_once("menuadmin.php");
?>
<body>
    <p>CATÁLOGO</p><br><br><br>
    <center>
    <a href="catalogo.php" onclick="mostrar('Regresar'); return false" />Regresar</a><br><br><br>
</center>

  <form action=""  method="post" name="formuñas" enctype="multipart/form-data">

	<label for="precio">Precio</label>
	<input type="text" name="precio" placeholder="Precio del servicio" required />

	<label for="imagen">Imagen</label>
	<input name="imagen" type="file" required>

	<label for="descripcion" />Descripcion</label>
	<input type="text" name="descripcion" placeholder="Descripcion" required /><br><br>

<label for="tipo" />Tipo</label>
<select name="tipo" >
<option style="  font-family: Arial Narrow, sans-serif;" value="1">Uñas</option>
<option style="  font-family: Arial Narrow, sans-serif;" value="2">Cabello</option>
<option style="  font-family: Arial Narrow, sans-serif;" value="3">Spa</option>
</select>
	
	<input type="submit" name="enviar" value="Enviar"/>
</form>
</body>
</html>
