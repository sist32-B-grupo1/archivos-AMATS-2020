<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Catálogo</title>

     <link rel="stylesheet" href="doc.css">
</head>
<body>
<?php
require_once("menuadmin.php");
?>
    <p>CATÁLOGO</p><br><br>

     <div style="text-align:center;">
     <table>

<tr >
   <td ><a href="uñas.php" onclick="mostrar('Uñas'); return false" />Uñas</a></td> 

   <td><a href="cabello.php" onclick="mostrar('Cabello'); return false" />Cabello</a></td>

   <td><a href="spa.php" onclick="mostrar('Spa'); return false" />Spa</a></td>
</tr>
<tr>
    
   <td><a title="Uñas" href="uñas.php"><img src="../fotos/uñas1.jpg" alt="Uñas"/></a></td>
   
   <td><a title="Cabello" href="cabello.php"><img src="../fotos/pelo1.jpg" alt="Cabello" /></a></td>

   <td><a title="Spa" href="spa.php"><img src="../fotos/spa1.jpg" alt="Spa" /></a></td>
</tr>

</table>
</div>
<br><br><br><center>
 <a href="formcatalogo.php" onclick="mostrar('Agregar'); return false" />Agregar imagen</a></center><br><br><br>
<?php
require_once("../include/pie.php");
?>
</body>
</html>