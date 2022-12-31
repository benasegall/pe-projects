<?php 
include('templates/modules/form/contact-form.php')
?>

<p>Fill out this quick form to get in touch through email.</p>

<form class="contact-form" method="post">
	<label for="name">Name</label> <br> <input type="text" id="name" name="user_name" />
	<br>

	<label for="email">Email</label> <br> <input type="text" id="email" name="user_email" />
	<br>

	<label for="phone">Phone</label> <br> <input type="text" id="phone" name="user_phone" />
	<br>

	<label for="message">Message</label> <br> <textarea type="text" id="message" name="user_message" rows="5" cols="30"></textarea>
	<br>

	<button type="submit" name="submit">Send</button>
</form>