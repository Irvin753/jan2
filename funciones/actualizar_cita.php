<?php
include("../clases/Cita.php");

$cita=new Cita();

$pk_cita= $_POST['pk_cita'];
$fecha= $_POST['fecha'];
$hora= $_POST['hora'];
$telefono= $_POST['telefono'];


$respuesta=$cita->actualizar($pk_cita, $fecha, $hora, $telefono);


if ($respuesta==true){
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_cita.php'> <script> alert('Listo, cita actualizada') </script>";
}else{
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_cita.php'> <script> alert('Ups, algo salió mál') </script>";
}


?>