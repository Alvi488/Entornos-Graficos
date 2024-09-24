<?php
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$fecha=date("d-m-Y");
$hora= date("H :i:s");

$destino="atomasino@gmail.com"; //"micorreo@dominio.com";
$asunto= $_POST['texto'];
$header = "From:" . $_POST['email'];
$header .= "Reply-To:" . "$_POST[email]" . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion();
$comentario= "
\n
Nombre: $_POST[nombre]\n
Email: $_POST[email]\n
Texto: $_POST[texto]\n
Enviado: $fecha a las $hora\n
\n
";

$mail = mail($destino,$asunto,$comentario,$header);
if($mail){
    echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";
}
?>
