<?php

include 'config.php';
//error_reporting (E_ALL ^ E_NOTICE);
if(isset($_POST['email']) && isset($_POST['message']))
{
	$name = 'Contact form';
	$email = trim($_POST['email']);
	$subject = 'Derena.INFO';
	$message = stripslashes($_POST['message']);
	$mail = mail(WEBMASTER_EMAIL, $subject, $message.
	" From: ".$name." <".$email.">\r\n");
	if($mail)
	{
		echo 'OK';
	}else
	{
		echo 'email not send';
	}

}else{
	echo "validation failed, emails or message is missing";
}
?>
