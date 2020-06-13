<?php
  $pg = "contacto";
?>

<?php
include_once("PHPMailer/src/PHPMailer.php");
include_once("PHPMailer/src/SMTP.php");

if ($_POST) { /* es postback */
  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  guardarCorreo($correo);
  $asunto = $_POST["txtAsunto"];
  $mensaje = $_POST["txtMensaje"];

  if ($nombre != "" && $correo != "") {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "mail.dominio.com"; // SMTP a utilizar
    $mail->Username = "info@dominio.com.ar"; // Correo completo a utilizar
    $mail->Password = "aqui va la clave de tu correo";
    $mail->Port = 25;
    $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
    $mail->FromName = "Tu nombre a mostrar";
    $mail->IsHTML(true);
    $mail->SMTPOptions = array(
      'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
    );

    //Destinatarios
    $mail->addAddress($correo);
    $mail->addBCC("barrientostomas98@gmail.com"); //Copia oculta
    $mail->Subject = utf8_decode("Contacto página Web");
    $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
    //if (!$mail->Send()) {
      $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
    //}
    $mail->ClearAllRecipients(); //Borra los destinatarios

    //Envía ahora un correo a nosotros con los datos de la persona
    $mail->addAddress("info@dominio.com.ar");
    $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
    $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";

    //if ($mail->Send()) { /* Si fue enviado correctamente redirecciona */
      header('Location: confirmacion-envio.php');
    //} else {
      $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
    }
  //} else {
    $msg = "Complete todos los campos";
  //}
}
?>

<?php 
//Definición
function guardarCorreo($correo){
  $archivo = fopen("mails.txt", "a+");
  fwrite($archivo, $correo. ";\n");
  fclose($archivo);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Contacto</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
 
<body> 
  <?php include_once("menu.php") ?>
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
          <form action="contacto.php" method="POST" id="formulario">
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
  <?php include_once("footer.php"); ?>
</body>

</html>