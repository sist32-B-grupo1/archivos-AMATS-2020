<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Cabello</title>

     <link rel="stylesheet" href="doc.css">
</head>
<?php
require_once("menuadmin.php");
?>
<body>
    <p>CATÁLOGO</p><br><br><br>
    <center>
    <a href="catalogo.php" onclick="mostrar('Regresar'); return false" />Regresar</a>
</center>
<br><br><br>
<table>

<tr ><center>
   <td align="center">$4.50</td> 

   <td align="center">$15.00</td>

   <td align="center">$7.00</td></center>
</tr>
<tr>
    
   <td align="center"><img src="fotoscat/pelo1.jpg" ></td>
   
   <td align="center"><img src="fotoscat/pelo2.jpg"></td>

   <td align="center"><img src="fotoscat/pelo3.jpg"></td>
</tr>
<tr >
   <td align="center">Peinado</td> 
   <td align="center">Mechas</td> 
   <td align="center">Corte</td> 

</tr>
<tr >
   <td align="center"><input type="submit" name="eliminar" value="eliminar"/></td> 
   <td align="center"><input type="submit" name="eliminar" value="eliminar"/></td> 
   <td align="center"><input type="submit" name="eliminar" value="eliminar"/></td> 
</tr>
</table><br><br><br>

</body>
</html>



<?php
require_once("../include/pie.php");
?>

