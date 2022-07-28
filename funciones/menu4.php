<?php
session_start();
if(!isset($_SESSION["idusuario"])){
  header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JAN-Cosmiatra</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/estilo.css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="js/bootstrap.js"></script>
 
    </head>
    <body>
        <header>
<nav class="navbar navbar-expand-lg navbar-light " >
<div class="logo">
        <a href="index.php"><img src="img/fondo.png" width="130" height="90"/></a>    
    </div>
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="lista_servicios.php">Mostrar Servicios</a></li>
            <li><a class="dropdown-item" href="formulario_servicios.php">Agregar Servicio</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Comentarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Mostrar Comentarios</a></li>
            <li><a class="dropdown-item" href="formulario_comentario.php">Agregar Comentario</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="agendar_cita.php">Agendar Cita</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="funciones/cerrar_sesion.php">Cerrar Sesión</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
</header>


</body>
</html>