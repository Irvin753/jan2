<?php
include("../clases/Comentario.php");
$comentario=new Comentario();

$pk_comentario=$_GET["pk_comentario"];

$resultado=$comentario->baja($pk_comentario);

if($resultado){
    echo "<meta http-equiv='REFRESH'content='0; url=../lista_comentario.php'> <script> alert('Listo, el comentario se ha borrado') </script>";
}else{
   echo "<meta http-equiv='REFRESH'content='0; url=../lista_comentario.php'> <script> alert('Ups, algo salió mál') </script>";
}

?>