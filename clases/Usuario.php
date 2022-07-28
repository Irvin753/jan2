<?php

class usuario
{

    function __construct()
    {
        require_once("Conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($username, $pass, $tipo) {
        $consulta="INSERT INTO usuario (idusuario, username, pass, estatus, tipo) VALUES (NULL, '{$username}',  '{$pass}', 1, '{$tipo}')";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }

    function buscar($username, $pass){
        $consulta="SELECT * FROM usuario WHERE username='{$username}' AND pass='{$pass}' AND estatus=1";
        $resultado=$this->conexion->query($consulta);
        return $resultado;

    }
    /*function buscar1($usuario, $contrasena){
        $consulta="SELECT * FROM usuario2 WHERE usuario='{$usuario}' AND contrasena='{$contrasena}' AND estatus=1";
        $resultado=$this->conexion->query($consulta);
        return $resultado;

    }*/
    function mostrarPorId($idusuario){
        $consulta="SELECT * FROM usuario WHERE idusuario='{$idusuario}'";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function mostrar(){
        $consulta="SELECT * FROM usuario WHERE estatus=1";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function actualizar($idusuario, $username, $pass){
        $consulta="UPDATE usuario SET username='{$username}', pass='{$pass}' WHERE idusuario='{$idusuario}' ";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
   }
   function baja($idusuario){
    $consulta="UPDATE usuario SET estatus=0 WHERE idusuario='{$idusuario}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
}

}

?>