<?php
// Simular que todo va bien, sin usar PHPMailer

// Recoger los datos del formulario
if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['mensaje']) && isset($_POST['politica'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $politica = $_POST['politica'];

    // Simular cuerpo del mensaje
    $mensaje = "
        <h2>Simulación de envío de formulario</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Teléfono:</strong> $telefono</p>
        <p><strong>Mensaje:</strong> $mensaje</p>
        <p><strong>Política:</strong> $politica</p>
        <p><em>Este es solo un test. El correo no se ha enviado realmente.</em></p>
    ";

    // Mostrar en pantalla
    echo $mensaje;
}
?>