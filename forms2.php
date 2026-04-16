<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enviar formulario</title>
</head>
<body>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $to = "itsfox7mail@gmail.com";
    $subject = "Nuevo mensaje del formulario";
    $body = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";
    $headers = "From: $nombre";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
</body>
</html>