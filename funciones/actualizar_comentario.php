<?php
include("../clases/Comentario.php");

$comentario=new Comentario();

$pk_comentario= $_POST['pk_comentario'];
$comentario2= $_POST['comentario'];


$respuesta=$comentario->actualizar($pk_comentario, $comentario2);


if ($respuesta==true){
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_comentario.php'> <script> alert('Listo, comentario actualizado') </script>";
}else{
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_comentario.php'> <script> alert('Ups, algo salió mál') </script>";
}


?>