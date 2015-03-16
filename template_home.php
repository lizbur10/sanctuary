<?php
/*
Template Name: Custom Homepage Template
*/

	get_header();
?>

<?php if( have_rows('home_page_image_group') ): ?>

	<div class="home-page">

		<?php while(have_rows('home_page_image_group')): the_row(); ?>

			<div class="image-group">

				<img class="image-group-<?php the_sub_field('group_number'); ?>" src="<?php $image = the_sub_field('image'); echo $image['url']; ?>" />
				<div class="caption-group-<?php the_sub_field('group_number'); ?>">
					<h3><?php the_sub_field('main_caption'); ?></h3>
					<h4><?php the_sub_field('secondary_caption'); ?></h4>
				</div>
			</div>
		<?php endwhile; ?>
    </div>
<?php else:

	//no rows found

endif; ?>



<?php
	get_footer();

?>

