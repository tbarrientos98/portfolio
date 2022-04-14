<?php
$pg = "sobre_mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="icon" href="images/logotomas.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

    
    <div class="container-fuid difuminado">
    <?php include_once("menu.php"); ?> <!-- integrado en el container para que mantenga los estilos de esta seccion -->
        <div class="container">
            <div class="row pt-4">
                <div class="col-sm-7 col-12">
                    <h1>Sobre mí</h1>
                    <h5 class="my-5">Soy Programador Web Full Stack. Estoy descubriendo nuevos rubros, ampliando conocimientos y encontrando mis pasiones.</h5>
                    <a href="files/cvtbarrientos.pdf" target="_blank" class="btn">Descargar CV</a>
                </div>
                <div class="col-sm-5 col-12 text-center">
                    <img src="images/fotocvsinfondo.png" alt="CV" class="img-fluid pt-sm-0 pt-5 fotocv">
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-sm-5 pt-3">
        <section id="sobre mi">

            <div class="row">
                <!--primer bloque: programacion-->
                <div class="col-sm-6 col-12 pb-3">
                    <div class="bg-white sobremi">
                        <div class="row p-3">
                            <div class="col-12">
                                <i class="fas fa-code p-4"></i>
                                <h4 class="my-3">SKILLS</h4>
                                <p>HTML5, CSS, Bootstrap, PHP, POO, MVC, Framework Laravel,
                                    Framework Symfony, Javascript, jQuery, React.js, Node.js, AJAX, JSON.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--segundo bloque: software-->
                <div class="col-sm-6 col-12  pb-3">
                    <div class="bg-white sobremi">
                        <div class="row p-3">
                            <div class="col-12">
                                <i class="fas fa-laptop-code p-4"></i>
                                <h4 class="my-3">SOFTWARE</h4>
                                <p>GIT, GitHub, Gitlab, Visual Code, MS Office, Heidi SQL, Windows, Linux Ubuntu, Firebase.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--tercer bloque: idiomas-->
            <div class="row">
                <div class="col-sm-6 col-12 pb-4">
                    <div class="bg-white sobremi">
                        <div class="row p-3">
                            <div class="col-12">
                                <i class="fas fa-language p-4"></i>
                                <h4 class="my-3">IDIOMAS</h4>
                                <p>INGLES - Elementary A2<br>ESPAÑOL - Nativo</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!--cuarto bloque: hobbies-->
                <div class="col-sm-6 col-12 pb-4">
                    <div class="bg-white sobremi">
                        <div class="row p-3">
                            <div class="col-12">
                                <i class="fas fa-puzzle-piece p-4"></i>
                                <h4 class="my-3">HOBBIES</h4>
                                <p>Profesor de bachata</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--quinto bloque: servidores-->
                <div class="col-sm-6 col-12 pb-4">
                    <div class="bg-white sobremi">
                        <div class="row p-3">
                            <div class="col-12">
                                <i class="fas fa-server p-4"></i>
                                <h4 class="my-3">SERVIDORES</h4>
                                <p>HTTP Apache, XAMPP.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--sexto bloque: base de datos-->
                <div class="col-sm-6 col-12 pb-4">
                    <div class="bg-white sobremi">
                        <div class="row p-3">
                            <div class="col-12">
                                <i class="fas fa-database p-4"></i>
                                <h4 class="my-3">BASE DE DATOS</h4>
                                <p>MySQL/MariaDB, phpMyAdmin, Workbrench.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section id="experiencia" class="mb-5 mb-sm-0">
        <div class="container py-sm-5 py-4">
            <div class="row py-4">
                <div class="col-12 text-center text-sm-left">
                    <h2>Experiencia laboral</h2>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-2 col-12">
                    <h3>2019 – 2020 - PASTALINDA S.A</h3>

                </div>
                <div class="col-sm-3 col-12 pastalinda mt-sm-0 mt-3 pl-sm-4">
                    <p id="operario">Operario calificado:</p>
                    <img src="images/pastalinda2.png" alt="" class="img-thumbnail mt-4">
                </div>
                <div class="col-sm-7 col-12">
                    <p>Estuve a cargo de la puesta a punto de tornos automáticos destinados para producir
                        piezas determinadas. Utilicé diversas máquinas como inyectoras, tornos cnc, fresadoras,
                        laminadoras, entre otras. Control de calidad de productos y piezas. Realicé verificaciones con
                        instrumentos de medición: calibres, micrómetros, refractómetro, entre otros. Eventualmente realizaba el control
                        de stock de herramientas, y constantemente la organización, mantenimiento y limpieza del sector.
                    </p>
                </div>

            </div>
            <div class="row  patrocinado" class="justify-content-end">
                <div class="col-12 py-3 text-right pat-blanco">
                    <p>Patrocinado por<br><a href="http://depcsuite.com" target="_blank" class="depcsuite">DePC Suite</a></p>
                </div>
            </div>

        </div>

    </section>




</body>
<?php include_once("footer.php"); ?>

</html>