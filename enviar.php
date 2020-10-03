<?php

    
    //Esto es al correo al que se enviará el mensaje
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $message = $_POST['message'];

    
    $header = "Enviado desde la página web.";
    $header = "From: " . $correo . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";
     
    $message = "Este mensaje fue enviado por: " . $nombre . "\r\n";
    $message .= "Su correo electrónico es: " . $correo . "\r\n";
    $message .= "Su teléfono de contacto es: " . $telefono . "\r\n";
    $message .= "Mensaje: " . $_POST['message'] . "\r\n";
    $message .= "Enviado el: " . date('d/m/y', time());

    $destinatario = 'leyeye10@gmail.com';
    $asunto = 'Enviado tu desde página web';

    mail($destinatario, $asunto, utf8_decode($message), $header);

    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href=contact.html\",1000)</script>";
?>