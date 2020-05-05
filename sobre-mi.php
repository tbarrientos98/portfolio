<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <div class="row">
                <div class="col-12" id="menuresponsive">
                    <ul class="navbar-nav mr-auto p-4">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="sobre-mi.php">SOBRE MI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyecto.php">PROYECTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <section id="sobre mi">
            <div class="row pt-4">
                <div class="col-sm-7 col-12">
                    <h1>Sobre mí</h1>
                    <h5 class="my-5">Soy técnico electromecánico, estudiante de programación y profesor de bachata. Estoy descubriendo nuevos rubros, ampliando conocimientos y encontrando mis pasiones.</h5>
                    <a href="files/cvtbarrientos.pdf" target="_blank" class="btn">Descargar CV</a>
                </div>
                <div class="col-sm-5 col-12 text-center">
                    <img src="images/fotocv.jpg" alt="CV" class="img-fluid p-4 fotocv">
                </div>
            </div>
            <div class="row">
                <!--primer bloque: programacion-->
                <div class="col-sm-6 col-12 pb-3">
                    <div class="bg-white sobremi">
                        <div class="row p-3">
                            <div class="col-12">
                                <i class="fas fa-code p-4"></i>
                                <h4 class="my-3">LENGUAJES DE PROGRAMACIÓN</h4>
                                <p>HTML, CSS, Bootstrap, jQuery.</p>
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
                                <p>GIT, GitHub, Visual Code, MS Office, Google Docs. MS Project. MS Windows</p>
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
                    <img src="images/pastalinda2.png" alt="img-responsive" class="img-thumbnail mt-4">
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


    <footer id="footermb">
        <div class="col-12 py-3 text-center">
            <div class="row">
                <div class="col-4 footermobile">
                    <a href="https://api.whatsapp.com/send?phone=541151757695&amp;text=Hola" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="col-4">
                    <a href="http://www.linkedin.com/in/tomás-barrientos-672020176" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-4">
                    <a href="https://github.com/tbarrientos98/portfolio" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </footer>



    <footer id="footerpc">
        <div class="container">
            <div class="row pt-4" id="footer">
                <div class="col-12 col-sm-4 py-4 text-sm-left text-center">
                    <p><a href="index.html">©Todos los derechos
                            reservados<br>2020</a></p>
                </div>
                <div class="col-12 col-sm-4 py-4 text-center">
                    <a href="https://api.whatsapp.com/send?phone=541151757695&amp;text=Hola" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="http://www.linkedin.com/in/tomás-barrientos-672020176" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/tbarrientos98/portfolio" target="_blank"><i class="fab fa-github"></i></a>

                </div>
                <div class="col-12 col-sm-4 py-4 text-sm-right text-center">
                    <p>Patrocinado por<br><a href="http://depcsuite.com" target="_blank">DePC Suite</a></p>

                </div>
            </div>
        </div>
    </footer>

</body>

</html>