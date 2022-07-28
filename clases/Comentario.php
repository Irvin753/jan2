<?php
class Comentario {
    function __construct(){
        require_once("Conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($comentario, $fkusuario){
        $consulta="INSERT INTO comentario (pk_comentario, comentario, fkusuario, estatus) VALUES(NULL, '{$comentario}', '{$fkusuario}', 1)";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    
    }
    function mostrar(){
        $consulta="SELECT* FROM comentario c INNER JOIN usuario u ON c.fkusuario=u.idusuario WHERE c.estatus=1";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function mostrarPorId($pk_comentario){
        $consulta="SELECT * FROM comentario WHERE pk_comentario='{$pk_comentario}'";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function actualizar($pk_comentario, $comentario){
        $consulta="UPDATE comentario SET comentario='{$comentario}' WHERE pk_comentario='{$pk_comentario}' ";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
   }
   function baja($pk_comentario){
    $consulta="UPDATE comentario SET estatus=0 WHERE pk_comentario='{$pk_comentario}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
}


}
    ?>