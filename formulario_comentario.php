    <?php
include("menu.php");
include("clases/Comentario.php");

    ?>
    <body style="background: #BE77C8">
        
    
    <br><br>
    <form action="funciones/insertar_comentario.php" method="post" id="formulario" class="container">
        <h1>Agregar un comentario</h1>
       <label>Comentario:</label> 
        <input type="text" name="comentario">
    
        
        <input type="hidden" value="<?=$_SESSION["username"]?>">
  
    
        <input class="btn btn-primary" type="submit" value="Enviar"> 
    </form>
    </body>
<br><br><br><br><br><br><br><br>
    <?php
include("footer.php");
    ?>