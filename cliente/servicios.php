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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
<?php 
    require_once('menucliente.php');  
    ?>

    <!-- inicia modal de servicios  -->

      <div class="modal-body">
        <form>
		
        
        <div class="container">    
    <table class="table">
    
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">servicio</th>
      <th scope="col">categoria</th>
      <th scope="col">decripcion</th>
    </tr>
  </thead>
  <tbody>
  <tr>
 <?php
        $consulta5 = 'SELECT * from servicios';
        $resultado5 = mysqli_query($conexion,$consulta5); // or die ( "Algo ha ido mal en la consulta a la base de datos");
        while ($columna5 = mysqli_fetch_array( $resultado5 ))
        {
            echo "<tr>";
            echo "<td>" . $columna5['idservicios'] . "</td><td> " . $columna5['nombreservicios'] . "</td>";
            echo "<td>" . $columna5['idtipo'] . "</td><td>" . $columna5['descripcionservi'] . "</td>";
            echo "</tr>";
         
     
           }
      ?>
  </tr>
  </tbody>
    
    </table>
    </div>
        
     
	  <!-- Cierre del formulario  servicios del modal  -->
	  <!-- Botones de abajo del modal  -->
      <
       

   
<!-- Final del modal de servicios--> 
</body>
<style>
body{
	margin: 0;
	padding: 0;
	background: #cfb82b;
	color: #343749;
	font-family: 'gisha';

}
</style>
</html>