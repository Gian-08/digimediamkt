

<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefonos = $_POST['telefonos'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$remitente='NOMBREREMITENTE';

$header = 'From: ' . $remitente . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html";

$mensaje = "<b>NOMBRE:</b>" . $nombre." <br>";
$mensaje .= "<b>APELLIDOS:</b>" . $apellidos." <br>";
$mensaje .= "<b>TELEFONO</b>: " . $telefonos . " <br>";
$mensaje .= "<b>EMAIL</b>: " . $email . " <br>";
$mensaje .= "<b>MENSAJE</b>: " . $_POST['mensaje'] . " <br>";
$mensaje .= "<b>Enviado el </b>" . date('d/m/Y', time());

$para = "email@yahoo.com";
$asunto = 'Contacto desde la Web';

mail($para, $asunto, utf8_decode($mensaje), $header)

?>
<!-- <script type="text/javascript">
	window.onload = function(){
		var conf = confirm("Su mensaje fue enviado con exito");
		if(conf)
		{
			document.location="index.html";
		}
		else
		{
			document.location="contacto.html";
		}
	}
</script> -->








