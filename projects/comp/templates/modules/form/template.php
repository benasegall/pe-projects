<?php 
include('templates/modules/form/contact-form.php')
?>

<p>Fill out this quick form to get in touch through email.</p>

<form class="contact-form" method="post">
	<label for="name">Name</label> <br> <input type="text" id="name" name="user_name" required="required" />
	<br>

	<label for="email">Email</label> <br> <input type="text" id="email" name="user_email" required="required" />
	<br>

	<label for="phone">Phone</label> <br> <input type="text" id="phone" name="user_phone" />
	<br>

	<label for="subject">Subject</label> <br> <input type="text" id="subject" name="email_subject" required="required" />
	<br>

	<label for="message">Message</label> <br> <textarea type="text" id="message" name="user_message" required="required" rows="5" cols="30"></textarea>
	<br>

	<button type="submit" name="submit">Send</button>
</form>