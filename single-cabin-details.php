<?php


	get_header();
?>

<?php

    $images = get_field('image_gallery');

 

    if( $images ): ?>
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <p class="flex-caption"><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

	<div class="cabin-info">
		<h2 class="cabin-name"><?php the_field('cabin_name'); ?></h2>
		<p><?php the_field('summary_description'); ?></p>

		<div>
			<h3 class="art-features">Art making features:</h3>
			<ul><?php the_field('art_making_features'); ?></ul>
		</div>

		<div>
			<h3 class="standard-features">Standard cabin features include:</h3>
			<ul><?php the_field('standard_cabin_features'); ?></ul>
		</div>

		<div>
			<h4 class="pricing-information">Once accepted (<a href="#">application process</a>):</h4>
			<ul><?php the_field('pricing_information'); ?></ul>

			<button type="button">
				<a href="#">check availability</a>
			</button>
		</div>
		
		<img src="<?php $image = the_field('background_image'); echo $image['url']; ?>" />"

	</div>




<?php
	get_footer();

?>

