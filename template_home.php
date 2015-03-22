<?php
/*
Template Name: Custom Homepage Template
*/

	get_header();
?>

<?php if( have_rows('home_page_image_group') ): ?>

	<div class="home-page">
		<?php $count = 1;

		while(have_rows('home_page_image_group')): the_row(); 

			$main_caption = get_sub_field('main_caption');
			$secondary_caption = get_sub_field('secondary_caption');
			$text_color = get_sub_field('text_color');

			?>
			<div class= "image-group-<?php echo $count; ?>" >

				<img class="image-group" src="<?php $image = the_sub_field('image'); echo $image['url']; ?>" />
				<div class="caption-group">
					<h3 class="<?php echo $text_color ?>"><?php echo $main_caption ?></h1>
					<h4 class="<?php echo $text_color ?>"><?php echo $secondary_caption ?></h2>
				</div>
			</div>
		<?php $count++; 
		endwhile; ?>
    </div>
<?php else:

	//no rows found

endif; ?>



<?php
	get_footer();

?>

