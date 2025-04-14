<?php
// INcluir el archivo de PHPMailer
require('PHPMailer/src/PHPMailer.php');

// Asegurate de que la ruta sea correcta
require('PHPMailer/src/Exception.php');

require('PHPMailer/src/SMTP.php');

// Crear una instancia de PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    // Configurar el servior SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com'; // el del dominio
    $mail->SMTPAuth = true;
    $mail->Username = 'tucorreo@tudominio.com';
    $mail->Password = '';
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS; // O STARTTLS
    $mail->Port = 465;

    // Datos del formulario
    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['mensaje']) && isset($_POST['politica'])) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $politica = $_POST['politica'];
    }
    

    // Remitente y destinatario
    $mail->setFrom('tucorreo@tudominio.com', 'Formulario web');
    $mail->addAddress('lolymaqueda@hotmail.com', 'tu nombre'); // Dirección de correo a dónde se envía

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje desde el formulario';
    $mail->Body = 
        "<h3>Nuevo mensaje desde la web</h3>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Nombre:</strong> $telefono</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mensaje:</strong> $mensaje</p>
        <p><strong>Política:</strong> $politica</p>
    ";
    //&$mail->AltBody = 'Este es el contenido del correo en texto plano';

    // Enviar correo
    $mail->send();
    echo 'Formulario enviado correctamente';

} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
}

?>