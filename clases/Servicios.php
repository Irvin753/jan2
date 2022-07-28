<?php
class Servicio {
    function __construct(){
        require_once("Conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($nombre_servicio, $descripcion, $precio, $foto){
        $consulta="INSERT INTO servicio (pk_servicio, nombre_servicio, descripcion, precio, foto, estatus)
         VALUES (NULL, '{$nombre_servicio}', '{$descripcion}', '{$precio}', '{$foto}', 1)";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    
    }
    function mostrar(){
        $consulta="SELECT * FROM servicio WHERE estatus=1";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function mostrarPorId($pk_servicio){
        $consulta="SELECT * FROM servicio WHERE pk_servicio='{$pk_servicio}'";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function actualizar($pk_servicio, $nombre_servicio, $descripcion, $precio, $foto){
        $consulta="UPDATE servicio SET nombre_servicio='{$nombre_servicio}', descripcion='{$descripcion}', 
        precio='{$precio}', foto='{$foto}' WHERE pk_servicio='{$pk_servicio}' ";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
   }
   function baja($pk_servicio){
    $consulta="UPDATE servicio SET estatus=0 WHERE pk_servicio='{$pk_servicio}'";
    $resultado=$this->conexion->query($consulta);
    return $resultado;
}


}
?>