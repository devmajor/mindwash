<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
    

$email = $_POST['email'];

$to      = $email;
$subject = 'the subject';
$message = 'hello';
$headers = 'From: victorabayomi@gmail.com' . "\r\n" .
    'Reply-To: victorabayomi@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();



if (mail($to, $subject, $message, $headers)) {
    echo "mail send ... OK";
} else {
    echo "mail send ... ERROR";
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>MindWash</title>
</head>
<body>
	<form action="" method="GET">
		<input type="text" name="email">
		<button type="submit" name="submit_mail">Submit</button>
	</form>
	
</body>
</html>