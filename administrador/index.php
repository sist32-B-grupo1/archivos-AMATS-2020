<?php

@session_start();

if ($_SESSION['rol']=1){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body style="background: #343749;">
<?php
require_once("menuadmin.php");
?>
	<center><h1 style="color: white;">Bienvenida</h1></center>
    <br>
    <center><img style="width: 900px; height: 450px;" src="../fotos/manos2.jpg"></center>

    <br>
    <br>
    <br>
    <center>

<div class="card">
  <div class="card-header">
    <h2 style="color: #FE3686;">Mision</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Agradar a cada cliente al obtener cada uno de los servicios ofrecidos y dejarlos con mucha satifaccion</p>
      <footer class="blockquote-footer"> Aries By Jacquie Montano</footer>
    </blockquote>
  </div>
</div>

<br>
<br>

<div class="card">
  <div class="card-header">
    <h2 style="color: #FE3686;">Vision</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>LLegar a cada cliente con innovaciones para poder brindarles siempre
        el mejor de los servicios superando asi cada obstaculo y lograr tener 
    un ambiente de satifaccion</p>
      <footer class="blockquote-footer"> Aries By Jacquie Montano</footer>
    </blockquote>
  </div>
</div>

<br>
<br>

<div class="card">
  <div class="card-header">
    <h2 style="color: #FE3686;">Valores</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <ul style="list-style: none;">
          <li>Perseverancia</li>
          <li>Innovacion</li>
          <li>Honestidad</li>
          <li>Respeto</li>
          <li>Responsabilidad</li>
      </ul>
      <footer class="blockquote-footer"> Aries By Jacquie Montano</footer>
    </blockquote>
  </div>
</div>

    </center>
    	
    	<br>
    	<br>
<?php
require_once("../include/pie.php");
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

<?php

}

else {


echo "el usuario no existe";
header ("location:../login.php");
}

?>