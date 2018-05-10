<?php get_header(); ?>

<section class="ph3">
  <div class="mw7 center tc">
    <h1 class="dib mb3 f1 f-subheadline-l compote ttu lh-solid fw9 tr bb pb4"><span class="outline-compote">Explore<br>your</span><br>food<br>passion<br>project</h1>
    <p class="f3 measure-narrow center">Repair your relationship with food by cultivating knowledge and pleasure at the table and in life</p>
  </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="pa4">
  <h2 class="lh-title">Trade guilt, shame, and nutrients for knowledge, enthusiasm, and wholeness.</h2>
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
</section>

<?php endwhile; endif; ?>

<section class="pa4">
  <h2>Recent blog posts</h2>
</section>

<?php get_template_part('includes/book-call-to-action'); ?>
<?php get_template_part('includes/newsletter-call-to-action'); ?>

<?php get_footer(); ?>
