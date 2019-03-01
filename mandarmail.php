<?php

if (isset($_POST['enviar'])) {
  if (!empty($_POST['nombre']) && !empty($_POST['apellido']) &&
  !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['asunto'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $header = "X-Mailer: PHP/" . phpversion();

    if(mail('david.aguilo232@gmail.com',$nombre,$apellido,$telefono,$email,$asunto,$header)){
      echo "<script language='javascript'>
         alert('Mensaje enviado, muchas gracias.');
      </script>";
    }else{
      echo "<script language='javascript'>
         alert('fallado');
      </script>";
    }
    }
}

?>
