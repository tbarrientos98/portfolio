<?php
    $pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body id="home" background="images/fondo-01.png">

    <?php include_once("menu.php");?>

    <div class="container">
        <div class="container py-4">
            <section id="inicio">
                <div class="row my-5">
                    <div class="col-12">
                        <div class="row pb-sm-3 pb-5 ">
                            <div class="col-12 pb-sm-0 pb-5">
                                <h1>Hola!<br>Soy Tomás Barrientos.</h1>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 pt-5">
                                <h5>Programador Web Full Stack</h5>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-12">
                                <a href="proyecto.php" class="btn">Mirá mi trabajo!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-5 patrocinado">
                    <div class="col-12 pb-5 pr-4 text-right pat-negro">
                        <p>Patrocinado por<br><a href="http://depcsuite.com" target="_blank" class="depcsuite">DePC Suite</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php include_once("footer.php");?>

</body>

</html>