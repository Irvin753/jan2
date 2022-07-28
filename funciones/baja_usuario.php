<?php
include("../clases/Usuario.php");
$usuario=new Usuario();

$idusuario=$_GET["idusuario"];

$resultado=$usuario->baja($idusuario);

if($resultado){
    echo "<meta http-equiv='REFRESH'content='0; url=../lista_usuarios.php'> <script> alert('Listo, el usuario ha sido dado de baja') </script>";
}else{
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_usuarios.php'> <script> alert('Ups, algo salió mál') </script>";
}

?>