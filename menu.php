
<nav class="navbar navbar-expand-md">
<div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <div class="row">
            <div class="col-12" id="menuresponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo $pg == "inicio" ? "active" : ""; ?>">
                        <a class="nav-link " href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item  <?php echo $pg == "sobre_mi" ? "active" : ""; ?>">
                        <a class="nav-link" href="sobre-mi.php">SOBRE MI</a>
                    </li>
                    <li class="nav-item <?php echo $pg == "proyecto" ? "active" : ""; ?>">
                        <a class="nav-link" href="proyecto.php">PROYECTOS</a>
                    </li>
                    <li class="nav-item <?php echo $pg == "contacto" || $pg == "confirmacion-envio" ? "active" : ""; ?>">
                        <a class="nav-link" href="contacto.php">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</nav>
