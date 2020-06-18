<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <title>Catálogo</title>

     <link rel="stylesheet">
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
