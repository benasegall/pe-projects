<link rel="stylesheet" href="templates/modules/form/style.css">

<?php 
include('templates/modules/form/contact-form.php')
?>

<p class="p-spacing">For your convenience, you can also send me an email through this quick form.</p>

<form class="contact-form" method="post">
	<fieldset>
		<label for="name">Name</label> <br> <input type="text" id="name" name="user_name" required="required" />

		<label for="email">Email</label> <br> <input type="text" id="email" name="user_email" required="required" />

		<label for="subject">Subject</label> <br> <input type="text" id="subject" name="email_subject" required="required" />

		<label for="message">Message</label> <br> <textarea type="text" id="message" name="user_message" required="required"></textarea>

		<button type="submit" name="submit">Send</button>
	</fieldset>
</form>