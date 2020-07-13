<?php

ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
if(isset($_POST['submit'])){
	
$to      = 'victor.mrcertified@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();



if (mail($to, $subject, $message, $headers)) {
    echo "mail send ... OK";
} else {
    echo "mail send ... ERROR";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>MindWash</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="email">
		<button name="submit">Submit</button>
	</form>
	
</body>
</html>