<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $opinion = $_POST["opinion"];
    $valoracion = $_POST["valoracion"];
    
    // Configurar el correo electrónico
    $to = "geezg65@gmail.com";
    $subject = "Nueva opinión recibida";
    $message = "Nombre: $nombre\n";
    $message .= "Correo electrónico: $email\n";
    $message .= "Opinión: $opinion\n";
    $message .= "Valoración: $valoracion\n";
    $headers = "From: $email";

    // Enviar el correo electrónico
    if (mail($to, $subject, utf8_decode($message), $headers)) {
        echo "¡Gracias por tu opinión! Se ha enviado correctamente.";
    } else {
        echo "Error al enviar el correo electrónico.";
    }
} else {
    echo "Acceso denegado.";
}

header("Location:index.html")
?>