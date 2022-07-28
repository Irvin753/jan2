<?php
include("menu.php");
include("clases/Usuario.php");
$usuario=new Usuario();

$idusuario=$_GET["idusuario"];

$registro=$usuario->mostrarPorId($idusuario);
$datos=mysqli_fetch_assoc($registro);
    ?>
    <br><br>
    <form action="funciones/actualizar_usuario.php" method="post" id="formulario" class="container">
        <h1>Editar usuario</h1>
        <input type="hidden" name="idusuario" value="<?=$idusuario?>">

        <div class="row">
        <div class="col-3">
        <label>Usuario:</label> <br>
        <input value="<?=$datos['username']?>" type="text" name="username" class="form-control">
        <div class="col-8">
        <label>Contraseña:</label> <br>
        <input value="<?=$datos['pass']?>" type="text" name="pass" class="form-control">
        </div>
</div>
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>
