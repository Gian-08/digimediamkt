<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$ubicacion = $_POST['ubicacion'];
$detalle = $_POST['detalle'];

$body = "Nombre: ". $nombre . "<br>Correo: ". $email ."<br>Telefono: ". $telefono . "<br>Empresa: ". $empresa . 
"<br>Direccion: ". $ubicacion . "<br>Detalle: ". $detalle;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/POP3.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
    
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                
    $mail->SMTPAuth   = true;
    $mail->Username   = 'digi.mediamkt@gmail.com';                    
    $mail->Password   = '2020@MKT@';                                     
    //$mail->Username   = 'ventas@digimediamkt.com';                    
    //$mail->Password   = '#Emprendeysorprende2020#';                                      
    $mail->Port       = 587;                                    

    //Recipients
    $mail->setFrom($email, $nombre );

    //$mail->addAddress('digi.mediamkt@gmail.com');    
    $mail->addAddress('jeancarlosmamanilingan@gmail.com');  

 
    //$mail->addAttachment('conecta.jpeg', 'conecta.jpeg');    

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Consultas';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';

   if($mail->send()){
    echo 'Enviado';
}
else {
    echo 'Error';
    echo $mail->ErrorInfo;
}
?>