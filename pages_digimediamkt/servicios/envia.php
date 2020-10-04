<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$ubicacion = $_POST['ubicacion'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su correo es: " . $mail . " \r\n";
$mensaje .= "Su telefono es: " . $_POST['telefono'] . " \r\n";
$mensaje = "Su empresa es:" . $empresa . ",\r\n";
$mensaje = "Su ubicación es:" . $ubicacion . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());


$para = "ventasneonhouse@gmail.com";

mail($para, $asunto, $mensaje, $header);

header('Location:servicios.html');
?>