
<?php get_header(); ?>

<h1>alphabet</h1>

<?php get_footer(); ?>

<?php

	if (is_page('page ONE')) {
		$args = array(  
		'post_type' => 'Plural L',
		);

		$loop = new WP_Query( $args ); 

	while ( $loop->have_posts() ) : $loop->the_post(); 
		echo "<h2>" . get_the_title() . "</h2>";
	endwhile;

	wp_reset_postdata(); 
	}

?>