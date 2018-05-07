<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
	<?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<form>
  <label for="name">Name</label>
  <input name="name" type="text" placeholder="Your name">

  <label for="email">Email</label>
  <input name="email" type="email" placeholder="Your email">

  <button>Submit</button>
</form>

<?php get_footer(); ?>
