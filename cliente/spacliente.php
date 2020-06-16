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
require_once("menucliente.php");
?>
<body>
    <p>CATÁLOGO</p><br><br><br>
    <center>
    <a href="catalogocliente.php" onclick="mostrar('Regresar'); return false" />Regresar</a><br><br><br>
    </center><br><br><br>
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
</table><br><br><br>

</body>
</html>
<?php
require_once("../include/pie.php");
?>