<?php 
include('templates/modules/form/contact-form.php')
?>

<p>You can also fill out this form if it's easier.</p>

<form class="contact-form" method="post">
	<label for="name">Name</label> <br> <input type="text" id="name" name="user_name" required="required" />
	<br>

	<label for="email">Email</label> <br> <input type="text" id="email" name="user_email" required="required" />
	<br>

	<label for="subject">Subject</label> <br> <input type="text" id="subject" name="email_subject" required="required" />
	<br>

	<label for="message">Message</label> <br> <textarea type="text" id="message" name="user_message" required="required" rows="5" cols="30"></textarea>
	<br>

	<button type="submit" name="submit">Send</button>
</form>