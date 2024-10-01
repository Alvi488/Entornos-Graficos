<?php
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino=$_POST['email_destinatario'];
$remitente=$_POST['nombre'];
$asunto= "Recomendación de la página web";
$comentario= "\n
Hola $destino, \n
$remitente te ha recomendado visitar la página web de la empresa. \n
Enviado a las $hora del $fecha \n
";
$header="From: empresa@ejemplo.com";
$header .= "Reply-To:" . "empresa@ejemplo.com" . "\r\n";

$mail = mail($destino,$asunto,$comentario,$header);
if($mail){
    echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";
}
?>