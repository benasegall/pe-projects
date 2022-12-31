<?php

if (isset($_POST['submit'])) {
$to = "benasegall@gmail.com"; // this is your Email address
$from = $_POST['user_email']; // this is the sender's Email address
$name = $_POST['user_name'];
$subject = "Form submission";
$subject2 = "Copy of your form submission";
$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['user_message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

echo "Message Sent. Thank you " . $name . ", I'll be in contact.";
}

?>