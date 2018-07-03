<?php get_header(); ?>

  <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); ?>
  <?php if ($image) : ?>
    <section class="ph3 pv5 cover" style="background-image: url(<?php echo $image[0]; ?>);">
  <?php else: ?>
    <section class="ph3 pv5 cover" style="background-image: url(<?php get_image_uri('background-2.jpg'); ?>);">
  <?php endif; ?>

  <div class="jumbotron mw7 center tc">
    <h1 class="jumbotron-title dib mt5 pt4 pt0-ns mb3 f1 f-subheadline-l compote ttu lh-solid fw9 tr">Food <br>passion <br>project <br><span class="jumbotron-highlight white">blog</span></h1>
  </div>
</section>

<section class="ph3 pv5 shadow-2 z-max relative" style="background-image: url(<?php get_image_uri('background-2.jpg'); ?>);">
  <div class="pa4 mw8 center cf bg-white-80">
    <div class="mw6 center">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="mb5 mt3">
          <h2 class="mv0"><a class="link compote" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <span class="dib mb2"><?php echo get_the_time('F jS, Y'); ?></span>
          <?php if (has_post_thumbnail(get_the_id())) : ?>
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
          <?php endif; ?>
          <?php the_excerpt(); ?>
        </div>
      <?php endwhile; else: ?>
        <article>
          <p><?php _e('Blog coming soon!'); ?></p>
        </article>
      <?php endif; ?>
      <div class="tc mb3">
		    <div class="dib"><?php previous_posts_link( 'Newer posts' ); ?></div>
		    <div class="dib"><?php next_posts_link( 'Older posts' ); ?></div>
		  </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
