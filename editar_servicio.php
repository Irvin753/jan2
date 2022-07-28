<?php
include("menu.php");
include("clases/Servicios.php");
$servicio=new Servicio();

$pkservicio=$_GET["pk_servicio"];

$registro=$servicio->mostrarPorId($pkservicio);
$datos=mysqli_fetch_assoc($registro);
    ?>
    <br><br>
    <form action="funciones/actualizar_servicio.php" enctype="multipart/form-data" method="post" id="formulario" class="container">
        <h1>Editar datos de los servicios</h1>
        <input type="hidden" name="pk_servicio" value="<?=$pkservicio?>">

        <div class="row">
        <div class="col-3">
        <label>Nombre del servicio:</label> <br>
        <input value="<?=$datos['nombre_servicio']?>" type="text" name="nombre_servicio" class="form-control">
        </div>

        <div class="col-3">
        <label> Descripción:</label>
        <input value="<?=$datos['descripcion']?>" type="text" name="descripcion" class="form-control">
        </div>

        <div class="col-3">
        <label >Precio</label>
        <input value="<?=$datos['precio']?>" type="text" name="precio" class="form-control">
        </div>
</div>
       <div class="row">

        <div class="col-4">
            <img src="img/<?=$datos['foto']?>" width="100%">
            <input type="hidden" name="foto" value="<?=$datos['foto']?>">
        
        </div>
        <div class="col-8">
        <label>Fotografía:</label>
        <input type="file" name="foto_nueva" class="form-control">
        </div>

        
</div>
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>
