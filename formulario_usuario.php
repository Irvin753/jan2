<?php
include("menu.php");
if($_SESSION["tipo"]!=1){
    header("location: index.php");

}
    ?>
    <body style="background: #BE77C8">
        
   
    <br><br>
    <form action="funciones/insertar_usuario.php" method="post" id="formulario" class="container">
        <h1>Agregar nuevo usuario</h1>
       <label>Nombre de usuario:</label> 
        <input type="text" name="username" class="form-control" required>
        <label> Contraseña:</label>
        <input type="password" name="pass" class="form-control" required>
        <label>Tipo:</label>
        <select name="tipo" class="form-control" required>
        <option value="1">Administrador</option>
        <option value="2">Mortal</option>
        </select>
    
        <input class="btn btn-primary" type="submit" values="Guardar">
    </form>
    </body>
    <br><br><br><br><br><br><br><br><br><br>
    <?php
include("footer.php");
    ?>
