<?php get_header(); ?>

<section class="ph3 pt6 pb5 cover" style="background-image: url(<?php get_image_uri('background-1.jpg'); ?>);">
  <div class="mw7 center tc">
    <h1 class="dib mb3 f1 f-subheadline-l compote ttu lh-solid fw9 tr bb pb4"><span class="outline-compote">Explore<br>your</span><br>food<br>passion<br>project</h1>
    <p class="f3 measure-narrow center">Repair your relationship with food by cultivating knowledge and pleasure at the table and in life</p>
  </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="ph3 pv5 cover shadow-2 z-max relative" style="background-image: url(<?php get_image_uri('background-2.jpg'); ?>);">
  <div class="measure center">
    <h2 class="mt0 lh-title compote">Trade guilt, shame, and nutrients for knowledge, enthusiasm, and wholeness.</h2>
  	<?php the_content(); ?>

    <h3 class="lh-title">Schedule your free 30-minute nutritional consultation with Tiffany.</h3>
    <form>
      <div>
        <label for="name">Name</label>
        <input name="name" type="text" placeholder="Your name">
      </div>

      <div>
        <label for="email">Email</label>
        <input name="email" type="email" placeholder="Your email">
      </div>

      <button>Submit</button>
    </form>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
