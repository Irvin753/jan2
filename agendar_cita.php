<?php
include("menu.php");
    ?>
    <body style="background: #BE77C8">
        
    
    <br>
    <img src="img/cita3.png" class="rounded mx-auto d-block" alt="..." height="140px">
<br>
<form action="funciones/insertar_cita.php"class="container" method="post" id="formulario" >
    <br><br>
    <h1>Horario</h1>
    <h5>De 10 am a 12:30pm <br>
       de 3pm a 7:30pm <br>
       Sábados de 9 am y 2pm <br>
       Domingos cerrado</h5>
    <h2>Agenda tu cita!</h2>
    <div class="row">

        <div class="col-4">
        <label>Fecha de la cita:</label>
        <input type="DATE" name="fecha" class="form-control" required>
        </div>

        <div class="col-4">
        <label>Hora de la cita:</label>
        <input class="form-control" type="TIME" name="hora" required>
        </div>
        <div class="col-4">
        <label>Telfono:</label>
        <input type="text" name="telefono" class="form-control" required>
        </div>
        
    </div>
    <br><br>
    <input class="btn btn-primary" type="submit" values="Guardar" >

</form>
</body>
<br><br><br><br><br><br><br><br>
<?php
include("footer.php");
    ?>