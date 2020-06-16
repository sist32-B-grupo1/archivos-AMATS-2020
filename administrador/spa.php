<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Spa</title>

     <link rel="stylesheet" href="doc.css">
</head>
<?php
require_once("menuadmin.php");
?>
<body><br><br><br>
    <p>CATÁLOGO</p>
    <center>
    <a href="catalogo.php" onclick="mostrar('Regresar'); return false" />Regresar</a>
</center>
<br><br><br>
<table>

<tr ><center>
   <td align="center">$10.00</td> 

   <td align="center">$15.00</td>

   <td align="center">$20.00</td></center>
</tr>
<tr>
    
   <td align="center"><img src="fotoscat/spa1.jpg" ></td>
   
   <td align="center"><img src="fotoscat/spa2.jpg"></td>

   <td align="center"><img src="fotoscat/spa3.jpg"></td>
</tr>
<tr >
   <td align="center">Masaje</td> 
   <td align="center">Tratamiento para la piel</td> 
   <td align="center">Pedicure</td> 

</tr>
<tr >
   <td align="center"><input type="submit" name="eliminar" value="eliminar"/></td> 
   <td align="center"><input type="submit" name="eliminar" value="eliminar"/></td> 
   <td align="center"><input type="submit" name="eliminar" value="eliminar"/></td> 
</table><br><br><br>

</body>


<?php
require_once("../include/pie.php");
?>
</body>

