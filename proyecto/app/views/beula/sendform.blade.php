<?php

// please only use the fields thata re present in the html form itself for now we have listed all possible ones

$to = "josephquenta@gmail.com";

if (isset($_POST)){

	$subject = "Landing Page Ligas Femeninas LF7";
	
	$message = "Nombres: " . $_POST['nombres'];
	$message .= "<br>Email: " . $_POST['email'];
	$message .= "<br>Mensaje: " . $_POST['comentarios'];
	
};

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "From: " . $_POST['nombres'] . " <" . $_POST['email'] . ">". "\r\n";

//$fromAddress = "From:" . $_POST['full_name'] . "\r\n" .
// "Reply-To: webmaster@" . $_SERVER['SERVER_NAME'] . "\r\n" .
// "X-Mailer: PHP/" . phpversion();

if( mail($to, $subject, $message, $headers) ) {
	echo "ok se envio!";
} else {
	echo "error!!";
}