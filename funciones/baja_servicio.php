<?php
include("../clases/Servicios.php");
$servicio=new Servicio();

$pk_servicio=$_GET["pk_servicio"];

$resultado=$servicio->baja($pk_servicio);

if($resultado){
    echo "<meta http-equiv='REFRESH'content='0; url=../lista_servicios.php'> <script> alert('Listo, el servicio ha sido dado de baja') </script>";
}else{
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_servicios.php'> <script> alert('Ups, algo salió mál') </script>";
}

?>