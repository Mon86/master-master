<?php

$nombre = $_POST["name"];
$mail = $_POST["email"];
$telefono = $_POST["phone"];
$mensaje = $_POST["mensaje"];

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es " . $mail . ",\r\n";
$mensaje .= "Su teléfono es " . $telefono . ",\r\n";
$mensaje .= "Mensaje: " . $_POST["mensaje"] . ",\r\n";
$mensaje .= "Enviado el: " . date("d/m/y", time());

$para = "jftripel@gmail.com";
$asunto = "Consulta desde TRIPEL PIPES";

mail($para, $asunto, utf8_decode($mensaje));

header('Location: index.html');
die();

?>