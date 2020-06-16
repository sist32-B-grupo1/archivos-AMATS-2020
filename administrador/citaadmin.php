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
<!DOCTYPE html>
<html>
<head>
	<title>citas</title>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <?php 
    require_once('menuadmin.php');  
    ?>
	<center>
	<!-- inicio de botones menu modales -->
  
  <form action="" method="post">
	<button type="button" class="sa" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo" >Registro de Cientes</button>
    <button type="button" class="sa" data-toggle="modal" data-target="#exampleModal5" data-whatever="@fat" name="servi">Servicios</button>
	<button type="button" class="sa" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat">Historial de Citas</button>
  </form>
    <!-- Final de botones menu modales --> 
	<br>
	</center>
<!-- inicio de modal cliente -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	  <!-- texto de arriba del modal  -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <!-- Cierre de texto de arriba del modal  -->
	  <!-- formulario de cliente del modal  -->
      <div class="modal-body">
        <form>
		<div class="container">
    <table class="table">
    
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
  <tr>
 <?php
        $consulta2 = 'SELECT * from cliente';
        $resultado2 = mysqli_query($conexion,$consulta2); // or die ( "Algo ha ido mal en la consulta a la base de datos");
        while ($columna2 = mysqli_fetch_array( $resultado2 ))
        {
            echo "<tr>";
            echo "<td>" . $columna2['idcliente'] . "</td><td> " . $columna2['nombrecliente'] . "</td>";
            echo "<td>" . $columna2['apellidocliente'] . "</td><td>" . $columna2['direccion'] . "</td>";
            echo "<td>" . $columna2['telefono'] . "</td>";
            echo "</tr>";
         
     
           }
      ?>
  </tr>
  </tbody>
    
    </table>
    </div>
        </form>
      </div>
	  <!-- Cierre del formulario del cliente del modal  -->
	  <!-- Botones de abajo del modal  -->
      <div class="modal-footer">
        <button type="button" class="saa" data-dismiss="modal">Cerrar</button>

      </div>
	  <!-- Cierre de Botones de abajo del modal  --><!--  -->
    </div>
  </div>
</div>
<!-- Final del modal de cliente -->



<!-- inicia modal de servicios  -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	  <!-- texto de arriba del modal  -->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Servicios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <!-- Cierre de texto de arriba del modal  -->
	  <!-- formulario de cliente del modal  -->
      <div class="modal-body">
        <form>
		
        <div class="modal-footer">
         <!-- nuevo servicio -->
         <button type="button" class="sas" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat" name="agregars">Agregar Servicios</button>

         <!-- eliminar servicio -->
         <button type="button" class="sase" data-toggle="modal" data-target="#exampleModal6" data-whatever="@fat" name="eliminars">eliminar Servicio</button>
        </div> 
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
        </form>
      </div>
	  <!-- Cierre del formulario  servicios del modal  -->
	  <!-- Botones de abajo del modal  -->
      <div class="modal-footer">
        <button type="button" class="saa" data-dismiss="modal">Cerrar</button>

      </div>
	  <!-- Cierre de Botones de abajo del modal  --><!--  -->
    </div>
  </div>
</div>
<!-- Final del modal de servicios-->





<!-- inicio de modal eliminar Servicios -->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
 
    <div class="modal-content">
	 <!-- texto de arriba del modal  -->
	 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Servicios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <!-- Cierre de texto de arriba del modal  -->	
	  <div class="modal-body">
       
		<div class="container">
        <form action="citaadmin.php" method="post">
    <table class="table">  
            <?php 
               $consultas = 'SELECT * from servicios ';
               $resultados = mysqli_query($conexion,$consultas) ;//or die ( "Algo ha ido mal en la consulta a la base de datos");
               $contador = 0;
               echo "<tr>";
               while ($columnas = mysqli_fetch_array( $resultados ))
                 { 
                    echo "<td  valing=top style = vertical-align:text-top;>" ;
                    echo "<input type=radio name=eliminar value=" .$columnas['idservicios'] ."checked >"  .$columnas['nombreservicios'] ;
                    echo "</td>";
                    $contador++;
                    if ($contador == 5) {
                      echo "</tr>";
                      echo "<tr>";
                      $contador = 0;
                    }
                 }
            ?>
    </table>
    
    </div>
        
      </div>
	  <!-- Botones de abajo del modal  -->
      <div class="modal-footer">
	  <button type="button" class="saa" data-dismiss="modal">Cerrar</button>
      <input type="submit" value="Eliminar" name="eliminarser" class="s">
      </div>
      </form>
	  <!-- Cierre de Botones de abajo del modal  --><!--  -->
    </div>
  </div>
