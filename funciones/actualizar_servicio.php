<?php
include("../clases/Servicios.php");

$servicio=new Servicio();

$pk_servicio= $_POST['pk_servicio'];
$nombre_servicio= $_POST['nombre_servicio'];
$descripcion= $_POST['descripcion'];
$precio= $_POST['precio'];
$foto=$_POST['foto'];

$archi_foto=$_FILES["foto_nueva"]["tmp_name"];
$nombre_foto=$_FILES["foto_nueva"]["name"];
if($nombre_foto!=""){
    move_uploaded_file($archi_foto, "../img/".$nombre_foto);
    $respuesta=$servicio->actualizar($pk_servicio, $nombre_servicio, $descripcion, $precio, $nombre_foto);
}else{
    $respuesta=$servicio->actualizar($pk_servicio, $nombre_servicio, $descripcion, $precio, $foto);
}

//$hoy=date("Y-m-d")

if ($respuesta==true){
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_servicios.php'> <script> alert('Listo, servicio actualizado') </script>";
}else{
   echo "<meta http-equiv='REFRESH'content='0; url=../insertar_servicios.php'> <script> alert('Ups, algo salió mál') </script>";
}


?>