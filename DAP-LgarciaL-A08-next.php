<?php  
	$nombre = $_POST["nombre"];
	$matricula = $_POST["matricula"];

	$para      = 'garcia.luis.2k@gmail.com';
	$titulo    = 'Actividad 08-10.php';
	$mensaje   = $nombre.' '.$matricula.' ';
	$cabeceras = 'From: luis.garcialuna@outlook.com' . "\r\n" .
    'Reply-To: luis.garcialuna@no-reply.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($para, $titulo, $mensaje, $cabeceras);
?>