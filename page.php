<?php

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section class="pa4">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</section>

	<?php get_template_part('includes/book-call-to-action'); ?>
	<?php get_template_part('includes/newsletter-call-to-action'); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
