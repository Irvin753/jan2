<?php
include("../clases/Servicios.php");
$servicio=new Servicio();

$nombre_servicio=$_POST["nombre_servicio"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];


$archi_foto=$_FILES['foto']['tmp_name'];
$nombre_foto=$_FILES['foto']['name'];	

move_uploaded_file($archi_foto,"../img/".$nombre_foto);

$respuesta=$servicio->insertar($nombre_servicio, $descripcion, $precio, $nombre_foto);

if($respuesta){
    echo "<meta http-equiv='REFRESH'content='0; url=../lista_servicios.php'> <script> alert('Listo, servicio agregado') </script>";
}else{
    echo "<meta http-equiv='REFRESH'content='0; url=../insertar_servicios.php'> <script> alert('Ups, algo salió mál') </script>";
}

?>
