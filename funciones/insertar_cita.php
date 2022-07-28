<?php
session_start();
include("../clases/Cita.php");
$cita=new Cita();

$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$fk_usuario=$_SESSION['idusuario'];
$telefono=$_POST['telefono'];


$respuesta=$cita->insertar($fecha, $hora, $fk_usuario, $telefono);



if ($respuesta==true) {
    echo "<meta http-equiv='REFRESH'content='0; url=../agendar_cita.php'> <script> alert('Listo, cita agendada, favor de confirmar con adilene') </script>";
}else{
    echo "<meta http-equiv='REFRESH'content='0; url=../agendar_cita.php'> <script> alert('Algo salió mál') </script>";
}
?>
