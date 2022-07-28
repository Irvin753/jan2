<?php
class Formulario {
    function __construct(){
        require_once("Conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($username, $pass){
        $consulta="INSERT INTO  usuario (idusuario, username, pass, estatus, tipo) VALUES (NULL, '{$username}', 
        '{$pass}', 1, 2)";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    
    
    }
    function buscar($username, $pass){
        $consulta="SELECT * FROM usuario WHERE username='{$username}' AND pass='{$pass}' AND estatus=1";
        $resultado=$this->conexion->query($consulta);
        return $resultado;

    }




   }
?>