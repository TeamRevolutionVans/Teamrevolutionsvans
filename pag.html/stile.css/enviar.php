<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$phone = $_POST['phone'];
$nombre = $_POST['nombre'];
$text = $_POST['text'];
$number = $_POST['number'];
$date = $_POST['date'];
$file = $_POST['file'];
$message = $_POST['message'];
$servicio = $_POST['servicio'];
$oferta = $_POST['oferta'];



$para = 'teamrevolutionvans@gmail.com';
$header = "enviado desde team revolution vans";
$messageCompleto = $message . "\nAtentamente: " . $nombre . $email . $asunto . $phone . $nombre . $text . $number . $date . $file .  $message;

mail($para, $asunto, utf8_decode($messageCompleto), $header);
echo "<script>alert('correo enviado exit')</script>";
echo "<script> setTimeout(\"location.href='comentarios.html'\",1000)</script>";
?>