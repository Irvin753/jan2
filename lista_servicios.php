<?php
include("menu.php");
include("clases/Servicios.php");
$servicio=new Servicio;

$arregloDatos=$servicio->mostrar();

    ?>
    <body style="background: #CFC6C4">
        
    
        <div>
        <h3 align="center">En este apartado podrás encontrar los servicios que estamos ofreciendo</h3>
        <br><br><br><br>
            </div>
            <div class="container">
    <h2>Lista de servicios</h2>
<table class="table table-striped table-dark table-responsive">
    <tr>
        <th>Nombre del servicio</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Foto</th>
        <th>Opciones</th>
    </tr>
<?php
while($fila=mysqli_fetch_array($arregloDatos)){
?>
<tr>
    <td><?=$fila["nombre_servicio"]?></td>
    <td><?=$fila["descripcion"]?></td>
    <td><?=$fila["precio"]?></td>
    <td><img src="img/<?=$fila["foto"]?>" width="35%"></td>
    <td>
    <?php
if($_SESSION["tipo"]==1){
?>
        <a href="editar_servicio.php?pk_servicio=<?=$fila['pk_servicio']?>">
        <i title="Editar" class="bi bi-pencil-square"></i>
        </a>
        <a href="funciones/baja_servicio.php?pk_servicio=<?=$fila['pk_servicio']?>">
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



<div class="container">

    <div class="row">

       <div class="col-md-6"><br><br><br><br>
        <img width="450px" height="450px" src="img/tratamientos-faciales.jpg">
        </div>

        <div class="col-md-6"><br><br><br><br>
        <img width="450px" height="450px" src="img/paquetes.jpg">
        </div>

  
    </div>    
</div>
<br><br><br><br><br><br><br><br><br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
</body>
<?php
include("footer.php");
    ?>
