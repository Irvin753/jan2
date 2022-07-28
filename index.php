<?php
include("menu.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/estilo.css">
    <title>JAN-COSMIATRA</title>
</head>
<body style="background: #FFF">
    <div class="container" style="background: #FFF">
    <h2>Bienvenido <?php echo $_SESSION["username"];?></h2>
    
<main>
        <section class="our-services" >
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h3>¿Quienes somos?</h3>
                            <h5>Somos un pequeño negocio que ofrece el servicio de cosmeatria en Escuinapa, Sinaloa, Mexico.
                             En este sitio puedes agendar tu cita adaptada a tus tiempos. <br><br>Contamos con diversos estudios
                              y diplomados sobre el tema, para que el servicio que ofrecemos sea 100% garantizado.</h5>
                       
                            <br>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/jan.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
</main>
</div>
<div class="container" style="background: #BE77C8">
    <h1 align="center">Algunos de nuestros clientes</h1>

    <div class="row">

       <div class="col-md-6">
        <h2>ANTES</h2>
        <img width="450px" src="img/persona1.jpg">
        </div>

        <div class="col-md-6">
        <h2>DESPUÉS</h2>
        <img width="450px" src="img/persona11.jpg">
        </div>

        <div class="col-md-6"><br><br><br><br>
        <h2>ANTES</h2>
        <img width="450px" src="img/persona22.jpg">
        </div>

        <div class="col-md-6"><br><br><br><br>
        <h2>DESPUÉS</h2>
        <img width="450px" src="img/persona222.jpg">
        </div>

    </div>    
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
    


<?php
include("footer.php");
    ?>

</body>
</html>
