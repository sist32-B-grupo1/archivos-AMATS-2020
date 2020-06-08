<?php

class BaseDatos{

		  private $servidor='localhost';
      private $usuario='root';
      private $contrasena='';
      private $bd='contolbd';
      public $conexion;

public function __construct(){

$this->conexion=new mysqli($this->servidor, $this->usuario, $this->contrasena, "contolbd") or die(mysql_error());   
    }

    //funcion para mostrar datos

    public function mostrar($tabla){

        $resul=$this->conexion->query("SELECT * FROM $tabla") or die($this->conexion->error);
        return $resul->fetch_all(MYSQLI_ASSOC);
        return false;
        
    }
       
    //funcion para insertar a las tablas
    
    public function insertar($tabla, $campo){
        $resul = $this->conexion->query("INSERT INTO $tabla VALUES ($campo)") or die($this->conexion->error);
    if($resul)
    echo "Se agrego con exito";
        return true;
    return false;
    }

    //funcion para borrar en las tablas
    
    public function borrar($tablas,$condi){
        $resul = $this->conexion->query("DELETE FROM $tablas WHERE $condi") or die($this->conexion->error);
        return true;
    return false;   
    }

    
    //funcion para actulizar a las tablas
    

    public function actualizar($tablas, $campo, $condi){
        $resul = $this->conexion->query("UPDATE $tablas SET $campo WHERE $condi") OR die($this->conexion->error);
        return true;
    return false;    
    }

    
    //funcion para buscar por condición a las tablas
   
    public function BusquedaPorCondicion($tablas, $condi){
        $resul = $this->conexion->query("SELECT * FROM $tablas WHERE $condi") or die($this->conexion->error);
            return true;
        return false;  
    }

    
    //funcion para buscar en  una sola tabla
    
    public function busqueda($tablas){
        $resul = $this->conexion->query("SELECT * FROM $tablas") or die($this->conexion->error);
            return $resul->fetch_all(MYSQLI_ASSOC);
        return false;  
    }
  
   
    //funcion para buscar con parametros de sql
  
    public function busquedalibre($datos){
        $resul = $this->conexion->query($datos) or die($this->conexion->error);
            return $resul->fetch_all(MYSQLI_ASSOC);
        return false;  
    }


    
}	

?>