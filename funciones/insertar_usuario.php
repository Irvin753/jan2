<?php
include("../clases/Usuario.php");
$usuario=new Usuario();

$username=$_POST["username"];
$pass=$_POST["pass"];
$tipo=$_POST["tipo"];


$respuesta=$usuario->insertar($username, $pass, $tipo);

if ($respuesta==true){
    echo "<meta http-equiv='REFRESH'content='0; url=../lista_usuarios.php'> <script> alert('Listo, usuario agregado') </script>";
}else{
    echo "<meta http-equiv='REFRESH'content='0; url=../formulario_usuario.php'> <script> alert('Ups, algo salió mál') </script>";
}
?>