<?php
include ("menu.php");
include ("clases/Cita.php");
$cita=new Cita();

$arregloDatos=$cita->mostrar();

?>
<body style="background: #CFC6C4">
    

<br><br>
<div class="container">
    <h2>Lista de las citas</h2>
<table class="table table-striped table-primary table-dark table-responsive">
    <tr>
        <th>Fecha de la cita</th>
        <th>Hora de la cita</th>
        <th>Usuario que realizó la cita</th>
        <th>Telefono del usuario</th>
        <th>Opciones</th>
     
    </tr>
<?php
while($fila=mysqli_fetch_array($arregloDatos)){

?>
<tr>
    <td><?=$fila["fecha"]?></td>
    <td><?=$fila["hora"]?></td>
    <td><?=$fila["username"]?></td>
    <td><?=$fila["telefono"]?></td>

    <td>
    <?php
if($_SESSION["tipo"]==1){
?>
       <a href="editar_cita.php?pk_cita=<?=$fila['pk_cita']?>">
        <i title="Editar" class="bi bi-pencil-square"></i>
        </a>
        <a href="funciones/baja_cita.php?pk_cita=<?=$fila['pk_cita']?>">
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