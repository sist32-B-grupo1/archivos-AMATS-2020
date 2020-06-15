<?php
 
   @session_start();


include_once("clases/clases.php");

$conn= new BaseDatos();

if(isset($_POST['ingresar'])){
$usuario=$_POST['usuario'];
$contraseña=$_POST['contrasena'];

$resultado=$conn->busquedalibre("SELECT * FROM usuario WHERE usuario='$usuario' AND contrasena='$contraseña' LIMIT 1");

if($resultado==true){
    $rol="";
    $idclien="";
    $idadmin="";

    foreach($resultado as $value){
        
        $rol=$value['idrol'];
        
        //Estas son las variables para crear cookies o sesiones
        $idclien=$value['idcliente'];
        $idadmin=$value['idadmin'];
    }

    if($rol==1){
        $_SESSION['rol']=$rol;
    header("location: administrador/index.php");
    }
    elseif($rol==2){
        $_SESSION['rol']=$rol;
    header("location: cliente/index.php");
    }
}else{
    header ("location: login.php");
}
}
else{
    header ("location: index.php");
}

?>