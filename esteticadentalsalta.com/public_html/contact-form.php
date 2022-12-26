<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['message2'];
$para = 'guillermo_diarte@hotmail.com, odrominan@gmail.com';
$titulo = 'Tu Mejor Sonrisa Centro Odontológico: ' . $_POST['asunto'];
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST['submit']) {
  if (mail($para, $titulo, $msjCorreo, $header)) {
    echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://esteticadentalsalta.com/contact.php';
</script>";
  } else {
    echo 'Fall� el envio';
  }
}
