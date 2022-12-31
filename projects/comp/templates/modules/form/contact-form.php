<?php

if (isset($_POST['submit'])) {
$to = "benasegall@gmail.com";
$from = $_POST['user_email'];
$name = $_POST['user_name'];
$subject = "Site contact form";
$subjectCopy = "Copy of your form submission";
$message = $name . " wrote the following:" . "\n\n" . $_POST['user_message'];
$messageCopy = "Here is a copy of your message " . $name . "\n\n" . $_POST['user_message'];

$header = "From:" . $from;
$header2 = "From:" . $to;

	if (mail($to, $subject, $message, $header) && mail($from, $subjectCopy, $messageCopy, $header2)) {
		echo "Your message sent. Thank you " . $name . ", I'll be in contact.";
	} else {
		echo "Sorry, an error occcured. The message did not send.";
	}

}

?>