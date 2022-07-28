<?php
include("menu.php");
include("clases/Cita.php");
$cita=new Cita();

$pk_cita=$_GET["pk_cita"];

$registro=$cita->mostrarPorId($pk_cita);
$datos=mysqli_fetch_assoc($registro);
    ?>
    <br><br>
    <form action="funciones/actualizar_cita.php" method="post" id="formulario" class="container">
        <h1>Editar cita</h1>
        <input type="hidden" name="pk_cita" value="<?=$pk_cita?>">

        <div class="row">
        <div class="col-4">
        <label>Fecha de la cita:</label> <br>
        <input value="<?=$datos['fecha']?>" type="date" name="fecha" class="form-control">
        </div>
        <div class="col-4">
        <label>Hora de la cita:</label> <br>
        <input value="<?=$datos['hora']?>" type="time" name="hora" class="form-control">
        </div>
        <div class="col-4">
        <label>Telefono:</label> <br>
        <input value="<?=$datos['telefono']?>" type="text" name="telefono" class="form-control">
        </div>
</div>
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>
