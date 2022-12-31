<?php

if (isset($_POST['submit'])) {
$to = "benasegall@gmail.com"; // this is your Email address
$from = $_POST['user_email']; // this is the sender's Email address
$name = $_POST['user_name'];
$subject = "Form submission";
$subject2 = "Copy of your form submission";
$message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);
mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

echo "Message Sent. Thank you " . $name . ", I'll be in contact.";
}

?>

<p>Fill out this quick form to get in touch through email.</p>

<form class="contact-form" method="post">
	<label for="name">Name</label> <br> <input type="text" id="name" name="user_name" />
	<br>

	<label for="email">Email</label> <br> <input type="text" id="email" name="user_email" />
	<br>

	<label for="phone">Phone</label> <br> <input type="text" id="phone" name="user_phone" />
	<br>

	<label for="message">Message</label> <br> <textarea type="text" id="message" name="user_messae" rows="5" cols="30"></textarea>
	<br>

	<button type="submit" name="submit">Send</button>
</form>