<?php

if (isset($_POST['submit'])) {
$to = "benasegall@gmail.com";
$from = $_POST['user_email'];
$name = $_POST['user_name'];
$subject = $_POST['email_subject'];
$subjectCopy = "Copy of " . $_POST['email_subject'];
$message = $name . " wrote the following:" . "\n\n" . $_POST['user_message'];
$messageCopy = "Here is a copy of your message " . $name . "\n\n" . $_POST['user_message'];

$header = "From:" . $from;
$header2 = "From:" . $to;

	if (mail($to, $subject, $message, $header) && mail($from, $subjectCopy, $messageCopy, $header2)) {
		echo "<h2>Your message has been delivered successfully, I'll be in contact.</h2>";
	} else {
		echo "My apologies, an error occcured. Please refresh the page and try again.";
	}
	
}

?>