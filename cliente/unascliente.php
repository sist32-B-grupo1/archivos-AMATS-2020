<?php
session_start();
//$link = new PDO('mysql:host=localhost;dbname=controlcitas1', 'root', '');
$usuario = "root";
$contraseña = "";
$servidor = "localhost";
$basededatos="contolbd";
$conexion = mysqli_connect($servidor,$usuario,""); // or die ("No se a podido conectar al servidor de la base de datos");
$db = mysqli_select_db($conexion,$basededatos);// or die ("Upss! no se a podido conectar a la base de datos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Uñas</title>

     <link rel="stylesheet">
</head>
<?php
require_once("menucliente.php");
?>
<body>
    <p>CATÁLOGO</p><br><br><br>
    <center>
    <a href="catalogocliente.php" onclick="mostrar('Regresar'); return false" />Regresar</a><br><br><br>
    </center><br><br><br>
<table style="width:100%">
    
    <thead>
    <tr>
      <th scope="col" style="width:33%">Foto</th>
      <th scope="col" style="width:33%">Precio</th>
      <th scope="col" style="width:33%">Descripcion</th>
    </tr>
  </thead>
  <tbody>
  <tr>
 <?php
        $consultaf = 'SELECT * from foto WHERE idcatalogo = "1"';
        $resultadof = mysqli_query($conexion,$consultaf); // or die ( "Algo ha ido mal en la consulta a la base de datos");
        while ($columnaf = mysqli_fetch_array( $resultadof ))
        {
            echo "<tr>";
            echo "<td align='center' style='width:33%'><img src=".$columnaf['foto']."></td>";
            echo "<td align='center' style='width:33%'>" . $columnaf['precio'] . "</td><td align='center' style='width:33%'>" . $columnaf['descripcion'] . "</td>";
            echo "</tr>";
           }
      ?>
    </tr>
  </tbody>
</table>



<?php
echo "<br><br><br><br><br><br><br>";
require_once("../include/pie.php");
?>
<style>
p{   font-family: Arial Narrow, sans-serif;
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
</style>
</body>
</html>
