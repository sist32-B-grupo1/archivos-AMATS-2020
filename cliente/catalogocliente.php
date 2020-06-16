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
require_once("menucliente.php");
?>
    <p>CATÁLOGO</p><br><br><br><br>

     <div style="text-align:center;">
     <table>

<tr >
   <td ><a href="unascliente.php" onclick="mostrar('Uñas'); return false" />Uñas</a></td> 

   <td><a href="cabellocliente.php" onclick="mostrar('Cabello'); return false" />Cabello</a></td>

   <td><a href="spacliente.php" onclick="mostrar('Spa'); return false" />Spa</a></td>
</tr>
<tr>
    
   <td><a title="Uñas" href="unascliente.php"><img src="../fotos/uñas1.jpg" alt="Uñas"/></a></td>
   
   <td><a title="Cabello" href="cabellocliente.php"><img src="../fotos/pelo1.jpg" alt="Cabello" /></a></td>

   <td><a title="Spa" href="spacliente.php"><img src="../fotos/spa1.jpg" alt="Spa" /></a></td>
</tr>

</table>
</div>
<br><br><br><center>
 
<?php
require_once("../include/pie.php");
?>
</body>
</html>