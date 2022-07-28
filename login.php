<?php
include("menu2.php");
    ?>
    <br><br>
    <body stlye="background:#3EE319">
        
    
    <form action="funciones/validar_usuario.php" method="post" id="formulario" class="container" >
        <h1>Inicio de sesión</h1>
       <label>Nombre de usuario:</label> 
        <input type="text" name="username" placeholder="Nombre de usuario">
        <label> Contraseña:</label>
        <input type="password" name="pass" placeholder="Contraseña">
        <input class="btn btn-primary" type="submit" values="Entrar">
        <br><br>
        <a href="formulario_registro.php"><i>No tienes cuenta? Registrate aquí</i></a>
    </form>
    </body>
    <?php
include("clases/Servicios.php");
$servicio=new Servicio;

$arregloDatos=$servicio->mostrar();

    ?>
        <div>
        <h3 align="center">Los servicios que estamos ofreciendo</h3>
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

    </tr>
<?php
while($fila=mysqli_fetch_array($arregloDatos)){
?>
<tr>
    <td><?=$fila["nombre_servicio"]?></td>
    <td><?=$fila["descripcion"]?></td>
    <td><?=$fila["precio"]?></td>
    <td><img src="img/<?=$fila["foto"]?>" width="35%"></td>
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
<br><br><br><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<?php
include("footer.php");
    ?>
</body>
</html>