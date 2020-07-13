<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
    
if(isset($_GET['email'])){

$email = $_GET['email'];

echo $to      = $email;
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


}else{
	echo "NO DATA";
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
		<button type="submit">Submit</button>
	</form>
	
</body>
</html>