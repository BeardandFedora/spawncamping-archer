<?php

// Check to make sure that the name field is not empty
if(trim($_POST['contactName']) === '') {
	$nameError = true;
	$hasError = true;
} else {
	$name = trim($_POST['contactName']);
}

// Check to make sure sure that a valid email address is submitted
if(trim($_POST['email']) === '')  {
	$emailError = true;
	$hasError = true;
} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
	$emailError = true;
	$hasError = true;
} else {
	$email = trim($_POST['email']);
}
	
// Check to make sure comments were entered	
if(trim($_POST['comments']) === '') {
	$commentError = true;
	$hasError = true;
} else {
	if(function_exists('stripslashes')) {
		$comments = stripslashes(trim($_POST['comments']));
	} else {
		$comments = trim($_POST['comments']);
	}
}

// Check to see if sum has been correctly answered
if(trim($_POST['verify']) !== '4') {
	$verifyError = true;
	$hasError = true;
}

// Error Message
if(($NameError == true) OR ($emailError == true) OR ($commentError == true) OR ($verifyError == true)) {
	$captchaError = true;
}

// If there is no error, send the email
if(!isset($hasError)) {

	$emailTo = $_POST['emailAddress'];
	$subject = 'You have received a message from '.$name;
	$sendCopy = trim($_POST['sendCopy']);
	$body = "Name: $name \n\nEmail: $email \n\nComment: $comments";
	$headers = 'From: <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
	
	mail($emailTo, $subject, $body, $headers);

	if($sendCopy == true) {
		$subject = 'You emailed Your Name';
		$headers = 'From: Your Name <noreply@somedomain.com>';
		mail($email, $subject, $body, $headers);
	}

	$emailSent = true;

}

?>