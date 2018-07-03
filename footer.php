<section class="pa4 cover" style="background-image: url(<?php get_image_uri('background-3.jpg'); ?>);">

  <div class="mw8 center cf">

    <div class="fl-ns w-third-ns ph3-ns">
      <h2 class="bg-ink white pa2 f4 ttu fw1">Blog</h2>
      <?php
       $posts = get_posts("numberposts=5");
       if( $posts ) :
       foreach( $posts as $post ) : setup_postdata( $post );
      ?>
      <a href="<?php the_permalink() ?>" class="db bg-white-80 pa3 ink br bw2 mb2 link ink">
        <h3 class="mv0"><?php the_title(); ?></h3>
      </a>

      <?php endforeach; endif; ?>
    </div>

    <div class="fl-ns w-third-ns ph3-ns">
      <h2 class="compote">Buy the Food Passion Project Book!</h2>
      <p>A Guide to Repairing your Relationship with Food at the American Table. Finally—a book that addresses the intersection of pleasure and knowledge in how we come to the table!</p>
      <a class="db tc" href="http://book.foodpassionproject.com"><img src="<?php get_image_uri('book-button.png'); ?>" alt="Book cover"></a>
    </div>

    <div class="fl-ns w-third-ns ph3-ns">
      <p class="f4">Looking to repair your relationship with food? Get Tiffany’s musings delivered right to your inbox, with a little food knowledge and a healthy dose of food pleasure, grace, and humor. As a thank you, you’ll get the first chapter of Tiffany’s book emailed to you.</p>
      <form>
        <div>
          <label class="sr-only" for="name">Name</label>
          <input class="w-100 mb2 ph2 pt1 pb0 bn brandon" name="name" type="text" placeholder="Your name">
        </div>

        <div>
          <label class="sr-only" for="email">Email</label>
          <input class="w-100 mb2 ph2 pt1 pb0 bn brandon" name="email" type="email" placeholder="Your email">
        </div>

        <button class="brandon pv1 ph2 bg-white bt-0 bb-0 bl-0 br bw2 ink b--ink ttu b">Submit</button>
      </form>
    </div>

    <footer class="fl-ns w-100 mt4 pa4 tc">
      <p>&copy; Food Passion Project, LLC <?php echo date("Y"); ?></p>
    </footer>

  </div>

</section>

<?php wp_footer(); ?>
</body>
</html>
