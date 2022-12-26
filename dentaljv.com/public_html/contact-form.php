<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['message2'];
$para = 'guillermo_diarte@hotmail.com, medvaca@gmail.com';
$titulo = 'Dental J.V Centro Odontológico: ' . $_POST['asunto'];
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
  if (mail($para, $titulo, $msjCorreo, $header)) {
    echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://dentaljv.com/contact.php';
</script>";
  } else {
    echo 'Fall� el envio';
  }
}
