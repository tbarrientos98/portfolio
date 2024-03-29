<?php
$pg = "proyecto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
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
    <?php include_once("menu.php"); ?>

    <div class="container">
        <section id="proyectos">
            <div class="row py-4">
                <div class="col-12 pb-sm-5">
                    <h1>Mis proyectos</h1>
                </div>
            </div>
            <div class="row my-sm-3 my-5">
                <div class="col-sm-7 col-12 pt-sm-0 pt-4">
                    <h5>Estos son algunos de los trabajos que he realizado:</h5>
                </div>
            </div>
            <!-- empieza el 1er proyecto: ABM CLIENTES-->
            <div class="row pb-4">
                <!-- padding bottom para separar proyecto 2 del proyecto 3 -->
                <div class="col-sm-6 col-12 pb-sm-0 pb-4">
                    <div class="bg-white p-3 proyecto">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/abmclientes.png" alt="ABM CLientes" class="img-fluid">
                                <h4 class="text-center text-sm-left pt-4">ABM Clientes</h4>
                                <p class="py-3">Alta, Baja, modificación de un registro de clientes realizado en HTML,
                                    CSS, PHP,
                                    Bootstrap y Json. </p>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-6">
                                <a href="http://tomasbarrientos.com.ar/sistema/abmclientes/index.php" target="_blank" class="btn">Ver online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com/tbarrientos98/ABMclientes" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- termina el 1er proyecto-->

                <!-- empieza el 2do proyecto: ABM VENTAS-->
                <div class="col-sm-6 col-12">
                    <div class="bg-white p-3 proyecto">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                                <h4 class="text-center text-sm-left pt-3">Sistema de gestión de ventas</h4>
                                <p class="pt-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML,
                                    CSS, PHP, MVC,
                                    Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a href="http://tomasbarrientos.com.ar/login/login.php" target="_blank" class="btn">Ver online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com/tbarrientos98/ABMventas" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- termina el 2do proyecto-->

            <!-- empieza el 3er proyecto: PROYECTO LARAVEL-->
            <div class="row pb-4">
                <div class="col-sm-6 col-12 pb-sm-0 pb-4">
                    <div class="bg-white p-3 proyecto">
                        <div class="row pt-2">
                            <div class="col-12">
                                <img src="images/sistema-admin.png" alt="Proyecto Laravel" class="img-fluid">
                                <h4 class="text-center text-sm-left pt-3">Proyecto integrador</h4>
                                <p class="py-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery,
                                    AJAX, HTML, CSS, con panel administrador, gestor de usuarios, módulo de permisos y
                                    funcionalidades a fines.</p>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <!-- <div class="col-6">
                                <a href="" class="btn">En proceso</a> 
                            </div> -->
                            <div class="col-6 text-right">
                                <a href="" target="_blank">Código fuente</a>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- termina el 3er proyecto-->

                <!-- empieza el 4to proyecto: Proyecto página web react hooks -->

                <div class="col-sm-6 col-12">
                    <div class="bg-white p-3 proyecto">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/react-hooks.png" alt="ABM Ventas" class="img-fluid">
                                <h4 class="text-center text-sm-left pt-3">Consumo de api: Rick & Morty</h4>
                                <p class="py-3">Sitio web resposive integrando el consumo de una api y variados hooks de react.js</p>
                            </div>
                        </div>
                        <div class="row pt-2" style="position:relative; bottom: 0px">
                            <div class="col-6">
                                <a href="" target="_blank" class="btn">En proceso</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com/tbarrientos98/ReactHooks" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- termina el 4to proyecto-->

            </div>
            <div class="row pb-4">
                <!-- empieza el 5to proyecto: Proyecto página web de coderhouse-->

                <div class="col-sm-6 col-12">
                    <div class="bg-white p-3 proyecto">
                        <div class="row">
                            <div class="col-12">
                                <img src="images/candybay.png" alt="ABM Ventas" class="img-fluid">
                                <h4 class="text-center text-sm-left pt-3">Candybay Ecommerce</h4>
                                <p class="py-3">Sitio web resposive integrando el consumo de una api y variados hooks de react.js</p>
                            </div>
                        </div>
                        <div class="row pt-2" style="position:relative; bottom: 0px">
                            <div class="col-6">
                                <a href="https://62a1f99eab07ae0a460c522f--radiant-choux-e47c1d.netlify.app/" target="_blank" class="btn">En proceso</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com/tbarrientos98/ReactHooks" target="_blank">Código fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- termina el 5to proyecto-->

            </div>
    
            <div class="row pb-5 patrocinado">
                <div class="col-12 pb-5 pr-4 text-right pat-negro">
                    <p>Patrocinado por<br><a href="http://depcsuite.com" target="_blank" class="depcsuite">DePC Suite</a></p>
                </div>
            </div>
        </section>
    </div>
</body>
<?php include_once("footer.php"); ?>

</html>