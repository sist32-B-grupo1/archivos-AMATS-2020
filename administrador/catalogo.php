<!DOCTYPE html>
<html lang="es">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Catálogo</title>

     <link rel="stylesheet">
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