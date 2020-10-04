<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$celular = $_POST['celular'];
$empresa = $_POST['empresa'];
$ubicacion = $_POST['ubicacion'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su empresa es: " . $empresa . " \r\n";
$mensaje .= "Su ubicación es: " . $ubicacion . " \r\n";
$mensaje .= "Su celular es: " . $_POST['celular'] . " \r\n";


$mensaje .= "Enviado el " . date('d/m/Y', time());


$para = "christianstlv21@gmail.com";

mail($para, $asunto, $mensaje, $header);

header('Location:servicios.html');
?>