</div>
<?php
 if (isset($_POST["eliminarser"])) {
 
   $eliminar = $_POST["eliminar"];

  
   $eliminarser =  "DELETE FROM servicios WHERE idservicios = '$eliminar'";
   $eliminar = mysqli_query($conexion,$eliminarser);
 }
?>





<!-- inicio de modal servicios -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	 <!-- texto de arriba del modal  -->
	 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Servicios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <!-- Cierre de texto de arriba del modal  -->
	   <!-- formulario de Servicios del modal  -->
     <?php 
     
     
     
     
     ?>
	   <div class="modal-body">
        <form method="post" action="citaadmin.php">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Servicio</label>
            <input type="text" class="form-control"  name="nombreservicio">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">tipo del Servicio</label>
            <select name="tipo" style="width: 276px;  height: 34px;" class="form-control">
               <option value="1">uñas y pies</option>
               <option value="2">cabello</option>
               <option value="3">SPA</option>
               <option value="4">Depilacion</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Descripcion</label>
            <textarea class="form-control"  name="serviciodescript"></textarea>
          </div>
        
      </div>
	   <!-- Cierre formulario de Servicios del modal  -->
	  <!-- Botones de abajo del modal  -->
      <div class="modal-footer">
        <button type="button" class="saa" data-dismiss="modal">Cerrar</button>
        <input type="submit" value="agregar" name="agregarnser" class="s">
        </form>
       <!-- <button type="submit" class="s" name="agregarnser" data-dismiss="modal">Aceptar</button>-->
      </div>
	  <!-- Cierre de Botones de abajo del modal  --><!--  -->
    </div>
  </div>
</div>
<?php
 if (isset($_POST["agregarnser"])) {
 
   
   $nombreservicios = $_POST["nombreservicio"];
   $serviciodescript = $_POST["serviciodescript"];
   $idtipo = $_POST["tipo"];
   $insertarser =  "INSERT INTO servicios (nombreservicios,idtipo,descripcionservi) VALUES ('$nombreservicios', '$idtipo', '$serviciodescript')";
   $insertar = mysqli_query($conexion,$insertarser);
 }
?>
<!-- Final del modal de Servicios -->

<!-- inicio de modal Historial Citas -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	 <!-- texto de arriba del modal  -->
	 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Historial de Citas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
      <form method ="post">
        <!-- eliminar servicio -->
        <button type="button" class="sase" data-toggle="modal" data-target="#exampleModal9" data-whatever="@fat" name="eliminars">eliminar Cita</button>
      </div>
	  <!-- Cierre de texto de arriba del modal  -->	
	  <!-- inicio de historial de citas -->
	  <div class="modal-body">
       
		<div class="container">
    <table class="table">
    
    <thead>
    <tr>
      <th scope="col">ID Cita</th>
      <th scope="col">ID Cliente</th>
      <th scope="col">ID Servicio</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>

  
     
    </tr>
  </thead>
  <tbody>
  <?php 
               $consultahisto = 'SELECT * from citas ';
               $resultadohisto = mysqli_query($conexion,$consultahisto) ;//or die ( "Algo ha ido mal en la consulta a la base de datos");
               while ($columnahisto = mysqli_fetch_array( $resultadohisto ))
                 {
                    echo "<tr>";
                    echo "<td>" .$columnahisto['idcitas'] ."</td>" ;
                    echo "<td>" .$columnahisto['idcliente'] ."</td>";
                    echo "<td>" .$columnahisto['idservicio'] ."</td>";
                    echo "<td>" .$columnahisto['fecha'] ."</td>";
                    echo "<td>" .$columnahisto['hora'] ."</td>";
                    
                    echo "<tr>";
                 }
            ?>

  </tbody>
    
    </table>
    </div>
        </form>
      </div>
	  <!-- Final de historial de citas-->
	  <!-- Botones de abajo del modal  -->
      <div class="modal-footer">
        <button type="button" class="saa"  data-dismiss="modal">Cerrar</button>
      </div>
	  <!-- Cierre de Botones de abajo del modal  --><!--  -->
    </div>
  </div>
</div>
<!-- Final del modal de Historial de citas -->



