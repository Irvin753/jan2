<?php

include("../clases/Formulario.php");


$formulario=new Formulario();

$username=$_POST["username"];
$pass=$_POST["pass"];
/*$edad=$_POST["edad"];
$sexo=$_POST["sexo"];


$archi_foto=$_FILES["foto"]["tmp_name"];
$nombre_foto=$_FILES["foto"]["name"];

//$hoy=date("Y-m-d")

move_uploaded_file($archi_foto, "../img/".$nombre_foto);
$telefono=$_POST["telefono"]; $edad, $sexo, $nombre_foto, $telefono*/


$respuesta=$formulario->insertar($username,$pass);

if ($respuesta==true){
    echo "<meta http-equiv='REFRESH'content='0; url=../login.php'> <script> alert('Listo, ahora inicia sesión') </script>";
}else{
    echo "<meta http-equiv='REFRESH'content='0; url=../login.php'> <script> alert('Algo salió mál') </script>";
}


?>
