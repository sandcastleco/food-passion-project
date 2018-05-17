<section class="pa4 cf cover" style="background-image: url(<?php get_image_uri('background-3.jpg'); ?>);">

  <div class="fl w-third">
    <h2>Recent blog posts</h2>
    <?php
     $posts = get_posts("numberposts=1");
     if( $posts ) :
     foreach( $posts as $post ) : setup_postdata( $post );
    ?>
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

    <?php endforeach; endif; ?>
  </div>

  <div class="fl w-third">
    <h2>Section about book / CTA to buy</h2>
  </div>

  <div class="fl w-third">
    <p>Looking to repair your relationship with food? Get Tiffany’s musings delivered right to your inbox, with a little food knowledge and a healthy dose of food pleasure, grace, and humor. As a thank you, you’ll get the first chapter of Tiffany’s book emailed to you.</p>
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

  <footer class="fl w-100 mt4 pa4 tc">
    <p>&copy; Food Passion Project, LLC <?php echo date("Y"); ?></p>
  </footer>

</section>

<?php wp_footer(); ?>
</body>
</html>
