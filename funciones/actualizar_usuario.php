<?php
include("../clases/Usuario.php");

$usuario=new Usuario();

$idusuario= $_POST['idusuario'];
$username= $_POST['username'];
$pass= $_POST['pass'];


$respuesta=$usuario->actualizar($idusuario, $username, $pass);


if ($respuesta==true){
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_usuarios.php'> <script> alert('Listo, usuario actualizado') </script>";
}else{
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_usuarios.php'> <script> alert('Ups, algo salió mál') </script>";
}


?>