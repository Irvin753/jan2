<?php
include("menu2.php");
include("clases/Formulario.php");
$formulario=new Formulario();
?>
<br>
<img src="img/icono2.png" class="rounded mx-auto d-block" alt="..." height="130px">
<br>
<form action="funciones/insertar_formulario.php" class="container" enctype="multipart/form-data" method="post" id="formulario">
    <br><br>
    <h2>Registrate por favor!</h2>
    <div class="row">

        <div class="col-6">
        <label>Nombre de usuario:</label>
        <input class="form-control" type="text" name="username" placeholder="Nombre de usuario" required>
        </div>

        <div class="col-6">
        <label>Contraseña:</label>
        <input type="password" name="pass" class="form-control" placeholder="Contraseña" required>
        </div>
    </div>
    <br><br>
    <input class="btn btn-primary" type="submit" values="Guardar" >
</form>
<br><br><br><br><br><br><br><br>
<?php
if(isset($_POST['Guardar'])){
    $campo1=$_POST['username'];
    $campo2=$_POST['pass'];
    if($campo1=='username' or $campo2== 'pass'){
        echo "No puedes dejar los campos en blanco";
    }
    else if($campp1 != $username and $campo2 != $pass){
        echo "Los datos son incorrectos";
    }
}
?>