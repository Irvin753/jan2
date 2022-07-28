<?php
session_start();
include("../clases/Usuario.php");
include("../clases/Formulario.php");
$usuario=new Usuario();

$username=$_POST["username"];
$pass=$_POST["pass"];

$resultado=$usuario->buscar($username, $pass);
//$resultado=$usuario->buscar1($usuario, $contrasena);

$resultado2=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);


if ($resultado2==0){
   echo "<meta http-equiv='REFRESH'content='0; url=../login.php'> <script> alert('Usuario o contraseña incorrectos') </script>";
}else{
   $_SESSION["idusuario"]=$datos["idusuario"];
   $_SESSION["username"]=$username;
   $_SESSION["tipo"]=$datos["tipo"];
 
   echo "<meta http-equiv='REFRESH'content='0; url=../index.php'> <script> alert('Bienvenido(a)') </script>";
}

    ?>