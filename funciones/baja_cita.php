<?php
include("../clases/Cita.php");
$cita=new Cita();

$pk_cita=$_GET["pk_cita"];

$resultado=$cita->baja($pk_cita);

if($resultado){
    echo "<meta http-equiv='REFRESH'content='0; url=../lista_cita.php'> <script> alert('Listo, la cita se ha eliminado') </script>";
}else{
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_cita.php'> <script> alert('Ups, algo salió mál') </script>";
}

?>