<!-- inicio de modal eliminar citas -->
<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
 
    <div class="modal-content">
	 <!-- texto de arriba del modal  -->
	 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Cita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <!-- Cierre de texto de arriba del modal  -->	
	  <div class="modal-body">
       
		<div class="container">
        <form action="citaadmin.php" method="post">
    <table class="table">
    <tr>
       <th></th>
       <th>ID Cita</th>
       <th> Fecha </th>
       <th> Hora </th>
    </tr>  
            <?php 
               $consultas = 'SELECT * from citas';
               $resultados = mysqli_query($conexion,$consultas) ;//or die ( "Algo ha ido mal en la consulta a la base de datos");
              
               while ($columnac = mysqli_fetch_array( $resultados ))
                 { 
                    echo "<tr>";
                    echo "<td  valing=top style = vertical-align:text-top;>" ;
                    echo "<input type=radio name=eliminarc value=" .$columnac['idcitas'] ."checked >";
                    echo "</td>";
                    echo "<td>" .$columnac['idcitas'] ."</td>"; 
                    echo "<td>" . $columnac['fecha'] ."</td><td>" . $columnac['hora'] ."</td>";
                    
                 }
            ?>
    </table>
    
    </div>
        
      </div>
	  <!-- Botones de abajo del modal  -->
      <div class="modal-footer">
	  <button type="button" class="saa" data-dismiss="modal">Cerrar</button>
      <input type="submit" value="Eliminar" name="eliminarci" class="s">
      </div>
      </form>
	  <!-- Cierre de Botones de abajo del modal  --><!--  -->
    </div>
  </div>
</div>
<?php
 if (isset($_POST["eliminarci"])) {
 
   $eliminarc = $_POST["eliminarc"];

  
   $eliminarcit =  "DELETE FROM citas WHERE idcitas = '$eliminarc'";
   $eliminarcii = mysqli_query($conexion,$eliminarcit);
 }
?>





<!-- Formulario cita -->
<br><br><br><br>
<center>
<form method="post" action="citaadmin.php">
		<div  class="login-box">
		<img class="logo" src="logo.jpg">
		<h3>Cita</h3>
        <table>
        	<tr>
        		<td>
        			<label>
        				ID cliente
        			</label>
        			<br>
                    <input type="text" name="idcliente" id="" size="35" class="inputFormu">
				</td>
                </tr>
                <tr>
                <td>
                <label for="">
				  telefono
				</label><br>
                <input type="tel" name="telefono" size="35" pattern="[0-9]{4}[-][0-9]{4}" class="inputFormu">
                </td>
				<td>
				<label for="">
				  Servicio 
				</label><br>
				<button type="button" class="s" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat">Agregar Servicios</button>
				</td>
        		&nbsp;
        		
        	</tr>
        	<tr>
        		<td>
        			<label>
        				seleccionar Fecha</br>
        			</label>
        			
                    <input type="date" name="fecha" size="35" style="width: 280px;" class="inputFormu">
				</td>
				<td>
        			<label>
        				seleccionar hora</br>
        			</label>
        			
                    <input type="time" name="hora" size="35" style="width: 280px;" class="inputFormu">
        		</td>
        	</tr>
        	<tr>
        		<td colspan="2">
        			<label>
        			 Direccion:</br>
        			</label>
        			
                   <textarea name="direccion"></textarea>
        		</td>
        		
        	</tr>
        	<tr>
            <tr>
        		<td colspan="2">
        			<label>
        			 comentario:</br>
        			</label>
        			
                   <textarea name="comentario"></textarea>
        		</td>
        		
        	</tr>
        	<tr>
        		<td colspan="2">
        			<br>
        			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        			<input type="submit" value="Crear Cita" class="s" name="crearc" >
             <!-- <button type="submit" name="agregar" value="agregar" class="s"> aceptar </button>-->
        		</td>
        	</tr>
        </table>
        </div>
</center>
<!-- inicio de modal Servicios -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
 
    <div class="modal-content">
	 <!-- texto de arriba del modal  -->
	 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Servicios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <!-- Cierre de texto de arriba del modal  -->	
	  <div class="modal-body">
       
		<div class="container">
    <table class="table">  
            <?php 
               $consulta = 'SELECT * from servicios ';
               $resultado1 = mysqli_query($conexion,$consulta) ;//or die ( "Algo ha ido mal en la consulta a la base de datos");
               $contador = 0;
               echo "<tr>";
               while ($columna = mysqli_fetch_array( $resultado1 ))
                 { 
                    echo "<td  valing=top style = vertical-align:text-top;>" ;
                    echo "<input type=checkbox name=clas[] value=" .$columna['idservicios'] .">"  .$columna['nombreservicios'] .$serviciot=$columna['idtipo'];
                    echo "</td>";
                    $contador++;
                    if ($contador == 5) {
                      echo "</tr>";
                      echo "<tr>";
                      $contador = 0;
                    }
                 }
            ?>
    </table>
    </div>
        
      </div>
	  <!-- Botones de abajo del modal  -->
      <div class="modal-footer">
	  <button type="button" class="saa" data-dismiss="modal">Cerrar</button>
      
      </div>
   
	  <!-- Cierre de Botones de abajo del modal  --><!--  -->
    </div>
  </div>
