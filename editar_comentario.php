<?php
include("menu.php");
include("clases/Comentario.php");
$comentario=new Comentario();

$pk_comentario=$_GET["pk_comentario"];

$registro=$comentario->mostrarPorId($pk_comentario);
$datos=mysqli_fetch_assoc($registro);
    ?>
    <br><br>
    <form action="funciones/actualizar_comentario.php" method="post" id="formulario" class="container">
        <h1>Editar comentario</h1>
        <input type="hidden" name="pk_comentario" value="<?=$pk_comentario?>">

        <div class="row">
        <div class="col-3">
        <label>Comentario:</label> <br>
        <input value="<?=$datos['comentario']?>" type="text" name="comentario" class="form-control">
        </div>
</div>
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>
