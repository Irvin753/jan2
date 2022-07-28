<?php
include("menu.php");
include("clases/Servicios.php");

    ?>
    <body style="background: #BE77C8">
        
    
    <br><br>
    <form action="funciones/insertar_servicios.php" method="post" enctype="multipart/form-data" id="formulario" class="container">
        <h1>Agrega un servicio</h1>
        <div class="row">

        <div class="col-3">
       <label>Nombre del servicio:</label> <br>
        <input type="text" name="nombre_servicio">
       </div>

        <div class="col-3">
        <label>Descripcion:</label> <br>
        <input type="text" name="descripcion">
        </div>

        <div class="col-3">
        <label>Precio:</label> <br>
        <input type="text" name="precio">
        </div>

        <div class="col-8">
        <label>Fotografía:</label><br>
        <input type="file" name="foto" class="form-control">
        </div>

       </div>
    
        <input class="btn btn-primary" type="submit" value="Enviar"> 
    </form>
    </body>
    <br><br><br><br><br><br><br><br>
    <?php
include("footer.php");
    ?>

    