<?php
// require_once '../clases/clases.php';
require_once '../clases/conexion.php';
//INGRESAR DATOS A LA BASE DE DATOS
// $conn       = new BaseDatos();
$usuario    = "";
$contrasena = "";
$rol        = "";

if (isset($_POST['enviar'])) {
    $idcatalogo  = $_POST['tipo'];
    $imagen      = $_FILES['imagen'];
    $precio      = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
        $tmp_name = $_FILES["imagen"]["tmp_name"];

        $imagen                    = "fotoscat/" . $_FILES["imagen"]["name"];
        $nombrearchivoSinExtension = substr($imagen, 0, strpos($imagen, '.'));
        $extensionArchivo          = substr(strrchr($imagen, '.'), 1);

        if (is_file($imagen)) {
            $idUnico = time();
            $imagen  = "fotoscat/" . $idUnico . "-" . $_FILES["imagen"]["name"];
        }

        move_uploaded_file($tmp_name, $imagen);

        // $conexion->insertar("foto", "(idcatalogo,foto,precio,descripcion)", "'$idcatalogo','$imagen','$precio','$descripcion'");
        //
        $sqlusuario       = "INSERT INTO foto(idcatalogo,foto,precio,descripcion) VALUES ('$idcatalogo', '$imagen', '$precio', '$descripcion') ";
        $resultadousuario = $conexion->query($sqlusuario);
    } else {
        echo "<br>No se ha podido subir el formulario";
    }

}

// if (isset($_POST['enviar'])) {
//     $tipo        = $_POST['tipo'];
//     $precio      = $_POST['precio'];
//     $descripcion = $_POST['descripcion'];

//     $imagen         = $_FILES['imagen']['tmp_name'];
//     $archivo_subido = $_FILES['imagen']['name'];
//     $ruta           = "fotoscat";

//     $ruta = $ruta . "/" . $archivo_subido;

//     // Subimos el archivo
//     move_uploaded_file($imagen, $ruta);

//     if (!empty($tipo) && !empty($precio) && !empty($descripcion)) {

//         $consulta_insert = $con->prepare(
//             'INSERT INTO foto (idcatalogo, foto, precio, descripcion) VALUES(:tipo, :imagen, :precio, :descripcion)'
//         );

//         $consulta_insert->execute(array(
//             ':tipo'           => $tipo,
//             ':imagenproducto' => $_FILES['imagen']['name'],
//             ':precio'         => $precio,
//             ':descripcion'    => $descripcion,

//             // ':sinopsis' =>$sinopsis,
//             // ':directores' =>$directores,
//             // ':escritores' =>$escritores
//         ));

//         header('Location: index.php');
//     } else {
//         echo "<script> alert('Los campos estan vacios');</script>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Catálogo</title>

     <link rel="stylesheet">
</head>
<?php
require_once "menuadmin.php";
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
<?php
echo "<br><br><br><br><br><br><br>";
require_once("../include/pie.php");
?>
<style>p{   font-family: Arial Narrow, sans-serif;
     font-size: 60px;
     text-align: center; 
}

a  {      
     font-family: Arial Narrow, sans-serif;
     font-size: 20px;
     color: #000000;

      
}

body {
background-image: linear-gradient(500deg, #cfb82b 0%, #ffcfd8 100%);
}

table {
     width: 100%;
}

a {
  outline: none;
  text-decoration: none;
  padding: 2px 1px 0;
}

a:link {
  color: #ffcfd8;
}

a:visited {
  color: #000000;
}

a:focus {
  background: #BAE498;
}

a:hover {    
  background:  #fe3686;
}

a:active {
  background: #ffcfd8;
  color:  #fe3686;
}



 
img {
  width: 60%;
  height: 60%;
  margin: 30px;
  padding: 0;
  border-radius: 41px 41px 41px 41px;
-moz-border-radius: 41px 41px 41px 41px;
-webkit-border-radius: 41px 41px 41px 41px;
border: 0px solid #000000;
}


form{
  width:330px;
  padding:16px;
  border-radius:10px;
  margin:auto;
  background-color:#ccc;


}

form label{
  width:90px;
  font-weight:bold;
  display:inline-block;
    font-family: Arial Narrow, sans-serif;
}

form input[type="text"],
form input[type="file"]{
  width:180px;
  padding:3px 20px;
  border:1px solid #f6f6f6;
  border-radius:3px;
  background-color:#f6f6f6;
  margin:8px 0;
  display:inline-block;
  font-size: 15px;
  font-family: Arial Narrow, sans-serif;
}

form input[type="submit"]{
  width:100%;
  padding:8px 16px;
  margin-top:32px;
  border: none;
  display:block;
  background: #fe3686;
  color: white;
  font-size: 15px;
  border-radius: 20px;


} 

form input[type="submit"]:hover{
  cursor:pointer;
}

textarea{
  width:100%;
  height:100px;
  border:1px solid #f6f6f6;
  border-radius:3px;
  background-color:#f6f6f6;     
  margin:8px 0;
  /*resize: vertical | horizontal | none | both*/
  resize:none;
  display:block;
}

</style>
