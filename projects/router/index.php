
<?php include "functions.php"; ?>

<header class="site-header">
	<p><?=queryString();?></p>
	<?php include('pages/site-nav.php'); ?>
</header>

<?php renderPage(); ?>