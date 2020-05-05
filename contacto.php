<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
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
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-mi.php">SOBRE MI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proyecto.php">PROYECTOS</a>
                        </li>
                        <li class="nav-item active ">
                            <a class="nav-link" href="contacto.php">CONTACTO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
  <div class="container">
    <section id="contacto">
      <div class="row my-4 py-sm-5 my-sm-0">
        <div class="col-sm-12 col-12 pb-5 pb-sm-3">
          <h1>¡Trabajemos juntos!</h1>
        </div>
      </div>
      <div class="row mt-3 py-5 p-sm-0 my-sm-0">
        <div class="col-sm-6 col-12 pb-sm-3 pb-2 mb-sm-5">
          <h3>Para más detalles sobre mi trabajo podés ver mi <a href="http://www.linkedin.com/in/tomás-barrientos-672020176" target="_blank">Linkedin</a>, descargar mi <a href="files/cvtbarrientos.pdf" target="_blank">CV</a>
            o mandarme un <a href="#formulario">mensaje.</a></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-12">
          <form action="" id="formulario">
            <div class="row">
              <div class="col-sm-6 col-12 form-group">
                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required placeholder="NOMBRE">
              </div>
              <div class="col-sm-6 col-12 form-group">
                <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" required placeholder="CORREO">
              </div>
              <div class="col-12  form-group">
                <input type="text" name="txtAsunto" id="txtAsunto" class="form-control" required placeholder="ASUNTO">
              </div>
              <div class="col-12 form-group">
                <textarea type="text" name="txtMensaje" class="form-control" placeholder="MENSAJE" required></textarea>
              </div>
            </div>
            <div class="row my-4 mb-5">
              <div class="col-12 text-center">
                <input type="submit" name="btnENVIAR" value="ENVIAR" class="btn">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row pb-5 patrocinado">
        <div class="col-12 pb-5 pr-4 text-right pat-negro">
          <p>Patrocinado por<br><a href="http://depcsuite.com" target="_blank" class="depcsuite">DePC Suite</a></p>
        </div>
      </div>
    </section>
  </div>
  <footer id="footermb" class="mt-5">
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