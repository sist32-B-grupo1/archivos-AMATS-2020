
<?php 

require_once('../clases/clases.php');

$conn= new BaseDatos();

$idusuario=$_GET["id"];

$datos=$conn->BusquedaPorCondicion("usuario","idusuario='$idusuario'");

$eliminar=$conn->borrar("usuario","idusuario='$idusuario'");
     
     if ($eliminar) 
      {
      	header("location:ingresousuarios.php");
      }
      else{
      	echo "no se puedo eliminar";
      }


 ?>
