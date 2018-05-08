<?php get_header(); ?>

<section class="pa4">
  <h1>The blog is here</h1>
  <h2><?php single_cat_title(); ?></h2>
  <?php the_archive_description(); ?>
</section>

<?php get_footer(); ?>
