<?php

if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Llena toda la informacion!";
	return false;
   }
               
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	

$to = 'conos.sv@gmail.com'; 
$email_subject = "Te contactamos desde tu pagina web:  $name";
$email_body = "Tu has recibido un nuevo mensaje del formulario de tu pagina web.\n\n"."Aqui los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "De: conos.sv@gmail.com\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>