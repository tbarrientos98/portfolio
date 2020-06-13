<?php

$pg = "confirmacion-envio";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de envío</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <?php include_once("menu.php"); ?>
    </header>
    <section class="mb-5">
        <div class="container pb-1">
            <div class="row py-5">
                <div class="col-6">
                    <h1>Gracias por<br>contactarte,</h1>
                </div>
            </div>
            <div class="row py-5 mb-5">
                <div class="col-4">
                    <h5>te responderé a la brevedad.</h5>
                </div>
            </div>
        </div>
    </section>
    <div class="text-align"><?php include_once("footer.php");?></div>
</body>

</html>