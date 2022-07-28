<?php
class Cita {
    function __construct(){
        require_once("Conexion.php");
        $this->conexion=new Conexion();
    }

    function insertar($fecha, $hora, $fk_usuario, $telefono){
        $consulta="INSERT INTO cita (pk_cita, fecha, hora, fk_usuario, estatus, telefono) VALUES(NULL, '{$fecha}', '{$hora}', '{$fk_usuario}', 1, 
        '{$telefono}')";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function mostrar(){
        $consulta="SELECT* FROM cita c INNER JOIN usuario u ON c.fk_usuario=u.idusuario WHERE c.estatus=1";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function baja($pk_cita){
        $consulta="UPDATE cita SET estatus=0 WHERE pk_cita='{$pk_cita}'";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function mostrarPorId($pk_cita){
        $consulta="SELECT * FROM cita WHERE pk_cita='{$pk_cita}'";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
    }
    function actualizar($pk_cita, $fecha, $hora, $telefono){
        $consulta="UPDATE cita SET fecha='{$fecha}', hora='{$hora}', 
        telefono='{$telefono}'WHERE pk_cita='{$pk_cita}' ";
        $resultado=$this->conexion->query($consulta);
        return $resultado;
   }
    
}

    ?>