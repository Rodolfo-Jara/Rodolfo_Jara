<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $tema = $_POST["tema"];
    $mensaje = $_POST["mensaje"];

    // Configura el destinatario del correo
    $destinatario = "rjaralopez19@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto: $tema";

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Correo: $correo\n\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Cabeceras para el correo
    $cabeceras = "From: $correo\r\n";

    // Enviar el correo
    mail($destinatario, $asunto, $cuerpo, $cabeceras);

    // Redirigir o mostrar un mensaje de éxito
    header("Location: index.html");
} else {
    // Acceso no autorizado
    http_response_code(403);
    echo "Acceso prohibido";
}
?>
