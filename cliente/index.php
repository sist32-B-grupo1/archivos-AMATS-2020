<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
	<?php
    @session_start(); 
    require_once('menucliente.php');  
    ?>
<center><h1 style="color: white;">Bienvenida</h1></center>
    <br>
    <center><img src="../fotos/banner.jpg" width="1100px" height="600px"></center>

    <br>
    <br>
    <br>
    <center>
    	<h2 style="color: #fe3686; font-family: 'gisha'">Mision</h2>
    	<p style="color: white; font-family: 'gisha'; font-size: 16px;">Agradar a cada cliente al obtener cada uno de los servicios ofrecidos y dejarlos con mucha satifaccion</p><br>
    	<h2 style="color: #fe3686; font-family: 'gisha'">Vision</h2>
    	<p style="color: white; font-family: 'gisha'; font-size: 16px;" >LLegar a cada cliente con innovaciones para poder brindarles siempre
    	el mejor de los servicios superando asi cada obstaculo y lograr tener 
    un ambiente de satifaccion</p><br>
    	<h2 style="color: #fe3686; font-family: 'gisha'">Valores</h2>
    	<ul>
    		<li style="color: white; font-family: 'gisha'; font-size: 16px;">Perserverancia</li>
    		<li style="color: white; font-family: 'gisha'; font-size: 16px;">Innovacion</li>
    		<li style="color: white; font-family: 'gisha'; font-size: 16px;">Honestidad</li>
    		<li style="color: white; font-family: 'gisha'; font-size: 16px;">Responsabilidad</li>
    		<li style="color: white; font-family: 'gisha'; font-size: 16px;">Respeto</li>
    	</ul>
    </center>
    	
    	<br>
    	<br>
<?php
require_once("../include/pie.php");
?>
</body>
</html>