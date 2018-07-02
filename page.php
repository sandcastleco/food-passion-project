<?php

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
		<section class="ph3 pv5 cover" style="background-image: url(<?php echo $image[0]; ?>);">
	<?php else: ?>
		<section class="ph3 pv5 cover" style="background-image: url(<?php get_image_uri('background-2.jpg'); ?>);">
	<?php endif; ?>

		<div class="jumbotron mw7 center tc">
			<h1 class="jumbotron-title dib mt5 mb3 pt4 pt0-ns f1 f-subheadline-l compote ttu lh-solid fw9 tr"><span class="jumbotron-highlight white"><?php the_title(); ?> </span><br>food <br>passion <br>project </h1>
		</div>
	</section>

	<section class="ph3 pv5 shadow-2 z-max relative" style="background-image: url(<?php get_image_uri('background-2.jpg'); ?>);">
		<div class="pa4 mw8 center cf bg-white-80">
		  <div class="mw6 center">
				<?php the_content(); ?>
		  </div>
		  <!-- <div class="ph4 fl w-50">
				<h3 class="mt0 compote ttu f3 tr">Programs</h3>
				<div class="bg-white shadow-2 pa3 mb3 br3">
					<h4>Six-month program</h4>
					<p>Description of program.</p>
					<a href="#">Get started</a>
				</div>
				<div class="bg-white shadow-2 pa3 br3">
					<h4>Three-month program</h4>
					<p>Description of program.</p>
					<a href="#">Get started</a>
				</div>
		  </div> -->
		</div>
	</section>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
