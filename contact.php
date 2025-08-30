<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$to = 'patrarajesh2006@gmail.com'; 
		$subject = $_POST['subject']; 
		$body = "From: $name\nE-Mail: $email\nSubject: $subject\nMessage:\n$message";
		$headers = "From: $email\r\nReply-To: $email\r\n";
		if (mail($to, $subject, $body, $headers)) {
			header("Location: thank-you.html");
			exit();
		} else {
			echo "Sorry, your message could not be sent.";
		}
	}
	
?>