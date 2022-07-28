<?php
session_start();
include("../clases/Comentario.php");
$comentario=new Comentario();

$comentario2=$_POST['comentario'];
$fkusuario=$_SESSION['idusuario'];


$respuesta=$comentario->insertar($comentario2, $fkusuario);



if ($respuesta==true) {
    echo "<meta http-equiv='REFRESH'content='0; url=../lista_comentario.php'> <script> alert('Listo, comentario agregado') </script>";
}else{
    echo "<meta http-equiv='REFRESH'content='0; url=../insertar_comentario.php'> <script> alert('Algo salió mál') </script>";
}
?>
