<section class="info">
<?php include('templates/components/form/contact-form.php'); ?>

<p>For your convenience, you can also send me an email through this quick form.</p>

<form class="contact-form" method="post">
	<div class="field">
		<label for="name">Name</label> <input type="text" id="name" name="user_name" required="required" />
	</div>

	<div class="field">
		<label for="email">Email</label> <input type="text" id="email" name="user_email" required="required" />
	</div>

	<label for="subject">Subject</label> <input type="text" id="subject" name="email_subject" required="required" />

	<label for="message">Message</label> <textarea type="text" id="message" name="user_message" required="required"></textarea>

	<button type="submit" name="submit">Send</button>
</form>
</section>