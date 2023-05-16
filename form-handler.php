<?
$name = $_POST['name'];
$vistior_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'rosalescindy829@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
			   "User Email: $vistior_email.\n".
			   	 "Subject: $subject.\n".
			   	 "User Message: $message.\n";

$to ='rbhuizo@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $vistior_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>