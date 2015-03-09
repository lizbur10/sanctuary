<?php
/*
Template Name: Custom Homepage Template
*/

	get_header();
?>

<div>
    <img src="<?php the_field('home_image_1'); ?>" alt="<?php the_field('image_1_alt_text'); ?>" />
	<div>
		<p><?php the_field('image_1_main_description'); ?></p>
		<p><?php the_field('image_1_secondary_description'); ?></p>
</div>


<?php
	get_footer();

?>

