<?php
include ("menu.php");
include ("clases/Usuario.php");
$usuario=new Usuario();

$arregloDatos=$usuario->mostrar();

?>
<body style="background: #CFC6C4">
    

<br><br>
<div class="container">
    <h2>Lista de usuarios</h2>
    <h4>Tipo 1: administrador <br>
        Tipo 2: mortal</h4>
<table class="table table-striped table-dark table-responsive">
    <tr>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Tipo</th>
        <th>Opciones</th>
     
    </tr>
<?php
while($fila=mysqli_fetch_array($arregloDatos)){

?>
<tr>
    <td><?=$fila["username"]?></td>
    <td><?=$fila["pass"]?></td>
    <td><?=$fila["tipo"]?></td>
    <td>
    <?php
if($_SESSION["tipo"]==1){
?>
       <a href="editar_usuario.php?idusuario=<?=$fila['idusuario']?>">
        <i title="Editar" class="bi bi-pencil-square"></i>
        </a>
        <a href="funciones/baja_usuario.php?idusuario=<?=$fila['idusuario']?>">
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