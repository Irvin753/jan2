<?php
include ("menu.php");
include ("clases/Comentario.php");
$comentario=new Comentario();

$arregloDatos=$comentario->mostrar();

?>
<br><br>
<body style="background: #CFC6C4">
    

<div class="container">
    <h2>Comentarios</h2>
<table class="table table-striped table-dark table-responsive">
    <tr>
        <th>Comentario</th>
        <th>Usuario que comentó</th>
        <th>Opciones</th>
     
    </tr>
<?php
while($fila=mysqli_fetch_array($arregloDatos)){

?>
<tr>
    <td><?=$fila["comentario"]?></td>
    <td><?=$fila["username"]?></td>

    <td>
        
    <?php
if(($_SESSION["tipo"]==1)){

?>
       <a href="editar_comentario.php?pk_comentario=<?=$fila['pk_comentario']?>">
        <i title="Editar" class="bi bi-pencil-square"></i>
        </a>
        <a href="funciones/baja_comentario.php?pk_comentario=<?=$fila['pk_comentario']?>">
            <i title="Borrar" class="bi bi-x-circle-fill"></i>
        </a>
        <?php } ?>
    </td>

</tr>

  <?php
}
?>
</table>
</div>
</body>
<br><br><br><br><br><br><br><br>
<?php
include("footer.php");
    ?>