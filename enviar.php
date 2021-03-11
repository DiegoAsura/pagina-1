<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="img/favicon.png">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<title>CONTACT - MESSAGE SENT</title>
</head>
<body>
			<?php 
$myemail = 'aldanayajayra9@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
	<center>
		<h1>CONTACT ME</h1>
		<h2>Escriba su mensaje a nuestro correo, "aldanayajayra9@gmail.com"; 
			<br>
		Para comunicarse con nosotros.</h2>
		<form method="post" action="enviar.php">
			<input type="text" name="nombre" placeholder="NAME">
			<input type="email" name="email" placeholder="E-MAIL">
			<br>
			<textarea type="text" name="mensaje" placeholder="Write Your Message"></textarea>
			<br>
			<input type="submit" value="SEND">
			<br>
			<a href="home.html" class="bottom">HOME</a>
		</form>
	</center>

</body>
</html>