</div>
</form>
<?php

if (isset($_POST["crearc"])) {
 
    $servicio = $_REQUEST["clas"];
    $n= count ($servicio);
    $telefono = $_POST["telefono"];
    $idcliente = $_POST["idcliente"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $direccion = $_POST["direccion"];
    $comentario = $_POST["comentario"];
    $s =1;
   $idadmin = 1;
    if (isset($servicio))
    {
      if (isset($n)) {
          
        for($i=0; $i<$n; $i++){
          
          
         
          $insertarcita =  "INSERT INTO citas (idcliente,idservicio,idtipo,hora,fecha,direccion,idadmin,descripcioncita,telefono) VALUES ('$idcliente', '$servicio[$i]', '$s',  '$hora', '$fecha', '$direccion','$idadmin','$comentario','$telefono')";
          $insertarcit = mysqli_query($conexion,$insertarcita);

    
         // $seleccionarcita = 'SELECT idcita FROM cita WHERE idcita = "$idcita"';
         // $resutadocitaid = mysqli_query($conexion,$seleccionarcita);
        
          //$consultahisto = "INSERT INTO historial (idhistorial,hora,fecha,idcita) VALUES ('$idhisto', '$fecha', '$hora',  '$insertarcit') ";
          //$resultadohistor = mysqli_query($conexion,$consultahisto);
          //echo "<script> alert('cita enviada'); </script>";
          
        }
         // $ulticita = "SELECT idcitas FROM citas ORDER BY idcitas DESC LIMIT 1";
          //7$ulticitar = mysqli_query($conexion,$ulticita);

        
          //$histo = "INSERT INTO historial (idcita) VALUES ('$ulticitar')";
          //$histoc = mysqli_query($conexion,$histo);
      }
    }
   
   
    /*echo "<script> alert('cita enviada'); </script>";*/
    }
    

?>
<!-- Final del modal de Historial de citas -->

<script>
$('#exampleModal1').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

$('#exampleModal2').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

$('#exampleModal3').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
$('#exampleModal4').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})

</script>
<style type="text/css">
	input
	{
		size: 40;
		position: relative;
		z-index: 100;
	}
	body
	{
	margin: 0;
	padding: 0;
	background: #cfb82b;
	color: #343749;
	font-family: 'gisha';
	}
	fieldset
	{
		background-color: #ffff;
		border-style: solid;
		border-color: #ffff;
	}
   .s{
	border: none;
	outline: none;
	width: 150px;
	height: 40px;
	background: #fe3686;
	color: white;
	font-size: 15px;
	border-radius: 20px;
}

.sa{
	border: none;
	outline: none;
	width: 200px;
	height: 40px;
	background: #fe3686;
	color: white;
	font-size: 15px;
	border-radius: 20px;
}
.saa{
	border: none;
	outline: none;
	width: 150px;
	height: 40px;
	background: #91908F;
	color: white;
	font-size: 15px;
	border-radius: 20px;
}
.sas{
	border: none;
	outline: none;
	width: 200px;
	height: 40px;
	background: #01DF01;
	color: white;
	font-size: 15px;
	border-radius: 20px;
}
.sase{
	border: none;
	outline: none;
	width: 200px;
	height: 40px;
	background: #DF0101;
	color: white;
	font-size: 15px;
	border-radius: 20px;
}

.login-box
{
	width: 700px;
	height: 580px;
	background: #fcfaf1;
	top: 80%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -47%);
	box-sizing: border-box;
	padding: 70px 30px;
}

.login-box .logo
{
 height: 100px;
 width: 100px;
 border-radius: 50%;
 position: absolute;
 top: -50px;
 left: 43%;
}
textarea
{
    resize: none;
    width: 635px;
    height: 50px;
}
a
{
	text-decoration: none;
}
.tabl
{
    background: #fe3686;
}
.menu
{

 font-size: 20px;
 float: center;
 color: white;
 text-decoration: none;
 text-align: center;
 font-family: 'gisha';
}
.st
{
	background-color:#fe3686;
	size: 20px;
	font-family: 'gisha';
}

</style>
<script type="text/javascript">



function validar(){
  var validado = true;
  elementos = document.getElementsByClassName("inputFormu");
  for(i=0;i<elementos.length;i++){
    if(elementos[i].value == "" || elementos[i].value == null){
    validado = false
    }
  }
  if(validado){
  window.location = "cita.php";
  }else{
    confirm("Hay campos vacios");   
  }
}
</script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
