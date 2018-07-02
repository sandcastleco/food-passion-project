<?php get_header(); ?>

<?php if (has_post_thumbnail(get_the_id())) : ?>
  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
  <section class="ph3 pv5 cover" style="background-image: url(<?php echo $image[0]; ?>);">
<?php else: ?>
  <section class="ph3 pv5 cover" style="background-image: url(<?php get_image_uri('background-2.jpg'); ?>);">
<?php endif; ?>

  <div class="jumbotron mt6 mb5 mw6 center tc">
    <h1 class="jumbotron-title dib mt5 mv0-ns pv3 ph4 mb3 f1 compote ttu lh-title fw9 bg-white-80"><?php the_title(); ?></h1>
  </div>
</section>

<section class="ph3 pv5 shadow-2 z-max relative" style="background-image: url(<?php get_image_uri('background-2.jpg'); ?>);">
  <div class="pa4 mw8 center cf bg-white-80">
    <div class="mw6 center">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="mb5 mt3">
          <?php the_content(); ?>
        </div>
        <hr class="b--compote mb5 w-50">
        <div class="cf">
          <img alt="<?php echo get_the_author_meta('display_name'); ?>" class="fr br-pill ml3 mw4" src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size'=>256)); ?>">
          <p><?php echo get_the_author_meta('description'); ?></p>
        </div>

        <hr class="b--compote mv5 w-50">

        <p class="tc">Published <?php echo get_the_time('F jS, Y'); ?></p>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
